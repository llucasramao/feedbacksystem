<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
//$imageName=$_FILES['img']['name'];
//'$imageName'

//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob',,'$dob',now())";
mysqli_query($conn,$query);

//upload image

//mkdir("images/$e");
//move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Usuário Registrado!<h3></font>";

}
}
?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-bottom:50px">
	<caption><h2 align="center">Novo Usuário</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Nome</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Email</td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Senha</td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Telefone</td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Tipo de atendimento</td>
					<Td><select name="pro" class="form-control" required>
					
					<option>Enxaqueca</option>
					<option>Dor2</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Médico</td>
					<Td><select name="sem" class="form-control" required>
					
					<option>Márcio Siega</option>
					<option>Médico 2</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Sexo</td>
					<Td>
				  Masculino <input type="radio" name="gen" value="m"/>
				  Feminino <input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Sintomas</td>
					<Td>
					 Dor de cabeça <input value="reading" type="checkbox" name="hob[]"/> 
					 Dor2 <input value="singin" type="checkbox" name="hob[]"/>
					 Dor3 <input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
<!--
				<tr>
					<td>Foto de pefil</td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr>
-->
				<tr>
					<td>Data de Nascimento</td>
					<Td>
	
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Dia</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>

					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Mês</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>

					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Ano</option>
					<?php 
					for($i=1900;$i<=2021;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>
					
					</td>
				</tr>
				<tr>					
<Td colspan="2" align="center">
<input type="submit" value="Salvar" class="btn btn-info" name="save"/>
<input type="reset" value="Apagar" class="btn btn-info"/>				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>
<?php 
extract($_POST);
if(isset($update))
{
//dob
$dob=$yy."-".$mm."-".$dd;
//hobbies
//$hob=implode(",",$hob);

//hobbies='$hob',
$query="update user set name='$n',mobile='$mob',gender='$gen',  dob='$dob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='Green'>Perfil Modificado com sucesso!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Atualização de perfil</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Nome Completo: </td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Email: </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				
				
				<tr>
					<td>Telefone: </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
				</tr>
				
				<tr>
					<td>Sexo: </td>
					<Td>
				Maculino <input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
				Feminino <input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
					</td>
				</tr>
<!--				
				<tr>
					<td>Choose Your hobbies</td>

					<Td>
					<?php 
					$arrr=explode(",",$res['hobbies']);
					?>
					
					
					Reading<input value="reading" <?php if(in_array("reading",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
					Singing<input value="singin" <?php if(in_array("singin",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
					Playing<input value="playing" <?php if(in_array("playing",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
					</td>
-->	
				</tr>
				
				
				<tr>
					<td>Data de Nascimento</td>
					<?php 
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>

					<select class="form-control" style="width:100px;float:left" name="dd">
					<option value="">Data</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					</select>


					<select class="form-control" style="width:100px;float:left" name="mm">
					<option value="">Mês</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					</select>
					

					<select class="form-control" style="width:100px;float:left" name="yy">
					<option value="">Ano</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Atualizar Perfil" name="update"/>
<input type="reset" class="btn btn-default" value="Apagar"/>
				
					</td>
				</tr>
			</table>
		</form>
	
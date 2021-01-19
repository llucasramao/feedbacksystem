<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>Preencha todos os campos!</font>";	
	}
	else
	{
$op=md5($op);	

$sql=mysqli_query($conn,"select * from user where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
	$err="<font color='green'>Senha Alterada!</font>";
	}
	else
	{
	$err="<font color='red'>As Senhas não coincidem!</font>";
	}
}

else
{

$err="<font color='red'>Senha antiga Errada!</font>";

}
}
}

?>
<h2 align="center">Atualizar Senha</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Senha Antiga</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Nova Senha</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Confirme Nova Senha</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<center>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Atualizar" name="save" class="btn btn-success"/>
		<input type="reset"  value="Apagar" class="btn btn-success"/>
		</div>	
	</center>
	</div>
</form>	
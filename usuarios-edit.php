<?php 
require_once('librerias/cabe.php');
require_once('librerias/conexionBD.php');

$id=0;
$usuario="";
$correo="";
$password="";

//echo $_GET['id'];
if(isset($_GET['id']))
{
	$sql="select * from usuarios where id=".$_GET['id'];
	$result=$conn->query($sql);
	$fila =$result->fetch_array();
	$id=$fila['id'];
	$correo=$fila['correo'];
	$usuario=$fila['usuario'];
	//$password=$fila['password'];
	$password="";
	
	//echo $password."<br>" ;
	//echo base64_encode($password)."<br>"  ;
}
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?=($id>0) ? 'Editar':'Nuevo' ?> Usuarios</h1>        
                <form action="usu-procesa.php" method="post">
                 <input type="hidden" name="id" value="<?=$id?>" >
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" class="form-control" value="<?=$usuario?>" >
                  </div>
                  
                 <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" value="<?=$correo?>" >
                  </div>
                  
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="clave" class="form-control" value="<?=$pasword?>" placeholder="Ingrese Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <a href="usuarios.php" class="btn btn-danger">Cancelar</a>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>
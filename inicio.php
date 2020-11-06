<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contenido</h1>
                <table width="317" border="1">
                  <tr>
                    <td width="58">Nombre: </td>
                    <td width="173">PARI LAYME OSCAR PEDRO</td>
                  </tr>
                  <tr>
                    <td>CI:</td>
                    <td>6730026</td>
                  </tr>
                </table>

            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>

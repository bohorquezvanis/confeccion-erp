<?php 
 		include('includes/config.php');
        include_once('includes/fn_crud.php');
 		$con_id=conectarse($host,$user,$pass,$db);
 		$id = $_GET['id'];
        $sql = "SELECT * FROM cargos WHERE id=$id";
        $rs= ejecutarSql($con_id,$sql);
        
?>
<!doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Accion Ver- Formulario Cargos</title>
       <script src="js/jquery-2.1.0.js"></script>
       <link rel="stylesheet" href="css/bootstrap.css" /
  </head>
  <body>
      <div class="content content-main">
         <table class="table">
            <thead> <th>id</th>
                    <th>nombre</th>
                    
            <thead>
            <tbody>
                    <?php while($reg = mysqli_fetch_array($rs)){ ?>
          					<tr><td><?php echo $reg['id'] ?></td>
          						<td><?php echo $reg['nombre'] ?></td>
          					</tr>	
       				<?php }?>
            </tbody>
            <tfooter><a href="cargos.php"  class="btn btn-success">Atras</a></tfooter>
         </table>
      </div>
      
  </body>
</html>

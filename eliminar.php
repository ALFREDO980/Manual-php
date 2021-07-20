<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Eliminar datos con php y mysqli</h1>
      <p class="lead">
        Para poder eliminar datos en mysql con php , solo necesitamos crear la cadena sql valida
        y ejecutarla con el objeto de conexion, asi resibiremos una respuesta en 1 o 0 tur o false, en 
        este tipo de sentencia en necesario agregar un where. 
      </p>
      <p style="color:red">
          Nota: No olvidar el where o te corren 
        </p>
        <h3>Ejemplo de como eliminar php con mysqli</h3>
        <p>$sql = "DELETE FROM t_table where idtabla= '$idvariable' </p>
        <p>$respuesta = mysqli_query($conexion, $sql);</p>
        <p>Con la variable $respuesta podremos validar si se ah llevado el delete o no .</p>
  
  </div>
</div>





<?php  include 'looter.php'; ?>

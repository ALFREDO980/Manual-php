<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Actualizar datos de php a mysql con mysqñi</h1>
      <p class="lead">
        Para poder utilizar datos con php a mysqli, necesitamos crear la cadena sql valida y 
        ejecutarla con el objeto de conexion, por otra parte la informacion que se desea actualizar 
        debe estar contenida en variables por convencion.
        <p style="color:red">
        Nota:No olvidar el where o te corren
      </p>

      <h3>Ejemplos de actualizacion con php y mysqli</h3>
      <p>$sql = "UPDATE t_table SET campo1='$variable', campo2 = '$variable2' WHERE id="$variable</p>
      <p>$respuesta = mysqli_query($conexion, ($sql);</p>
  </div>
</div>





<?php  include 'looter.php'; ?>

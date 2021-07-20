<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Insertar datos usando con php a mysql usando mysqli</h1>
      <p class="lead"></p>
      <p class="lead">Para poder insertar datos desde php a mysqli, solo necesitamos crear la cadena 
        de sql valida y ejecutarla con una conexion valida, los parametros a ser insertados, debe ir en unpackvariable
        como convencion, no necesitamos mas que saber la respuesta de mysqli_query para saber si la llevo con exito
        la isercion.
      </p>
      <h3>Ejemplo de como insertar con php a mysql</h3>
      <p>$sql = "INSERT INTO t_table (campo1, campo2) values ('variable1',<'variable2'</p>
      <p>$respuesta = mysqli_query ($conexion. $sql);</p>
      <p>La variable $respuesta nos retornara un 1 o un 0 si se ejecuta o no, asi sabremos si lo logro.</p>
  </div>
</div>





<?php  include 'looter.php'; ?>

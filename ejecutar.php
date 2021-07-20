<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container " style="font-family 'roboto', sans-serif;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Ejecucion de un jquery con mysqli</h1>
      <p class="lead">
        Para poder ejecutar un jquery de php al servidor de base de datos mysql, mariadb o mysqli,
        requerimos utilizar la funcion mysqli_query esta ya biene en el API nativo de php
        en su version 5 o superior, esta funcion requiere de dos parametros para poder ejecutarse
      </p>
          <li>Conexion al servidor</li>
          <li>Cadena de sql valida</li>
      </p>
      <h3>
        Ejemplo de mysqli_query
      </h3>
      <p>$sql = "SELECT campo1, campo2, * From t_tabla";</p>
      <p>$respuesta = mysqli_query($conexion, $sql); </p>
      <p>
        Siendo sql la variable que contiene la cadena que forma un sql, la variable respuesta,
        obtiene un 0 o 1 dependiendo si myqsli_query se ejecuto correctamente, la variable de conexion 
        esta expuesta <a href="conexion.php">aqui</a>
      </p>
      <p>
        Entiendase que cualqier cadena sql que se desea ejecutar (select, insert, update, delete),
        debe ser pasada ala funcion myqsli_query, siempre que se necesite hacer una peticion.
      </p>

  </div>
</div>


<?php  include 'looter.php'; ?>
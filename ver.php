<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container " style="font-family: 'Roboto', sans-serif;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Maneras de mostrar datos con ph y mysqli</h1>
      <p class="lead">
        <h3>Mostrar datos con mysqli_fetch_row</h3>
      </p>
          Esta funcion nos permite  convertir una consulta mysql a un arrelgo de una dimension
          por lo tanto podemos obtener el valor de un campo de la consulta por mmedio de un indice,
          la funcion mysql_fecht_array lleba como parametro una respuesta de ejecucion mysql, y un objeto de conexion 
      </p>
      <h3>Ejemplo de uso de mysql_fetch_row </h3>
      <p>
        <p>$sql = "SELECT campo1, campo2, campo3 From t_table";</p>
        <p>$respuesta = mysqli_query($conexion, $sql);</p>
        <p>$datos = mysqli_fetch_row($respuesta);</p>
        <p>echo $datos[0]; //esto nos retorna la informacion del campo1</p>
      </p>
      <h3>Ejemplo de loop de datos mysqli_fetch_row</h3>
      <p>
        <p>while($datos = mysqli_fetch_row($respuesta)) { //mientras datos sea ejecutado. continuara</p>
          <p>echo $datos[0]; //Esto nos permite obtener todos los datos de la columna</p>
      </p>
      <hr>
      <h3>Mostrar datos con mysql_fetch_row</h3>
      </p>
          Esta funcion nos permite  convertir una consulta mysql a un arrelgo de una asociativo
          por lo tanto podemos obtener el valor de un campo de la consulta por mmedio de una llave,
          la funcion mysql_fecht_array lleba como parametro una respuesta de ejecucion mysql,
          y un objeto de conexion 
      </p>
      <h3>Ejemplo de loop de datos mysqli_fetch_array</h3>
      <p>
        <p>while($datos = mysqli_fetch_row($respuesta)) { //mientras datos sea ejecutado. continuara</p>
          <p>echo $datos['campo1']; //Esto nos permite obtener todos los datos de la columna</p>
      </p>
  </div>
</div>


<?php  include 'looter.php'; ?>
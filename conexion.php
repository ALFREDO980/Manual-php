<?php  include 'header.php'; ?>

 <!-- Page Content -->
 <div class="container" style="font-family 'roboto', sans-serif;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Conectar con mysql php</h1>
      <p class="lead">
        <h3> Cuales son los argumentos o parametros necesarios en una conexion? </h3>
      </p>
      <p> para poder llevar acabo la conexion requerimos 4 argumentos:
        <ol>
          <li>El servidor web que normalmente es un ip, un dominio o localhost</li>
          <li>El usuario de base de datos</li>
          <li>El password del usuario</li>
          <li>El nombre de la BD</li>
        </ol>
     </p>
     <h3>Ejemplo sencilla de la conexion a mysql</h3>
     <p>
       Para poder utilizar el API en mysql, solo necesitamos llamar la funcion que vamos a utilizar
       , en este caso
     </p>
     <p>
       <p>$servidor = "localhost";</p>
       <p>$usuario = "Root";</p>
       <p>$Password = "";</p>
       <p>$bd = "mibd";</p>
       <p>$conexion - mysql_connect($servidor, $usuario, $password, $bd);</p>
     </p>
     <p>de esta forma podemos connection_aborder a mysql de una forma corta</p>

  </div>
</div>


<?php  include 'looter.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Librería Speaker</title>
        <meta charset="utf-8">
		<style type="text/css">
  #logo { margin-left:450px; margin-top:70px;}
  body{background:#F1F0F0;}
  h1 {display:none;}
  .ver_lista{background:#0166A0;width:250px;height:50px;font-family:arial;border-radius:10px;margin-left:520px;margin-top:40px;
                 padding:12px 70px;box-sizing:border-box;}
  .ver_lista a{color:white;text-decoration:none;text-transform:uppercase;font-size:20px;}
</style>
    </head>
    <body>
        <div class="container">
            <h1>Librería Speaker</h1>
            <img id="logo" src="img/logo.png" alt="logo"/>
         <p class="ver_lista">   <?= link_to_route('libros.index', 'Ingresar', [], ['class' => 'mi-link']);?></p>
        </div>
    </body>
</html>

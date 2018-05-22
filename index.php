<!DOCTYPE HTML>

<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type"text/css" href="css/style.css">

<title> Registro de usuarios </title>
<h2> Registro de usuarios </h2>
<p>Completa el formulario con los datos solicitados: </p>
<form action="autenticar.php" method="post">
<br>
        <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name"/>
        <Br></Br>
        </div>

        <div>
        <label for="apaterno">Apellido Paterno:</label>
        <input type="text" id="apaterno"/>
        <br></br> 
	</div> 

	<div>
		<label for="amaterno">Apellido Materno:</label>
		<input type="text" id="amaterno"/>
		<br></br>
	</div>

    <div>
   	<label for="tel">Telefono:</label>
    	<input type="text" id="tel" />
        <br></br>
    </div>

    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
        <br></br>
    </div>

        <div>
                <input type="submit" value="Enviar">
<br></br>
</div>

</form>
</head>
</html>

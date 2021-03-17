<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <fieldset><legend>Crear Clientes</legend>
    <form name="form1" method="POST" action="op_createcustomer.php">
    <label for="cedula" >Cédula:</label>
    <input type="text" placeholder="Cedula" id="cedula" maxlength="10" required>
    <br>
    <label for="primernombre">Primer Nombre:</label>
    <input type="text" placeholder="Primer Nombre" id="primernombre" maxlength="45" required>
    <br>
    <label for="segundonombre">Segundo Nombre:</label>
    <input type="text" placeholder="Segundo Nombre" id="segundonombre" maxlength="45">
    <br>
    <label for="primerapellido">Primer Apellido:</label>
    <input type="text" placeholder="Primer Apellido" id="primerapellido" maxlength="45" required>
    <br>
    <label for="segundoapellido">Segundo Apellido:</label>
    <input type="text" placeholder="Segundo Apellido" id="segundoapellido" maxlength="45">
    <br>
	<label for="email"> E-mail: </label>
    <input type="email" placeholder="E-mail" id="email">
    <br>
	<label for="telefono">Teléfono:</label>
    <input type="tel" placeholder="Teléfono" id="telefono" maxlength="50">
    <br>
    <label for="celular">Celular:</label>
    <input type="number" placeholder="Celular" id="celular" maxlength="45">
    <br>
    <label for="select">Genero: </label>
    <select type="text" placeholder="Genero" id="genero" maxlength="45">
    <option>Masculino</option>
    <option>Femenino</option>
    </select>
<br>
	<label for="fecha">Fecha de Nacimiento:</label>
    <input type="date" placeholder="Fecha" id="fecha">
    <br>
    <label for="direccion">Dirección:</label>
    <input type="text" placeholder="Direccion" id="direccion" maxlength="45">
    <br>
    <label for="barrio">Barrio:</label>
    <input type="text" placeholder="Barrio" id="barrio" maxlength="45">
    <br>
    <br>
      
    <label for="submit"></label>
  	<input type="button" placeholder="button" id="button" value="Enviar">
  </form>
  <ul>
  <ol><input type="button" value="Volver Menú" onClick="window.location.href='index.php' "></ol>
  </ul>
  </fieldset>
</body>
</html>
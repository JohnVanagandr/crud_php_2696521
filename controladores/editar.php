<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$datebase = new Database();
$connection = $datebase->getConnection();
$aprendiz = new Aprendiz($connection);

$id = $_REQUEST['id'];
$usuario = $aprendiz->getById($id);
?>

<form action="actualizar.php" method="post">
  <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
  <div>
    <label for="first_name">Nombre</label>
    <input type="text" id="first_name" name="first_name" value="<?= $usuario['first_name'] ?>" require>
  </div>
  <div>
    <label for="lats_name">Apellidos</label>
    <input type="text" id="lats_name" name="lats_name" value="<?= $usuario['lats_name'] ?>" require>
  </div>
  <div>
    <label for="birthdate">Fecha de nacimiento</label>
    <input type="date" id="birthdate" name="birthdate" value="<?= $usuario['birthdate'] ?>" require>
  </div>
  <div>
    <label for="email">Correo</label>
    <input type="text" id="email" name="email" value="<?= $usuario['email'] ?>" require>
  </div>
  <div>
    <label for="phone">Telefono</label>
    <input type="text" id="phone" name="phone" value="<?= $usuario['phone'] ?>" require>
  </div>
  <div>
    <label for="dni">DNI</label>
    <input type="text" id="dni" name="dni" value="<?= $usuario['dni'] ?>" readonly>
  </div>
  <div>
    <label for="user_account">Ficha</label>
    <input type="text" id="user_account" name="user_account" value="<?= $usuario['user_account'] ?>" require>
  </div>
  <div>
    <label for="average">Promedio</label>
    <input type="text" id="average" name="average" value="<?= $usuario['average'] ?>" require>
  </div>
  <button type="submit">Actualizar</button>
</form>
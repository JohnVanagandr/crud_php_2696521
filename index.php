<?php

require_once(__DIR__ . "/libs/Database.php");
require_once(__DIR__ . "/libs/Modelo.php");
include_once("clases/Aprendiz.php");

$datebase = new Database();
$connection = $datebase->getConnection();
$aprendiz = new Aprendiz($connection);

// $results =  $aprendiz->getAll();
// $result = $aprendiz->getById(3);


// $aprendiz->update(3, [
//   'first_name' => 'Jhon',
//   'lats_name' => "foronda",
//   'address' => "Sena Girón",
//   'user_account' => 2824003
// ]);
// $aprendiz->delete(2);

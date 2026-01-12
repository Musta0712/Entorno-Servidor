<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/CoreDB.php";

class UserDAO {



    public static function create($user) {

        //conexión
        $conn = CoreDB::getConnection();
        //sentencia preparada
        $sql = "INSERT into users (name, password) values (?, ?)";
        $ps = $conn->prepare($sql);
        //bind (pass la tenemos que hashear)
        $name = $user->getName();
        $pass = $user->getPass(); //$pass contiene la contraseña clara
        $passHash = password_hash($pass, PASSWORD_DEFAULT); //$passHash la tiene hasheada
        $ps->bind_param("ss", $name, $passHash);
        //lanza
        $ps->execute();
        //recupera id
        $id = $ps->insert_id;
        $user->setId($id);
        //cierra conexión
        $conn->close();

        return $id;
    }

    public static function verifyPassword($name, $pass): int {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * from users where name = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s" , $name);
        $ps->execute();
        $result = $ps->get_result();
    }
}
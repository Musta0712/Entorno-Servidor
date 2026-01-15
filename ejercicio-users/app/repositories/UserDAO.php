<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class UserDAO
{

    /**
     * Inserta en la bd un usuario. El método hashea la contraseña antes de meterla
     * en la bd
     * @param User $user usuario con la contraseña clara
     * @return bool true si se ha insertado bien, false si no se ha insertado (xej, 
     * ya existe un usuario con ese email)
     */
    public static function create(User $user): bool
    {
        $conn = CoreDB::getConnection();
        //todo el jueves la región
        $sql = "INSERT into users (email, name, pass, region) values (?, ?, ?, ?);";
        $ps = $conn->prepare($sql);
        $email = $user->getEmail();
        $name = $user->getName();
        $pass = password_hash($user->getPass(), PASSWORD_DEFAULT);
        $region = $user->getRegionAsString();
        $ps->bind_param("ssss", $email, $name, $pass, $region);

        try {
            $ps->execute();
            //Tengo que recuperar el id con el que se ha insertado
            $user->setId($ps->insert_id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }

        $conn->close();
        return true;
    }

    /**
     * Dado un email y una contraseña comrpueba que corresondan en la bd
     * @param string $email
     * @param string $pass Contraseña clara
     * @return int 1 si coinciden, -1 si el email está pero la contraseña no coincide,
     * -2 si el email no está en la bd
     */
    public static function checkPassword($email, $pass): int
    {
        //todo
        return 0;
    }
}
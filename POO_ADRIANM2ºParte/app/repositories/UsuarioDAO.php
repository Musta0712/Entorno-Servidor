<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class UsuarioDAO {

    /**
     * Inserta un usuario hasheando la contraseña.
     */
    public static function create( /*Usuario*/ $usuario) {
        $conn = CoreDB::getConnection(); 
        $sql = "INSERT INTO usuarios (name, email, pass) VALUES (?, ?, ?)";
        $ps = $conn->prepare($sql);
        
        $name = $usuario->getNombreUsuario();
        $email = $usuario->getEmail();
        $pass = $usuario->getPassword(); 
        
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        
        $ps->bind_param("sss", $name, $email, $passHash);
        $ps->execute();
        
        $id = $conn->insert_id;
        $usuario->setId($id);
        
        $ps->close();
        $conn->close();
        
        return $id;
    }

    public static function existsByEmail(string $email): bool {
        $conn = CoreDB::getConnection();
        $sql = "SELECT id FROM usuarios WHERE email = ? LIMIT 1";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $email);
        $ps->execute();
        $ps->store_result();

        $exists = $ps->num_rows > 0;

        $ps->close();
        $conn->close();
        return $exists;
    }

    public static function findByEmail(string $email): ?Usuario {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM usuarios WHERE email = ? LIMIT 1";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $email);
        $ps->execute();

        $result = $ps->get_result();

        if ($row = $result->fetch_assoc()) {
            return new Usuario(
                $row["name"],
                $row["email"],
                $row["pass"],
                (int)$row["id"]
            );
        }

        //$ps->close();
        //$conn->close();
        return null;
    }

        public static function read($id):?Usuario{
        return null;
    }

    /*public static function read(int $id): ?Usuario {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("i", $id);
        $ps->execute();
        
        $result = $ps->get_result();
        $usuario = null;

        if ($row = $result->fetch_assoc()) {
            $usuario = new Usuario(
                (int)$row["id"],
                $row["name"],
                $row["email"],
                $row["pass"]
            );
        }

        $ps->close();
        $conn->close();
        return $usuario;
    }*/
}
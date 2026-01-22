<?php
class CoreDB {
    private static ?PDO $conexion = null;

    public static function getConexion(): PDO {
        if (self::$conexion === null) {
            self::$conexion = new PDO(
                "mysql:host=localhost;dbname=pokemoncitos;charset=utf8",
                "root",
                ""
            );
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conexion;
    }
}
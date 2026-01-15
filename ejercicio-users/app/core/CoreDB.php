<?php
class CoreDB
{
    /**
     * Devuelve una conexión a la bd shop
     * @return mysqli Conexión mysqli con la BD
     * @throws Exception Excepción si no se ha podido realizar la conexión
     */
    public static function getConnection(): mysqli {
        return new mysqli("127.0.0.1", "root", "Sandia4you", "library");
    }
}
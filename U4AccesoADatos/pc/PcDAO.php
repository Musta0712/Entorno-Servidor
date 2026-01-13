<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/Component.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/Pc.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/U4AccesoADatos/pc/ComponentDAO.php";
class PcDAO
{
    /**
     * Create / insert.
     * Guarda en la bd un ordenador, y también guarda todos sus componentes
     * @param Pc $pc
     * @return bool true si lo ha insertado, false si no lo ha insertado.
     */
    public static function create($pc): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT into pcs (id, owner, brand, price)
            values(?, ?, ?, ?)";

        $ps = $conn->prepare($sql); /*prepared statement - sentencia preparada */

        /*operación de binding: asignar valores a cada ? (es decir, asignar valores
        donde faltan)*/
        $id = $pc->getId();
        $owner = $pc->getOwner();
        $brand = $pc->getBrand();
        $price = $pc->getPrice();
        $ps->bind_param("sssd", $id, $owner, $brand, $price);

        /* ejecuto la sentencia */
        try{
            $ret = $ps->execute();  /* aquí se guarda en la bd el ordenador */

            //Guardo los componentes en la bd:
            foreach ($pc->getComponents() as $component) {
                ComponentDAO::create($component, $id);
            }
        }catch(mysqli_sql_exception $e){    //alternativa }catch(Exception $e){ 
            //return $e->getMessage();  //aquí devolvería el mensaje asociado a la excepción
            $conn->close();
            return false;
        }

        $conn->close();
        return $ret;
        
    }

    /**
     * Read / select
     * Lee un pc de la bd con todos sus componentes
     * @param string $id
     * @return Pc Pc leído de la bd o null si no existe el id.
     */
    public static function read($id): ?Pc
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * from pcs where id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $id);
        $ps->execute();
        $result = $ps->get_result();
        //En result tengo el objeto mysqli_result con la información leída de la bd
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            //fetch_assoc convierte el primer resultado que hay en el mysqli_result en un array 
            // asociativo más fácil de manejar
            $pc = new Pc($id, $row["owner"], $row["brand"], $row["price"]);

            //Ahora tengo que leer los componentes donde su pc_id sea el de este pc:
            $pc->setComponents(ComponentDAO::readByPcId($id));
        } else {
            $pc = null;
        }
        $conn->close();
        return $pc;
    }

    public static function update($pc): bool
    {
        //todo
        return false;
    }

    /**
     * Elimina un pc de la base de datos <strong>junto con todos sus componentes asociados</strong>
     * @param string $id id del pc que quiero eliminar
     * @return Pc|null objeto pc eliminado o null
     */
    public static function delete($id): ?Pc
    {
        //primero elimino componentes asociados (porque la FK está en components)
        //y luego elimino pc



        //todo el martes
        return null;
    }

    public static function readAll()
    {
        //todo
    }

    /**
     * Lee de la bd los ordenadores con un precio entre un rango
     * @param mixed $min precio mínimo
     * @param mixed $max precio máximo
     * @return array Array con los pcs 
     */
    public static function readBetweenPrice($min, $max)
    {
        //todo
    }
}
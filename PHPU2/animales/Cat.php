<?php
class Cat
{
    //Atributos
    private string $name;
    private string $color = "color not known";  //valor de inicialización
    private $age;   //no es obligatorio poner el tipo

    //Constructor
    public function __construct($name, $color, $age = -1)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    //Getters y setters
    public function getName(): string{
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        //return $this;
    }


    //Métodos
    public function miaw(){
        return "miaw";
    }


}
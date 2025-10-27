<?php

class Minotauro
{
    //Se pueden crear atributos extra si queremos (es un poco raro)
    private float $percentage;
    
    //Los atributos también pueden ser objetos de otras clases
    private Cat $pet;

    //Los atributos están declarados dentro del constructor
    public function __construct(
        private string $name,
        private int $age = -1
    ) {}

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function __tostring(){
        return $this->name . " tiene " . $this->age . " años.";
    }

    /**
     * Get the value of pet
     */ 
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Set the value of pet
     *
     * @return  self
     */ 
    public function setPet($pet)
    {
        $this->pet = $pet;

        return $this;
    }
}
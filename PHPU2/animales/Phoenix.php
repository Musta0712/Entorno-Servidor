<?php

class Phoenix
{
    //1. Atributos (Estados)
    private string $name;
    private $age;

    //2. Constructor
    public function __construct(string $name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //3. getters y setters
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    //Función happyBirthday que sume 1 año al animal y devuelva su
    //edad final. Si tenía age -1, que devuelva false.
    public function happyBirthday()
    {
        if ($this->age < 0) {
            return false;
        } else {
            $this->age++;
            return $this->age;
        }
    }
}
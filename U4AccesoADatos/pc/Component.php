<?php

class Component
{
    //atributos y esas cosas
    function __construct(
        private string $name,
        private string $brand,
        private string $model,
        private int $id = -1
    ) {}

    public function __toString()
    {
        return "id: $this->id - Name: $this->name - Bran: $this->brand - Model: $this->model";
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
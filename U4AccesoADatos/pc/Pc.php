<?php

class Pc
{
    function __construct(
        private string $id, /*no es autoincremental en la bd*/
        private string $owner,
        private string $brand,
        private float $price,
        private array $components = []
    ) {}

    public function addComponent($c)
    {
        $this->components[] = $c;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of components
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of components
     *
     * @return  self
     */
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    public function __toString()
    {
        return "$this->id $this->owner $this->brand $this->price - Components: " .
            implode(" | ", $this->components);
    }
}
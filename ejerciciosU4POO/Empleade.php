<?php 

class Empleade {
    private string $name;
    private string $surname;
    private float $salary;
    

    public function __construct(string $name, string $surname, float $salary = -1) {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    

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
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function __tostring(): string {
        return " 👤 Nombre completo: " . $this->getNameComplete() . " | 💰 sueldo: " . ($this->salary == -1 ? "No especificado" : number_format($this->salary, 2) . " € ");
    }

    public function getNameComplete(): string {
        return $this->name . " " . $this->surname;
    }

    public function payTaxes() : float {
    if ($this->salary == -1) {
        return -1;
    }

    $salary = $this->salary;
    $taxes = 0.0;

    if ($salary <= 12450) {
        $taxes = $salary * 0.19;
    } else if ($salary <= 20200) {
        $taxes = (12450 * 0.19) +
                 (($salary - 12450) * 0.24);
    } else if ($salary <= 35200) {
        $taxes = (12450 * 0.19) +
                 ((20200 - 12450) * 0.24) +
                 (($salary - 20200) * 0.30);
    } else if ($salary <= 60000) {
        $taxes = (12450 * 0.19) +
                 ((20200 - 12450) * 0.24) +
                 ((35200 - 20200) * 0.30) +
                 (($salary - 35200) * 0.37);
    } else if ($salary <= 300000) {
        $taxes = (12450 * 0.19) +
                 ((20200 - 12450) * 0.24) +
                 ((35200 - 20200) * 0.30) +
                 ((60000 - 35200) * 0.37) +
                 (($salary - 60000) * 0.45);
    } else {
        $taxes = (12450 * 0.19) +
                 ((20200 - 12450) * 0.24) +
                 ((35200 - 20200) * 0.30) +
                 ((60000 - 35200) * 0.37) +
                 ((300000 - 60000) * 0.45) +
                 (($salary - 300000) * 0.47);
    }
    return $taxes;
    }
}
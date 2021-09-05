<?php

namespace CondeLua\Bank\Model\Company;

use CondeLua\Bank\Model\Abstraction\CPF;
use CondeLua\Bank\Model\Abstraction\Person;

abstract class Employee extends Person {

    private float $salary; // hourly WAGE

    public function __construct(string $name, CPF $cpf, float $salary) {
        parent::__construct($name, $cpf);
        $this->salary = $salary;
    }

    public function changeName(string $newName): void {
        $this->validateName($newName);
        $this->name = $newName;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    abstract public function calculateBonus();
}

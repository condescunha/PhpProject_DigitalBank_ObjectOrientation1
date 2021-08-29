<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author arauj
 */
class Employee extends Person {

    private string $cargo;

    public function __construct(string $name, CPF $cpf, string $cargo) {
        $this->cargo = $cargo;
        parent::__construct($name, $cpf);
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function changeName(string $newName): void {
        $this->validateName($newName);
        $this->name = $newName;
    }

}

<?php

class Person {
    protected string $name;
    private CPF $cpf;
    
    public function __construct(string $name, CPF $cpf) {
        $this->validateName($name);
        $this->cpf = $cpf;
    }

     public function getName(): string {
        return $this->name;
    }

    public function getCpf(): string {
        return $this->cpfNumber->getNumber();
    }
    
    //validate name length
    protected function validateName(string $name): string{
        if (strlen($name) < 5) {
            echo "Name must be at least 5 characters long";
            exit();
        }
        return $name;
    }
}

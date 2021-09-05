<?php
namespace CondeLua\Bank\Model\Abstraction;

class Person {
    protected string $name;
    private CPF $cpf;
    
    public function __construct(string $name, CPF $cpf) {
        $this->validateName($name);
        $this->name = $name;
        $this->cpf = $cpf;
    }

     public function getName(): string {
        return $this->name;
    }

    public function getCpf(): string {
        return $this->cpf->getNumber();
    }
    
    //validate name length
    protected function validateName(string $name){
        if (strlen($name) < 5) {
            echo "Name must be at least 5 characters long";
            exit();
        }
    }
}

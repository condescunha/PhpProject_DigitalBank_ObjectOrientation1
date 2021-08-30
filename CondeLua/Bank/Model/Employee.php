<?php
namespace CondeLua\Bank\Model;

class Employee extends Person {

    private string $office;

    public function __construct(string $name, CPF $cpf, string $office) {
        parent::__construct($name, $cpf);
        $this->office = $office;
    }

    public function getOffice(): string {
        return $this->office;
    }

    public function changeName(string $newName): void {
        $this->validateName($newName);
        $this->name = $newName;
    }

}

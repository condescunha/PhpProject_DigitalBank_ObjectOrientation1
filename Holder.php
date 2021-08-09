<?php
/**
 * Description of Holder
 *
 * @author arauj
 */
class Holder {

    private Address $adress;
    private string $name;
    private CPF $cpfNumber;
    
    //validate name length
    private function validateName(string $name): string{
        if (strlen($name) < 5) {
            echo "Name must be at least 5 characters long";
            exit();
        }
        return $name;
    }
    
    //build the holder object
    public function __construct(string $typedName, CPF $typedCPF, Address $address ) {
        $this->name = $this->validateName($typedName);
        $this->cpfNumber = $typedCPF;
        $this->address = $address;
    }
    
    //Show the holder name
    public function getName() {
        return $this->name;
    }
    
    //show the CPF number
    public function getCpfNumber(): string {
        return $this->cpfNumber->getNumber();
    }
    
    public function getAddress(): Adress {
        return $this->address;
    }


    
}

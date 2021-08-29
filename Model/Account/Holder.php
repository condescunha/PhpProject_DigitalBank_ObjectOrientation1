<?php
/**
 * Description of Holder
 *
 * @author arauj
 */
class Holder extends Person{

    private Address $address;
        
    //build the holder object
    public function __construct(string $name, CPF $cpf, Address $address) {
        $this->address = $address;
        parent::__construct($name, $cpf);      
    }
       
    public function getAddress(): Adress {
        return $this->address;
    }


    
}

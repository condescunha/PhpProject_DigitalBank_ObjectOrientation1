<?php
namespace CondeLua\Bank\Model\Account;

require_once 'CondeLua\Bank\Model\Person.php';

use CondeLua\Bank\Model\Person;
use CondeLua\Bank\Model\CPF;
use CondeLua\Bank\Model\Address;
/**
 * Description of Holder
 *
 * @author arauj
 */
class Holder extends Person{

    private Address $address;
        
    //build the holder object
    public function __construct(string $name, CPF $cpf, Address $address) {
        parent::__construct($name, $cpf);  
        $this->address = $address;
    }
       
    public function getAddress(): Adress {
        return $this->address;
    }
    
}

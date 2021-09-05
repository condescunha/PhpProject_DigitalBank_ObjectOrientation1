<?php

namespace CondeLua\Bank\Model\Account;

use CondeLua\Bank\Model\Abstraction\Address;
use CondeLua\Bank\Model\Abstraction\Authenticable;
use CondeLua\Bank\Model\Abstraction\CPF;
use CondeLua\Bank\Model\Abstraction\Person;

/**
 * Description of Holder
 *
 * @author arauj
 */
class Holder extends Person implements Authenticable{

    private Address $address;

    //build the holder object
    public function __construct(string $name, CPF $cpf, Address $address) {
        parent::__construct($name, $cpf);
        $this->address = $address;
    }

    public function getAddress(): Adress {
        return $this->address;
    }

    public function beAbleToAuthenticate(string $password): bool {
        return $password === "abcd";
    }

}

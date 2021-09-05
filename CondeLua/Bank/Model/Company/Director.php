<?php

namespace CondeLua\Bank\Model\Company;

use CondeLua\Bank\Model\Abstraction\Authenticable;

class Director extends Employee implements Authenticable{

    public function calculateBonus(): float {
        return $this->getSalary() * 2;
    }

    public function beAbleToAuthenticate(string $password): bool {
        return $password === "1234";
    }
}

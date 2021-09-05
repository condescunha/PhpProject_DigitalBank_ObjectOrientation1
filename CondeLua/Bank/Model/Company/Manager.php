<?php

namespace CondeLua\Bank\Model\Company;

use CondeLua\Bank\Model\Abstraction\Authenticable;

class Manager extends Employee implements Authenticable{

    public function calculateBonus(): float {
        return $this->getSalary();
    }

    public function beAbleToAuthenticate(string $password): bool {
        return $password === "5678";
    }

}

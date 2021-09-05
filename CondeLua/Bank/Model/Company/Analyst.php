<?php

namespace CondeLua\Bank\Model\Company;

class Analyst extends Employee {

    public function calculateBonus(): float {
        return $this->getSalary() * 0.1;
    }

}

<?php

namespace CondeLua\Bank\Service;

use CondeLua\Bank\Model\Company\Employee;

class BonusController {

    private float $totalBonus = 0;

    public function applyBonus(Employee $employee) {
        $this->totalBonus += $employee->calculateBonus();
    }

    public function getTotalBonus(): float {
        return $this->totalBonus;
    }

}

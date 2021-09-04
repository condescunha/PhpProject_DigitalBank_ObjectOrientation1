<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CondeLua\Bank\Model\Account;

/**
 * Description of CheckingAccount
 *
 * @author arauj
 */
class CheckingAccount extends Account {

    protected function feePercentage(): float {
        return 0.05;
    }

    // transfer method -----------------------------------------------------
    public function transfer(float $transferValue, Account $destinationAccount) {
        $this->withdraw($transferValue);
        $destinationAccount->deposit($transferValue); 
    }
    
}

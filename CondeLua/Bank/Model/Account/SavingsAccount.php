<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CondeLua\Bank\Model\Account;

/**
 * Description of SavingsAccount
 *
 * @author arauj
 */
class SavingsAccount extends Account{
    
    protected function feePercentage(): float {
        return 0.03;
    }
    
}

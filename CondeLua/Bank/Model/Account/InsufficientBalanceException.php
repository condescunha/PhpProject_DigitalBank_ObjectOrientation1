<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace CondeLua\Bank\Model\Account;

/**
 * Description of InsufficientBalanceException
 *
 * @author Marcondes
 */
class InsufficientBalanceException extends \DomainException{
    
    public function __construct(float $withdrawValue, float $currentBalance) {
        $message = "You tried to withdraw {$withdrawValue} but the balance is {$currentBalance}.";
        parent::__construct($message);
    }
}

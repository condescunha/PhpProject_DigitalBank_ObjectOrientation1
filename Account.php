<?php

/**
 * Description of Account
 *
 * @author arauj
 */

class Account {
    private Holder $holder;
    private float $balance;
    private static $accountNumber = 0;
    
    public function __construct(Holder $typedHolder) {
        $this->holder = $typedHolder;
        $this->balance = 0;
        self::$accountNumber++;
    }
    
    // deposit methods -----------------------------------------------------
    private function checkDepositAmount(float $depositAmount) {
        if ($depositAmount <= 0) {
            echo "The deposit amount must be greater than zero.";
            exit();
        }
    }
    
    public function deposit(float $depositAmount) {
        $this->checkDepositAmount($depositAmount);
        $this->balance = $depositAmount;
    }
    
    // accessor methods -----------------------------------
    public function getHolderName(): string {
        return $this->holder->getName();
    }
    
    public function getHolderCPF(): string {
        return $this->holder->getCpfNumber();
    }
    
    public function getBalance(): float {
        return $this->balance;
    }
    
    public function getAccountNumber() {
        self::$accountNumber;
    }
}

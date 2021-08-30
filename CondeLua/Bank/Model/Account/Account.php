<?php
namespace CondeLua\Bank\Model\Account;
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
    
     public function __destruct(){
        self::$accountNumber--;
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
        $this->balance += $depositAmount;
    }
    
    // withdraw methods -----------------------------------------------------
    private function checkWithdrawValue(float $withdrawValue) {
        if ($withdrawValue <= 0 || $withdrawValue > $this->balance) {
            echo "The withdraw value must be greater than zero and less than the balance.";
            exit();
        }
    }
    
    public function withdraw(float $withdrawValue) {
        $this->checkWithdrawValue($withdrawValue);
        $this->balance -= $withdrawValue;
    }
    
    // transfer method -----------------------------------------------------
    public function transfer(float $transferValue, Account $destinationAccount) {
        $this->withdraw($transferValue);
        $destinationAccount->deposit($transferValue); 
    }
    
    // accessor methods -----------------------------------
    public function getHolderName(): string {
        return $this->holder->getName();
    }
    
    public function getHolderCPF(): string {
        return $this->holder->getCpf();
    }
    
    public function getBalance(): float {
        return $this->balance;
    }
    
    public function getAccountNumber() {
        self::$accountNumber;
    }
}

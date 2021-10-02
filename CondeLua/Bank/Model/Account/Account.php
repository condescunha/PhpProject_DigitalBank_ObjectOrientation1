<?php

namespace CondeLua\Bank\Model\Account;

use CondeLua\Bank\Model\Account\Holder;

/**
 * Description of Account
 *
 * @author arauj
 */
abstract class Account {

    private Holder $holder;
    private float $balance;
    private static $accountNumber = 0;

    public function __construct(Holder $typedHolder) {
        $this->holder = $typedHolder;
        $this->balance = 0;
        self::$accountNumber++;
    }

    public function __destruct() {
        self::$accountNumber--;
    }

    // deposit methods -----------------------------------------------------
    private function checkDepositAmount(float $depositAmount) {
        if ($depositAmount <= 0) {
            /*
             * echo "The deposit amount must be greater than zero.";
             * exit();
             */
            throw new \InvalidArgumentException("The deposit value must be positive!");
        }
        
    }

    public function deposit(float $depositAmount) {
        $this->checkDepositAmount($depositAmount);
        $this->balance += $depositAmount;
    }

    // Fee percentage method ------------------------------------------------
    abstract protected function feePercentage(): float;

    // withdraw methods -----------------------------------------------------
    private function checkWithdrawValue(float $withdrawValue) {
        if ($withdrawValue < 0 || $withdrawValue > $this->balance) {
            /*
             * echo "The withdraw value must be greater than zero and less than the balance.";
             * exit();
             */
            throw new InsufficientBalanceException($withdrawValue, $this->balance);
        }
    }

    public function withdraw(float $withdrawValue) {
        $withdrawFee = $withdrawValue * $this->feePercentage();
        $withdrawalAmount = $withdrawValue + $withdrawFee;
        $this->checkWithdrawValue($withdrawalAmount);
        $this->balance -= $withdrawalAmount;
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

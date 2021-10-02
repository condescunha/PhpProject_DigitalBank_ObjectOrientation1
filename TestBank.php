<?php

require_once 'autoload.php';

use CondeLua\Bank\Model\Abstraction\Address;
use CondeLua\Bank\Model\Abstraction\CPF;
use CondeLua\Bank\Model\Account\CheckingAccount;
use CondeLua\Bank\Model\Account\Holder;
use CondeLua\Bank\Model\Account\InsufficientBalanceException;
use CondeLua\Bank\Model\Account\SavingsAccount;
use CondeLua\Bank\Service\Authenticator;

/*
 * Project Digital Bank for to study PHP language.
 * Author: Marcondes C Araujo
 * Date: 2021-08-07.
 */

echo "//Test one ---------------------------------------" . PHP_EOL;
$address = new Address("Campinas", "Taquaral", "Adalberto Maia", "12");
$cpf = new CPF("246.648.246-00");
$holder = new Holder("Marcondes Araujo", $cpf, $address);
$checkingAccount = new CheckingAccount($holder);

$checkingAccount->deposit(345.89);

echo "Holder: {$checkingAccount->getHolderName()}" . PHP_EOL;
echo "CPF: {$checkingAccount->getHolderCPF()}" . PHP_EOL;
echo "Balance after deposit: {$checkingAccount->getBalance()}" . PHP_EOL;

try { 
    $checkingAccount->withdraw(-5);
} catch (InsufficientBalanceException $exc) {
    echo $exc->getMessage(). PHP_EOL;
}

echo "Balance before withdraw: {$checkingAccount->getBalance()}" . PHP_EOL;

echo "//Test two ---------------------------------------" . PHP_EOL;
$cpf2 = new CPF("467.635.759-45");
$holder2 = new Holder("Luana Araujo", $cpf2, $address);
$checkingAccount2 = new CheckingAccount($holder2);

try {
    $deposit = -25;
    $checkingAccount2->deposit($deposit);
} catch (InvalidArgumentException $exc) {
    echo $exc->getMessage().PHP_EOL;
    echo "Deposit value: {$deposit}.".PHP_EOL;
}

echo "Holder: {$checkingAccount2->getHolderName()}" . PHP_EOL;
echo "CPF: {$checkingAccount2->getHolderCPF()}" . PHP_EOL;
echo "Balance after deposit: {$checkingAccount2->getBalance()}" . PHP_EOL;

echo "//Test three ---------------------------------------" . PHP_EOL;
try {
    $checkingAccount->transfer(12, $checkingAccount2);
} catch (InsufficientBalanceException $exc) {
    echo $exc->getMessage().PHP_EOL;
}
echo "{$checkingAccount->getHolderName()} balance: {$checkingAccount->getBalance()}" . PHP_EOL;
echo "{$checkingAccount2->getHolderName()} balance: {$checkingAccount2->getBalance()}" . PHP_EOL;

try {
    $checkingAccount2->transfer(20, $checkingAccount);
} catch (InsufficientBalanceException $exc) {
    echo $exc->getMessage().PHP_EOL;
}
echo "{$checkingAccount->getHolderName()} balance: {$checkingAccount->getBalance()}" . PHP_EOL;
echo "{$checkingAccount2->getHolderName()} balance: {$checkingAccount2->getBalance()}" . PHP_EOL;

echo "//Test four ---------------------------------------" . PHP_EOL;
$cpf3 = new CPF("672.457.326-03");
$holder3 = new Holder("Miquéias Araujo", $cpf2, $address);
$savingsAccount = new SavingsAccount($holder3);

$savingsAccount->deposit(436.75);
echo "Balance after deposit: {$savingsAccount->getBalance()}" . PHP_EOL;

$savingsAccount->withdraw(73.44);
echo "Balance after withdraw: {$savingsAccount->getBalance()}" . PHP_EOL;

echo "//Test five ---------------------------------------" . PHP_EOL;
$authenticator = new Authenticator();
$authenticator->tryToLogin($holder3, "abcd");

echo "//Test six ---------------------------------------" . PHP_EOL;
echo $address;

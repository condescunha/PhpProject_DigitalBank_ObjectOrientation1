<?php

require_once 'autoload.php';

use CondeLua\Bank\Model\Abstraction\Address;
use CondeLua\Bank\Model\Abstraction\CPF;
use CondeLua\Bank\Model\Account\CheckingAccount;
use CondeLua\Bank\Model\Account\Holder;
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

$checkingAccount->deposit(352.50);

echo "Holder: {$checkingAccount->getHolderName()}" . PHP_EOL;
echo "CPF: {$checkingAccount->getHolderCPF()}" . PHP_EOL;
echo "Balance after deposit: {$checkingAccount->getBalance()}" . PHP_EOL;

$checkingAccount->withdraw(146.25);

echo "Balance before withdraw: {$checkingAccount->getBalance()}" . PHP_EOL;

echo "//Test two ---------------------------------------" . PHP_EOL;
$cpf2 = new CPF("467.635.759-45");
$holder2 = new Holder("Luana Araujo", $cpf2, $address);
$checkingAccount2 = new CheckingAccount($holder2);

$checkingAccount2->deposit(215.36);

echo "Holder: {$checkingAccount2->getHolderName()}" . PHP_EOL;
echo "CPF: {$checkingAccount2->getHolderCPF()}" . PHP_EOL;
echo "Balance after deposit: {$checkingAccount2->getBalance()}" . PHP_EOL;

$checkingAccount2->withdraw(53.64);

echo "Balance after withdraw: {$checkingAccount2->getBalance()}" . PHP_EOL;

echo "//Test three ---------------------------------------" . PHP_EOL;
$checkingAccount->transfer(12, $checkingAccount2);
echo "{$checkingAccount->getHolderName()} balance: {$checkingAccount->getBalance()}" . PHP_EOL;
echo "{$checkingAccount2->getHolderName()} balance: {$checkingAccount2->getBalance()}" . PHP_EOL;

$checkingAccount2->transfer(20, $checkingAccount);
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

$authenticator = new Authenticator();
$authenticator->tryToLogin($holder3, "abcd");

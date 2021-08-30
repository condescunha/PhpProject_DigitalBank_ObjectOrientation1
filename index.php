<?php

require_once 'CondeLua\Bank\Model\Address.php';
require_once 'CondeLua\Bank\Model\Account\Holder.php';
require_once 'CondeLua\Bank\Model\Person.php';
require_once 'CondeLua\Bank\Model\CPF.php';
require_once 'CondeLua\Bank\Model\Account\Account.php';

use CondeLua\Bank\Model\Account\Holder;
use CondeLua\Bank\Model\Address;
use CondeLua\Bank\Model\CPF;
use CondeLua\Bank\Model\Account\Account;

/* 
 * Project Digital Bank for to study PHP language.
 * Author: Marcondes C Araujo
 * Date: 2021-08-07.
 */

echo "//Test one ---------------------------------------".PHP_EOL;
$address = new Address("Campinas", "Taquaral", "Adalberto Maia", "12");
$cpf = new CPF("246.648.246-00");
$holder = new Holder("Marcondes Araujo", $cpf, $address);
$account = new Account($holder);

$account->deposit(352.50);

echo "Holder: {$account->getHolderName()}".PHP_EOL;
echo "CPF: {$account->getHolderCPF()}".PHP_EOL;
echo "Balance after deposit: {$account->getBalance()}".PHP_EOL;

$account->withdraw(146.25);

echo "Balance before withdraw: {$account->getBalance()}".PHP_EOL;

echo "//Test two ---------------------------------------".PHP_EOL;
$cpf2 = new CPF("467.635.759-45");
$holder2 = new Holder("Luana Araujo", $cpf2, $address);
$account2 = new Account($holder2);

$account2->deposit(215.36);

echo "Holder: {$account2->getHolderName()}".PHP_EOL;
echo "CPF: {$account2->getHolderCPF()}".PHP_EOL;
echo "Balance after deposit: {$account2->getBalance()}".PHP_EOL;

$account2->withdraw(53.64);

echo "Balance before withdraw: {$account2->getBalance()}".PHP_EOL;

echo "//Test three ---------------------------------------".PHP_EOL;
$account->transfer(12, $account2);
echo "{$account->getHolderName()} balance: {$account->getBalance()}".PHP_EOL;
echo "{$account2->getHolderName()} balance: {$account2->getBalance()}".PHP_EOL;

$account2->transfer(20, $account);
echo "{$account->getHolderName()} balance: {$account->getBalance()}".PHP_EOL;
echo "{$account2->getHolderName()} balance: {$account2->getBalance()}".PHP_EOL;
<?php
require_once 'CPF.php';
require_once 'Holder.php';
require_once 'Account.php';

/* 
 * Project Digital Bank for to study PHP language.
 * Author: Marcondes C Araujo
 * Date: 2021-08-07.
 */

echo "//Test one ---------------------------------------".PHP_EOL;
$cpf = new CPF("246.648.246-00");
$holder = new Holder("Marcondes Araújo", $cpf);
$account = new Account($holder);

$account->deposit(352.50);

echo "Holder: {$holder->getName()}".PHP_EOL;
echo "CPF: {$holder->getCpfNumber()}".PHP_EOL;
echo "Balance after deposit: {$account->getBalance()}".PHP_EOL;

$account->withdraw(146.25);

echo "Balance before withdraw: {$account->getBalance()}".PHP_EOL;

echo "//Test two ---------------------------------------".PHP_EOL;
$cpf2 = new CPF("467.635.759-45");
$holder2 = new Holder("Luana Araújo", $cpf2);
$account2 = new Account($holder2);

$account2->deposit(215.36);

echo "Holder: {$holder2->getName()}".PHP_EOL;
echo "CPF: {$holder2->getCpfNumber()}".PHP_EOL;
echo "Balance after deposit: {$account2->getBalance()}".PHP_EOL;

$account2->withdraw(53.64);

echo "Balance before withdraw: {$account2->getBalance()}".PHP_EOL;

echo "//Test three ---------------------------------------".PHP_EOL;
$account->transfer(12, $account2);
echo "{$holder->getName()} balance: {$account->getBalance()}".PHP_EOL;
echo "{$holder2->getName()} balance: {$account2->getBalance()}".PHP_EOL;

$account2->transfer(20, $account);
echo "{$holder->getName()} balance: {$account->getBalance()}".PHP_EOL;
echo "{$holder2->getName()} balance: {$account2->getBalance()}".PHP_EOL;
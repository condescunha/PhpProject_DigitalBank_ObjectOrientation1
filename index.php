<?php
require_once 'CPF.php';
require_once 'Holder.php';

/* 
 * Project Digital Bank for to study PHP language.
 * Author: Marcondes C Araujo
 * Date: 2021-08-07.
 */

//Test one ---------------------------------------
$cpf = new CPF("246.648.246-00");
$holder = new Holder("Marcondes Araújo", $cpf);

echo $holder->getName().PHP_EOL;
echo $holder->getCpfNumber().PHP_EOL;

//Test two ---------------------------------------
$cpf2 = new CPF("467.635.759-45");
$holder2 = new Holder("Luana Araújo", $cpf2);

echo $holder2->getName().PHP_EOL;
echo $holder2->getCpfNumber().PHP_EOL;
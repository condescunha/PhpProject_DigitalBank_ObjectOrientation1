<?php

require_once 'autoload.php';

use CondeLua\Bank\Model\Abstraction\CPF;
use CondeLua\Bank\Model\Company\Analyst;
use CondeLua\Bank\Model\Company\Director;
use CondeLua\Bank\Model\Company\Manager;
use CondeLua\Bank\Model\Company\VideoEditor;
use CondeLua\Bank\Service\Authenticator;
use CondeLua\Bank\Service\BonusController;

$authenticator = new Authenticator();

// IT Video Editor
$nameVideoEditor = "Sarah Araújo";
$cpfVideoEditor = new CPF("397.156.214-82");
$salaryVideoEditor = 3745.00;
$videoEditor = new VideoEditor($nameVideoEditor, $cpfVideoEditor, $salaryVideoEditor);
echo "Video Editor: {$videoEditor->getName()}, Salary: {$videoEditor->getSalary()}" . PHP_EOL;

// Systems Analyst
$nameAnalyst = "Marcondes Araújo";
$cpfAnalyst = new CPF("357.951.456-82");
$salaryAnalyst = 7500.00;
$analyst = new Analyst($nameAnalyst, $cpfAnalyst, $salaryAnalyst);
echo "Systems Analyst: {$analyst->getName()}, Salary: {$analyst->getSalary()}" . PHP_EOL;

// IT Manager
$nameManager = "Miquéias Araújo";
$cpfManager = new CPF("159.357.852-64");
$salaryManager = 14500.00;
$manager = new Manager($nameManager, $cpfManager, $salaryManager);
echo "IT Manager: {$manager->getName()}, Salary: {$manager->getSalary()}" . PHP_EOL;
$authenticator->tryToLogin($manager, "5678");

// IT Director
$nameDirector = "Luana Araújo";
$cpfDirector = new CPF("397.156.214-82");
$salaryDirector = 28500.00;
$director = new Director($nameDirector, $cpfDirector, $salaryDirector);
echo "IT Director: {$director->getName()}, Salary: {$director->getSalary()}" . PHP_EOL;
$authenticator->tryToLogin($director, "1234");

$totalBonus = new BonusController();
$totalBonus->applyBonus($analyst);
$totalBonus->applyBonus($manager);
$totalBonus->applyBonus($director);
$totalBonus->applyBonus($videoEditor);
echo "Total Bonus: {$totalBonus->getTotalBonus()}";

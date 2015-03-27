<?php  
require_once "vendor/autoload.php";
 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
 
$entidades = array(__DIR__."src/SWOT/Model/");
$isDevMode = true;
 
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'swot-analysis',
    'driverOptions' => array (1002 => 'SET NAMES utf8')
);
 
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);
 
$entityManager = EntityManager::create($dbParams, $config);
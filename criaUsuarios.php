<?php
require_once 'bootstrap.php';
use SWOT\Model\User as User;

$usuario = new User();

$usuario->setNome('Alexandre');
$usuario->setEmail('alebae@gmail.com');
$usuario->setLogin('alebae');
$usuario->setSenha(hash('sha512', 'teste'));

$entityManager->persist($usuario);
$entityManager->flush();
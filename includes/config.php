<?php
$server = "kmazatsfouadmin.mysql.db";
$dbname = "kmazatsfouadmin";
$user = 'kmazatsfouadmin';
$pass = '4Xq7wMhqpl2K';
//le DSN permet la connection à la base de donné avec les informations mise en variable
//Le fait de mettre en variable permet un déploiement plus simple et rapide
$dsn = "mysql:host=$server;dbname=$dbname;charset=utf8";
$racine = $_SERVER['DOCUMENT_ROOT'] . "/audit/";
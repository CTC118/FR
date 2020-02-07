<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$login = $_GET['login'];

$_SESSION['login'] = $login;

header('Location: index.php');
<?php
require_once('../Src/User.php');
$data=array();
session_start();

    try {

        if (empty($_POST['user'])) {
            throw new Exception("User Name Connot be Empty");
        }
        if (empty($_POST['email'])) {
            throw new Exception("Email Connot be Empty");
        }
        if (empty($_POST['p'])) {
            throw new Exception("Password 1st Field Connot be Empty");
        }
        if (empty($_POST['c'])) {
            throw new Exception("Password 2nd Field Connot be Empty");
        }
        $pass1 = $_POST['p'];
        $pass2 = $_POST['c'];
        if ($pass1 == $pass2) {
            $passwordSet = md5($pass1);
        } else {
            throw new Exception("Password Do't Match");
        }

        $data['user'] = $_POST['user'];
        $data['email'] = $_POST['email'];
        $data['password'] = $passwordSet;

        $obj = new User();
        $obj->setData($data);
        //  print_r($obj)or die();
        $obj->index();
    } catch (Exception $e) {
        $meg = $e->getMessage();
        $_SESSION['message'] = $meg;
        header('location:../index.php');
    }

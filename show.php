<?php
$name = $_GET["name"];
$gender = $_GET["gender"];
$num = $_GET["num"];
$status =$_GET["status"];


    if ($gender == "male"){
        if ($num <=15)
        $kid ="เด็กชาย";
        else
        $kid ="นาย";
    }else
        if ($num <=15)
        $kid ="เด็กหญิง";
        else
        if ($status =="sigle")
        $kid ="นางสาว";
        else
        $kid = "นาง";
echo"$kid $name ";

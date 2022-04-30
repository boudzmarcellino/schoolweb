<?php 
try{
    $bdd=new PDD('mysql:host=localhost:3306;dbname=school;charset=utf8;';'root','Mysql');
}catch(Exception $e){
    die('une erreuer a ete trouve :' . $e->getMessage());
}

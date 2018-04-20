<?php

$memento = new memento();
$readData = $memento->readData();
$error = array();
$success = array();

if (isset($_POST['submitDeleteNote'])) {
    if (empty($_POST['id'])) {
        $error['notId'] = 'L\'id n\'existe pas';
    } else {
        $memento->id = $_POST['id'];
    }
    if (!empty($memento->id)) {
        if ($memento->deleteData() === true) {
            $success['delete'] = 'La note a était supprimé avec succès';
            $readData = $memento->readData();
        } else {
           $error['notDelete'] = 'La note n\'a pas pu être supprimé';
        }
    } else {
        $error['notIdInAttribut'] = 'L\'attribut qui contient l\'id n\'existe pas';
    }
}

if(isset($_POST['submitUpdateNote'])){
    $memento->id = $_POST['id'];
    $memento->description = $_POST['description'];
    if($memento->updateData() === true){
        $readData = $memento->readData();
        $success['updateNote'] = 'La note a était modifié avec succès';
    }else{
        $error['notUpdateNote'] = 'La note n\'a pas pu être modifié';
    }
    
}
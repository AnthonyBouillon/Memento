<?php

$memento = new memento();
$error = array();
$success = array();
$validSection = array('HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'SQL', 'BOOTSTRAP', 'MATERIALIZE', 'JQUERY', 'REACT', 'NODEJS', 'WORKBENCH', 'PHPMYADMIN', 'LINUX', 'WINDOWS', 'PENCIL', 'NETBEANS', 'CDN');
if (isset($_POST['submitAddNote'])) {
    if (!empty($_POST['section']) && !empty($_POST['description'])) {
        $memento->section = $_POST['section'];
        $memento->description = $_POST['description'];
        if (!empty($memento->section) && !empty($memento->description)) {
            if (in_array($memento->section, $validSection)) {
                if ($memento->createMemo() === true) {
                    $success['addNote'] = 'La note a était ajouté avec succès';
                } else {
                    $error['notAddNote'] = 'La note n\'a pas était ajouté';
                }
            } else {
                $error['notSection'] = 'Le nom de la rubrique est incorrect, veuillez vous référer à la liste';
            }
        } else {
            $error['emptyAttribut'] = 'Les attributs sont vide';
        }
    } else {
        $error['emptyPost'] = 'Remplissez les champs';
    }
}


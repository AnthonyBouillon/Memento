<?php
// On instancie notre objet "memento" dans une variable afin de pouvoir l'utiliser
$memento = new memento();
/*
 * On assigne un tableau vide dans une variable
 * qui nous servira à créer nos messages d'erreur et de succès
 */
$error = array();
$success = array();
// On assigne un tableau contenant des rubriques, ce qui nous permet de contrôler ce que nous autorisons comme nom de rubriques
$validSection = array('HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'SQL', 'BOOTSTRAP', 'MATERIALIZE', 'JQUERY', 'REACT', 'NODEJS', 'WORKBENCH', 'PHPMYADMIN', 'LINUX', 'WINDOWS', 'PENCIL', 'NETBEANS', 'CDN', 'GIT', 'DIA');
/*
 * Si l'utilisateur soumet le formulaire "d'ajout de note"
 * On vérifie que les champs ne sont pas vide
 * On assigne nos attributs par les vvaleurs de nos superglobales
 * puis on vérifie que nos attributs ne sont pas vide
 * puis on vérifie que dans le tableau, la valeur récupéré correspond au rubrique du tableau
 * et on appelle notre méthode qui nous permet de créer une note
 */
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


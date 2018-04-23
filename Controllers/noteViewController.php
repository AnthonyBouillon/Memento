<?php

// On instancie notre classe memento dans un nouvel objet
$memento = new memento();
/*
 * On vérifie que la barre de recherche contient une saisie
 * puis on assigne l'attribut par la saisie récupéré
 */
if (!empty($_POST['search'])) {
    $memento->search = htmlspecialchars($_POST['search']);
}
/*
 * On assigne notre méthode dans une variable
 * puis on assigne un tableau vide afin de le remplir par nos messages personnalisés
 */
$readData = $memento->readData();
$error = array();
$success = array();
/*
 * Si le formulaire est soumis
 * on vérifie si l'id du post it existe
 * puis on l'assigne à notre attribut
 * et si l'id existe, on apelle notre méthode qui nous permet de supprimer une note
 * et on affiche le résultat en appelant la méthode qui nous permet d'afficher le contenu
 */
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
/*
 * Si notre formulaire est soumis
 * on assigne l'id + la description dans nos attributs
 * puis on apelle notre méthode qui nous permet de modifier une note
 * et on affiche le résultat
 */
if (isset($_POST['submitUpdateNote'])) {
    $memento->id = $_POST['id'];
    $memento->description = $_POST['description'];
    if ($memento->updateData() === true) {
        $readData = $memento->readData();
        $success['updateNote'] = 'La note a était modifié avec succès';
    } else {
        $error['notUpdateNote'] = 'La note n\'a pas pu être modifié';
    }
}



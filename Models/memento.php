<?php

/**
 * Classe memento qui me permet d'insérer, d'afficher, de modifier et de supprimer une note
 *
 * @author Bonnie
 */
class memento extends dataBase {

    /**
     * Attributs :
     * - l'id de la note
     * - le titre de la rubrique
     * - la description de la note
     * - la saisie de la barre de recherche
     * @var type int et string
     */
    public $id = 0;
    public $section = '';
    public $description = '';
    public $search = '';

    // Contient la méthode construct de la classe "dataBase" qui permet la connexion à la base de données
    function __construct() {
        parent::__construct();
    }

    /**
     * Méthode qui me permet d'insérer un nom de rubrique + une description
     * @return boolean
     */
    public function createMemo() {
        $query = 'INSERT INTO `data`(`section`, `description`) VALUES(:section, :description)';
        $request = $this->db->prepare($query);
        $request->bindValue(':section', $this->section, PDO::PARAM_STR);
        $request->bindValue(':description', $this->description, PDO::PARAM_STR);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    /**
     * Méthode qui me permet de sélectionner l'id, le nom de la rubrique et la description de la note
     * elle me permet aussi de rechercher aproximativement dans le champ "description" un mot qui a était saisie et stocké dans l'attribut "$search" 
     * @return type array
     */
    public function readData() {
        $query = 'SELECT `id`, `section`,`description` FROM `data` WHERE `description` LIKE :search ORDER BY id ASC';
        $request = $this->db->prepare($query);
        $request->bindValue(':search', '%' . $this->search . '%', PDO::PARAM_STR);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode qui me permet de modifier le contenu dans le champ description par une nouvelle saisie
     * pour cela on spécifie l'id de la description à modifier, pour modifier celle qui a était choisi
     * @return boolean
     */
    public function updateData() {
        $query = 'UPDATE `data` SET `description`=:description WHERE `id`=:id';
        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->bindValue(':description', $this->description, PDO::PARAM_STR);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    /**
     * Méthode qui me permet de supprimer la ligne choisi dans la table "data"
     * @return boolean
     */
    public function deleteData() {
        $query = 'DELETE FROM `data` WHERE `id`=:id';
        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    // Contient la méthode "__destruct" de la classe "dataBase" qui permet de fermer la connexion à la base de données
    function __destruct() {
        parent::__destruct();
    }

}

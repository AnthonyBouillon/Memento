<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe memento qui me permet d'insérer une note
 *
 * @author Bonnie
 */
class memento extends dataBase {

    public $id = 0;
    public $section = '';
    public $description = '';
    public $search = '';

    function __construct() {
        parent::__construct();
    }

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

    public function readData() {
        $query = 'SELECT `id`, `section`,`description` FROM `data` WHERE `description` LIKE :search ORDER BY id ASC';
        $request = $this->db->prepare($query);
        $request->bindValue(':search', '%' . $this->search . '%', PDO::PARAM_STR);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_OBJ);
        
    }

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

    function __destruct() {
        parent::__destruct();
    }

}

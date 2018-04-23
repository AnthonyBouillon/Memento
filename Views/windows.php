<?php
/*
 * Model contenant la connexion à la base de données
 * Model contenant les requêtes SQL
 * Controller des vues contenant les notes
 */
require_once '../Models/dataBase.php';
require_once '../Models/memento.php';
require_once '../Controllers/noteViewController.php';
// Titre assigné à la balise <title>
$title = 'WINDOWS';
// Menu
require_once 'header.php';
?>
<!-- Titre de la page -->
<h2 class="text-center titleStyle">WINDOWS</h2>
<!-- Barre de recherche -->
<form method="POST">
    <label for="search" id="labelSearchBar">Rechercher : </label>
    <input type="search" name="search" id="search" class="searchBar" placeholder="Rechercher une note" />
    <input type="submit" name="submitSearch" class="button bold" value="Valider" id="submitSearch" />
    <input type="submit"  class="button bold" value="Tout afficher" />
</form>
<!-- Message d'erreur et de succès -->
<div class="alert-success">
    <p class="text-center"><?= !empty($success['delete']) ? $success['delete'] : ''; ?></p>
    <p class="text-center"><?= !empty($success['updateNote']) ? $success['updateNote'] : ''; ?></p>
    <p class="text-center"><?= !empty($success['notUpdateNote']) ? $success['notUpdateNote'] : ''; ?></p>
</div>
<div class="alert-danger">
    <p><?= empty($readData = $memento->readData()) ? 'L\'élément recherché n\'existe pas' : ''; ?></p>
    <p class="text-center"><?= !empty($error['notIdInAttribut']) ? $error['notIdInAttribut'] : ''; ?></p>
    <p class="text-center"><?= !empty($error['notDelete']) ? $error['notDelete'] : ''; ?></p>
    <p class="text-center"><?= !empty($error['notId']) ? $error['notId'] : ''; ?></p> 
</div>
<!-- Bloc contenant les notes -->
<div class="readNote">
    <?php
    foreach ($readData as $data) {
        if ($data->section === 'WINDOWS') {
            ?>
            <div class="fullBlockNoteView">
                <!-- Block contenant la description de la note,
                    L'attribut "id" contient le nom + l'id pour les distinguers -->
                <div id="notesViews<?= $data->id ?>" class="blocDescription">
                    <ul class="box">
                        <li class="corner"><?= $data->description; ?></li>
                    </ul> 
                </div>
                <!-- Block qui contient le formulaire ayant : deux boutons modifier + supprimer + sous-block contenant le textarea -->   
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $data->id ?>" />
                    <div id="twoButtonViews<?= $data->id ?>">
                        <input type="button" onclick="buttonUpdateNote()" class="buttonUpdate bold" id="<?= $data->id; ?>" value="MODIFIER" />
                        <input type="submit" name="submitDeleteNote" class="buttonDelete bold" value="SUPPRIMER" onclick="return confirm('Etes-vous sûr de vouloir le supprimer ?')" />
                    </div>
                    <div id="formUpdateNote<?= $data->id ?>" class="formUpdateNote">
                        <textarea name="description" rows="15" id="description"><?= $data->description; ?></textarea>
                        <input type="submit" name="submitUpdateNote" value="VALIDER" />
                        <input type="submit"  value="ANNULER" />
                    </div>
                </form>      
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
// Footer
require_once 'footer.php';

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
$title = 'NODEJS';
// Menu
require_once 'header.php';
?>
<!-- Titre de la page -->
<h2 class="text-center">NODEJS</h2><hr/>
<!-- Barre de recherche -->
<form method="POST">
    <label for="search">Rechercher : </label>
    <input type="search" name="search" id="search"/>
    <input type="submit" name="submitSearch" value="Valider" id="submitSearch" />
</form>
<!-- Message d'erreur et de succès -->
<p><?= empty($readData = $memento->readData()) ? 'L\'élément recherché n\'existe pas' : ''; ?></p>
<p class="text-center"><?= !empty($error['notIdInAttribut']) ? $error['notIdInAttribut'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notDelete']) ? $error['notDelete'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notId']) ? $error['notId'] : ''; ?></p>
<p class="text-center"><?= !empty($success['delete']) ? $success['delete'] : ''; ?></p>
<p class="text-center"><?= !empty($success['updateNote']) ? $success['updateNote'] : ''; ?></p>
<p class="text-center"><?= !empty($success['notUpdateNote']) ? $success['notUpdateNote'] : ''; ?></p>
<!-- Bloc contenant les notes -->
<div class="readNote">
    <?php
    foreach ($readData as $data) {
        if ($data->section === 'NODEJS') {
            ?>
            <div class="fullBlockNoteView">
                <!-- Block contenant la description de la note,
                    L'attribut "id" contient le nom + l'id pour les distinguers -->
                <div class="notesViews" id="notesViews<?= $data->id ?>">
                    <?= $data->description; ?>
                </div>
                <!-- Block qui contient le formulaire ayant : deux boutons modifier + supprimer + sous-block contenant le textarea -->   
                <div class="formNoteViews">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= $data->id ?>" />
                        <div id="twoButtonViews<?= $data->id ?>">
                        <input type="button" onclick="buttonUpdateNote()" class="buttonUpdate" id="<?= $data->id; ?>" value="MODIFIER" />
                        <input type="submit" name="submitDeleteNote" class="buttonDelete" value="SUPPRIMER" onclick="return confirm('Etes-vous sûr de vouloir le supprimer ?')" />
                        </div>
                        <div id="formUpdateNote<?= $data->id ?>" class="formUpdateNote">
                            <textarea name="description" rows="15" id="description"><?= $data->description; ?></textarea>
                            <input type="submit" name="submitUpdateNote" value="VALIDER" />
                        </div>
                    </form>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
// Footer
require_once 'footer.php';

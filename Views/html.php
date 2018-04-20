<?php
require_once '../Models/dataBase.php';
require_once '../Models/memento.php';
require_once '../Controllers/noteViewController.php';
$title = 'HTML';
require_once 'header.php';
?>
<h2 class="text-center">HTML</h2><hr/>
<form method="POST">
    <label for="search">Rechercher : </label>
    <input type="search" name="search" id="search"/>
    <input type="submit" name="submitSearch" value="Valider" id="submitSearch" />
</form>
<p class="text-center"><?= !empty($error['notIdInAttribut']) ? $error['notIdInAttribut'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notDelete']) ? $error['notDelete'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notId']) ? $error['notId'] : ''; ?></p>
<p class="text-center"><?= !empty($success['delete']) ? $success['delete'] : ''; ?></p>
<p class="text-center"><?= !empty($success['updateNote']) ? $success['updateNote'] : ''; ?></p>
<p class="text-center"><?= !empty($success['notUpdateNote']) ? $success['notUpdateNote'] : ''; ?></p>
<div class="readNote">
    <?php
    foreach ($readData as $html) {
        if ($html->section === 'HTML') {
            ?>
            <div class="fullBlockNoteView">
                <div class="notesViews" id="notesViews<?= $html->id ?>">
                    <?= $html->description; ?>
                </div>
                <div class="formNoteViews">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= $html->id ?>" />
                        <div id="twoButtonViews<?= $html->id ?>">
                        <input type="button" onclick="buttonUpdateNote()" class="buttonUpdate" id="<?= $html->id; ?>" value="MODIFIER" />
                        <input type="submit" name="submitDeleteNote" class="buttonDelete" value="SUPPRIMER" onclick="return confirm('Etes-vous sûr de vouloir le supprimer ?')" />
                        </div>
                        <div id="formUpdateNote<?= $html->id ?>" class="formUpdateNote">
                            <textarea name="description" rows="15" id="description"><?= $html->description; ?></textarea>
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
require_once 'footer.php';

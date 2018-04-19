<?php
require_once '../Models/dataBase.php';
require_once '../Models/memento.php';
require_once '../Controllers/noteViewController.php';
$title = 'HTML';
require_once 'header.php';
?>
<h2 class="text-center">HTML</h2><hr/>
<p class="text-center"><?= !empty($error['notIdInAttribut']) ? $error['notIdInAttribut'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notDelete']) ? $error['notDelete'] : ''; ?></p>
<p class="text-center"><?= !empty($error['notId']) ? $error['notId'] : ''; ?></p>
<p class="text-center"><?= !empty($success['delete']) ? $success['delete'] : ''; ?></p>
<div class="readNote">
    <?php
    foreach ($readData as $html) {
        if ($html->section === 'HTML') {
            ?>
            <div>
                <div class="notesViews">
                <?= $html->description; ?><hr/>
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $html->id ?>" />
                    <input type="button" onclick="buttonUpdateNote()" value="MODIFIER" />
                    <input type="submit" name="submitDeleteNote" value="SUPPRIMER" />
                    <div class="formUpdateNote">
                        <textarea name="description" rows="15" id="description"><?= $html->description; ?></textarea>
                        <input type="submit" name="submitUpdateNote" value="VALIDER" />
                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
require_once 'footer.php';

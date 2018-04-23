<?php
require_once '../Models/dataBase.php';
require_once '../Models/memento.php';
require_once '../Controllers/addNoteFormController.php';
$title = 'Ajouter une note';
require_once 'header.php';
?>
<h2 class="text-center">Ajouter une note : </h2><hr/>
<div id="container">
    <div class="element">
        <div>
            <p><?= !empty($success['addNote']) ? $success['addNote'] : '' ?></p>
            <p><?= !empty($error['notSection']) ? $error['notSection'] : '' ?></p>
            <p><?= !empty($error['notAddNote']) ? $error['notAddNote'] : '' ?></p>
            <p><?= !empty($error['emptyAttribut']) ? $error['emptyAttribut'] : '' ?></p>
            <p><?= !empty($error['emptyPost']) ? $error['emptyPost'] : '' ?></p>
        </div>
        <form method="POST">
            <div>
                <label for="section">Rubrique</label>
                <input type="text" name="section" id="section" />
            </div>
            <div>
                <textarea name="description" rows="15" id="description"></textarea>
            </div>
            <div>
                <input type="submit" name="submitAddNote" id="submitAddNote" />
            </div>
        </form>
    </div>
    <div class="element">
        <h2>Liste des rubriques : </h2>
        <p>La rubrique du formulaire doit contenir un mot de cette liste</p>
        <ol>
            <li>HTML</li>
            <li>CSS</li>
            <li>BOOTSTRAP</li>
            <li>MATERIALIZE</li>
            <li>JAVASCRIPT</li>
            <li>JQUERY</li>
            <li>REACT</li>
            <li>NODEJS</li>
            <li>PHP</li>
            <li>SQL</li>
            <li>WORKBENCH</li>
            <li>PHPMYADMIN</li>
            <li>NETBEANS</li>
            <li>PENCIL</li>
            <li>WINDOWS</li>
            <li>LINUX</li>
            <li>CDN</li>
            <li>GIT</li>
            <li>DIA</li>
        </ol> 
    </div>
</div>
<?php
require_once 'footer.php';

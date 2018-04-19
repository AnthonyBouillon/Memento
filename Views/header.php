<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="../Public/css/main.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Memento du développeur web</h1>
        </header>
        <nav>
            <ul>
                <li id="linksView"><a><span onclick="linkView()"><i class="fas fa-bars"></i></span></li></a>
                <div id="link">
                    <a href="html.php"><li>HTML</li></a>
                    <a href=""><li>CSS</li></a>
                    <a href=""><li>JavaScript</li></a>
                    <a href=""><li>PHP</li></a> 
                    <a href=""><li>SQL</li></a>
                    <a href=""><li>Serveur</li></a>
                    <div class="dropdown">
                        <a href=""><li>Framework / Librairie <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href=""><li class="liDropdown">Bootstrap</li></a>
                            <a href=""><li class="liDropdown">Materialize</li></a>
                            <a href=""><li class="liDropdown">jQuery</li></a>
                            <a href=""><li class="liDropdown">React</li></a>
                            <a href=""><li class="liDropdown">NodeJS</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Base de données <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href=""><li class="liDropdown">MySQL</li></a>
                            <a href=""><li class="liDropdown">Workbench</li></a>
                            <a href=""><li class="liDropdown">phpMyAdmin</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>>IDE <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href=""><li class="liDropdown">Netbeans</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Logiciel <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href=""><li class="liDropdown"><Pencil</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Divers <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href=""><li class="liDropdown">Windows</li></a>
                            <a href=""><li class="liDropdown">Linux</li></a>
                        </div>
                    </div>
                    <a href="addNoteForm.php"><li id="formAdd">Ajouter une note</li></a>
                </div>
            </ul>
        </nav>

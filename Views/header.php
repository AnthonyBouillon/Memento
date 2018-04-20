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
                    <a href="css.php"><li>CSS</li></a>
                    <a href="javascript.php"><li>JavaScript</li></a>
                    <a href="php.php"><li>PHP</li></a> 
                    <a href="sql.php"><li>SQL</li></a>
                    <a href="serveur.php"><li>Serveur</li></a>
                    <div class="dropdown">
                        <a href=""><li>Framework / Librairie <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="bootstrap.php"><li class="liDropdown">Bootstrap</li></a>
                            <a href="materialize.php"><li class="liDropdown">Materialize</li></a>
                            <a href="jquery.php"><li class="liDropdown">jQuery</li></a>
                            <a href="react.php"><li class="liDropdown">React</li></a>
                            <a href="nodejs.php"><li class="liDropdown">NodeJS</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Base de données <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="mysql.php"><li class="liDropdown">MySQL</li></a>
                            <a href="workbench.php"><li class="liDropdown">Workbench</li></a>
                            <a href="phpmyadmin.php"><li class="liDropdown">phpMyAdmin</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>IDE <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="netbeans.php"><li class="liDropdown">Netbeans</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Logiciel <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="pencil.php"><li class="liDropdown">Pencil</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Divers <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="windows.php"><li class="liDropdown">Windows</li></a>
                            <a href="linux.php"><li class="liDropdown">Linux</li></a>
                        </div>
                    </div>
                    <a href="cdn.php"><li>CDN</li></a>
                    <a href="addNoteForm.php"><li id="formAdd">Ajouter une note</li></a>
                </div>
            </ul>
        </nav>

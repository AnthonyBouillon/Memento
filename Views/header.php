<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="Public/css/main.css" rel="stylesheet" />
    </head>
    <body class="body">
        <header>
            <h1>Memento du développeur web</h1>
        </header>
        <nav>
            <ul>
                <li id="linksView"><a><span onclick="linkView()"><i class="fas fa-bars"></i></span></li></a>
                <div id="link">
                    <a href="Html"><li>HTML</li></a>
                    <a href="Css"><li>CSS</li></a>
                    <a href="Javascript"><li>JavaScript</li></a>
                    <a href="PHP"><li>PHP</li></a> 
                    <a href="SQL"><li>SQL</li></a>
                    <a href="Serveur"><li>Serveur</li></a>
                    <div class="dropdown">
                        <a href=""><li>Framework/Librairie <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Bootstrap"><li class="liDropdown">Bootstrap</li></a>
                            <a href="Materialize"><li class="liDropdown">Materialize</li></a>
                            <a href="jQuery"><li class="liDropdown">jQuery</li></a>
                            <a href="React"><li class="liDropdown">React</li></a>
                            <a href="NodeJS"><li class="liDropdown">NodeJS</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Base de données <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="MySQL"><li class="liDropdown">MySQL</li></a>
                            <a href="Workbench"><li class="liDropdown">Workbench</li></a>
                            <a href="phpMyAdmin"><li class="liDropdown">phpMyAdmin</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>IDE <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Netbeans"><li class="liDropdown">Netbeans</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Logiciel <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Pencil"><li class="liDropdown">Pencil</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Divers <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Windows"><li class="liDropdown">Windows</li></a>
                            <a href="Linux"><li class="liDropdown">Linux</li></a>
                            <a href="Git"><li class="liDropdown">Git</li></a>
                            <a href="Dia"><li class="liDropdown">Dia</li></a>
                        </div>
                    </div>
                    <a href="CDN"><li>CDN</li></a>
                    <a href="Ajouter-une-note"><li id="formAdd">Ajouter une note</li></a>
                </div>
            </ul>
        </nav>

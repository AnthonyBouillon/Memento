<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="Public/css/main.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Memento du développeur web</h1>
        </header>
        <nav>
            <ul>
                <li id="linksView"><a><span onclick="linkView()"><i class="fas fa-bars"></i></span></li></a>
                <div id="link">
                    <a href="Views/html.php"><li>HTML</li></a>
                    <a href="Views/css.php"><li>CSS</li></a>
                    <a href="Views/javascript.php"><li>JavaScript</li></a>
                    <a href="Views/php.php"><li>PHP</li></a> 
                    <a href="Views/sql.php"><li>SQL</li></a>
                    <a href="Views/serveur.php"><li>Serveur</li></a>
                    <div class="dropdown">
                        <a href=""><li>Framework / Librairie <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Views/bootstrap.php"><li class="liDropdown">Bootstrap</li></a>
                            <a href="Views/materialize.php"><li class="liDropdown">Materialize</li></a>
                            <a href="Views/jquery.php"><li class="liDropdown">jQuery</li></a>
                            <a href="Views/react.php"><li class="liDropdown">React</li></a>
                            <a href="Views/nodejs.php"><li class="liDropdown">NodeJS</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Base de données <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Views/mysql.php"><li class="liDropdown">MySQL</li></a>
                            <a href="Views/workbench.php"><li class="liDropdown">Workbench</li></a>
                            <a href="Views/phpmyadmin.php"><li class="liDropdown">phpMyAdmin</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>IDE <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Views/netbeans.php"><li class="liDropdown">Netbeans</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Logiciel <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Views/pencil.php"><li class="liDropdown">Pencil</li></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href=""><li>Divers <i class="fas fa-arrow-down"></i></li></a>
                        <div class="dropdown-content">
                            <a href="Views/windows.php"><li class="liDropdown">Windows</li></a>
                            <a href="Views/linux.php"><li class="liDropdown">Linux</li></a>
                        </div>
                    </div>
                    <a href="Views/cdn.php"><li>CDN</li></a>
                    <a href="Views/addNoteForm.php"><li id="formAdd">Ajouter une note</li></a>
                </div>
            </ul>
        </nav>
        <section>
            <h2 class="text-center">Bienvenue sur mon "Memento"</h2><hr/>
            <p class="text-center">Ce projet est en ALPHA</p>
        </section>
        <footer>
            <h3>En cours de construction</h3>
        </footer>     
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="Public/js/main.js" type="text/javascript"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=kwxxra3j4w5260dfh0uj0qmnid0pyoz5lqo41szwh3pxtwaq"></script> 
        <script>tinymce.init({selector: 'textarea'});</script>
    </body>
</html>


<!DOCTYPE html>
<html>


    <head>
        <link rel="stylesheet" href="Library.css">
        <meta charset="utf-8" />
        <title>Forgor Library</title>
    </head>


    <body>
        <div class="body">


        <header class="header">
            <div class="NavBarSettings">
                <div class="NavMenuTitle">
                        <h1>
                            <a href="HomePage.html" id="NavBar"><u>FORGOR LIBRARY</u></a>
                            <a href="Livres.html" class="CurrentRightNavBar">Nos livres</a>
                            <a href="Historique.html" class="RightNavBar">Historique</a>
                            <a href="Administration.html" class="RightNavBar">Administration</a>
                            <a href="Personnel.html" class="RightNavBar">Besoin d'aide?</a>
                        </h1>
                </div>
            </div>
        </header>



        <main>
            <section>
                <article>
                    <h2>Accueil</h2>
                    <p>Welcome to the Forgor Library</p>>    
                </article>

                <aside>
                    Login :
                    <div class="container">
                        <form action="../index.php" method="post">
                        <input type="hidden" name="type" value="login" />
                        <label>Utilisateur : </label>
                        <input type="text" placeholder="Entrez un nom d'utilisateur ICI" name="login" required>
                        <label>Mot de passe : </label>
                        <input type="password" placeholder="Entrez votre mot de passe ICI" name="password" required>
                        <button type="submit">Login</button>


                        </form>
                    </div>
                    <?php
                    if(isset($_GET['username'])){
                        echo $_GET['username'];
                    }
                    ?>
                    <br><br>
                    <div class="container">
                        <label>Add : </label>
                        <input type="text" placeholder="Nom du livre" name="BookName">
                        <br>
                        <label>Update : </label>
                        <input type="text" placeholder="Nouveau nom" name="NewBookName">
                        <button type="submit">DELETE THIS</button>
                    </div>
                    <label>Status du compte : </label>
                    <select name="Status" id="Status">
                        <option value = "Actif">Actif</option>
                        <option value = "Frozen">Frozen</option>
                        <option value = "Inactive">Inactive</option>
                    </select>
                </aside>

            </section>
        </main>

    </body>
</html>
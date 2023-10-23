<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="asset/CSS/head.css">
    <link rel="stylesheet" href="asset/CSS/main.css">
    <link rel="stylesheet" href="asset/CSS/footer.css">
</head>
<body>
    <!--Header-->

    <nav class="nav-other">
        <a href="#" class="name">the Power Of Memory</a>
        <div class="nav-links">
             <ul>
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="memory.html">JEU</a></li>
                <li><a href="Score.html">SCORES</a></li>               
                <li><a href="contact.html">NOUS CONTACTER</a></li>
                <li><a href="login.html">SE CONNECTER</a></li>
                <li class="present"><a href="register.html">S'INSCRIRE</a></li>
                <li><a href="MyAccount.html"><img src="asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div>     
     </nav>

     <!--Fin header-->
     <!--Main-->

     <section class=banniere>
        <p>INSCRIPTION</p>
     </section>
      <form action="#" class="formulair-inscription">
            <input type="text" id="email" name="Email" required="required" placeholder="Email" class="formulair-inscription1">
            <br>
            <input type="text" id="pseudo" name="pseudo" required="Required" placeholder="Pseudo" class="formulair-inscription2">
            <br>
            <input type="password" id="mdp" name="mots de passe" required="required" placeholder="Mot de passe" class="formulair-inscription3">
            <br>
            <input type="password" id="cmdp" name="confirmation mot de passe" required="required" placeholder="Confirmez le mot de passe" class="formulair-inscription4">
            <br>
            <input type="submit" value="Inscription" class="formulair-inscription5">
        </form>

        <!--Fin main-->
        <!--Footer-->

        <footer>
            <section>
                <div>
                    <br>
                    <span class="bold white">information</span>
                    <br>
                    <span>Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</span>
                    <br>
                    <span><span class="bold orange">Tel :</span> 06 05 04 03 02</span>
                    <br>
                    <span><span class="bold orange">Email :</span> support@powerofmemory.com</span>
                    <br>
                    <span><span class="bold orange">Localisation :</span> Paris</span>
                    <br>
                    <a href="https://facebook.com"><img src="asset/images/facebook2.png" alt="facebook"></a>
                    <a href="https://twitter.com"><img src="asset/images/tweeter2.png" alt="tweeter"></a> 
                    <a href="https://google.com"><img src="asset/images/google2.png" alt="google"></a> 
                    <a href="https://pinterest.com"><img src="asset/images/pinterest2.png" alt="pinterest"></a> 
                    <a href="https://instagram.com"><img src="asset/images/instagram2.png" alt="instagram"></a> 
                    <br><br><br>
                    <div class="Copyright">
                        <span>Copyright © 2022 Tous droits réservés</span>
                    </div>
                </div>
                <div>
                    <br>
                    <span class="bold white">Power Of Memory</span>
                    <ul>
                        <li><span>Jouer !</span></li>
                        <li><span>Les scores</span></li>
                        <li><span>Nous contacter</span></li>
                    </ul>
                </div>
            </section>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>The Power of Memory</title>
    <link rel="stylesheet" href="asset/CSS/footer.css">
    <link rel="stylesheet" href="asset/CSS/head.css">
    <link rel="stylesheet" href="asset/CSS/main.css">
</head>
<body>

    <!--Header-->

    <nav class="nav-other">
        <a href="#" class="name">The Power of Memory</a>
        <div class="nav-links">
             <ul>
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="memory.html">JEU</a></li>
                <li><a href="login.html">SCORES</a></li>               
                <li><a href="contact.html">NOUS CONTACTER</a></li>
                <li><a href="login.html">SE CONNECTER</a></li>
                <li><a href="register.html">S'INSCRIRE</a></li>
                <li><a href="MyAccount.html"><img src="asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div> 
    </nav>   

    <!--Fin header-->

    <!--Main-->
    <section class="MyAccount">
        <section class="Banière_profil_utilisateur">
            <div class="bloc_utilisateur">
                <img src="asset/images/photo_de_profil_MyAccount.png" alt="photo_de_profil_banniere" class="photo_de_profil_banniere">
                <p class="pseudo">Nom Utilisateur</p>
            </div>
            <div class="caracteristique_utilisateur">
                    <h3 class="info_utilisateur">Information utilisateur :</h3>
                    <p class="info_utilisateur1"> <span class="bold">Nom, prenom : </span>BRISACIER Romuald</p>
                    <p class="info_utilisateur2"> <span class="bold">Date de naissace : </span>JJ/MM/AA</p>
                    <p class="info_utilisateur3"> <span class="bold">Email : </span>monemail@gmail.com</p>
                    <p class="info_utilisateur4"><span class="bold">score : </span> 18 363</p>
            </div>
            <div class="description_utilisateur">
                <h3 class="bold">A propos de vous :</h3>
                <textarea name="description profil" id="" cols="30" rows="10" class="description_profil" placeholder="Décrivez vous, vos passions ou racontez une histoire. Faites comme vous voulez."></textarea>
            </div>
        </section>

        <section class="changement_info_utilisateur">
            <form action="changement_info_mail">
                <h4 class="changement_info_mail4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mail0">Entrez votre email actuelle :</p>
                <input type="text" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">entrez votre nouvel email :</p>
                <input type="text" name="" id="" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">Confirmer votre nouveau mail :</p>
                <input type="text" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">Entrer votre mot de passe :</p>
                <input type="password" class="changement_info_mail2" required="required" placeholder="mot de passe">
                <br>
                <input type="submit" name="submit" value="Confirmer" id="submit" class="changement_info_mail3">
            </form>
            <form action="changement_info_mots_de_passe">
                <h4 class="changement_info_mots_de_passe4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mots_de_passe0">Entrez votre ancien mot de passe : </p>
                <input type="password" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <p class="changement_info_mots_de_passe1">Entrez votre nouveau mot de passe : </p>
                <input type="password" name="" id="" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <p class="changement_info_mots_de_passe1">Confirmez votre nouveau mot de passe : </p>
                <input type="password" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <br>
                <input type="submit" id="submit" value="Confirmer" class="changement_info_mots_de_passe3">
            </form>
        </section>
    </section>
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

    <!--Fin footer-->

</body>
</html>
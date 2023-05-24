<!DOCTYPE html>
<!--
MotDePasseOublieViewEtape1.php
/PDOCours/modele_site_procedural_FO
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MotDePasseOublieViewEtape1</title>
        <style>
            section{
                margin-top: 10%;
                margin-left: 15%;
                padding:  1%;
                border: dimgray 1px solid;
                text-align: center;
                width: 40%;
            }
            input[type="submit"]{
                background-color: black;
                color: white;
                padding: 1%;
                width: 30%;
            }
            #retour{
                margin-top: -0.5%;
                text-align: left;
            }
            #lienRetour{
                text-decoration: none;
                color: dimgray;
            }
        </style>
    </head>
    <body>
        <section>
            <?php
            //$precedente = $_SERVER['HTTP_REFERER'];
            //$precedente = "http://" . $_SERVER["REMOTE_ADDR"] . "/PDOCours/modele_site_procedural_FO/boundaries/AuthentificationView.php";
            //$precedente = "http://localhost/PDOCours/modele_site_procedural_FO/boundaries/AuthentificationView.php";
            ?>
            <p id="retour">
                <a id="lienRetour" href="http://pascalbuguet.alwaysdata.net/PDOCours/modele_site_procedural_FO/controls/AuthentificationCTRL.php">&lt;&nbsp;&nbsp;&nbsp;RETOUR</a>
            </p>
            <h1>MOT DE PASSE OUBLIE Etape 1</h1>
            <form method="POST" action="../controls/MotDePasseOublieCTRLEtape2.php">
                <p>
                    Si vous avez oublié votre mot de passe, veuillez saisir votre adresse email.
                    <br>
                    Nous vous enverrons un lien pour réinitialiser votre mot de passe.
                </p>
                <label>
                    Adresse e-mail :
                </label>
                <br/>
                <input type="email" name="email" value="courspascalbuguet@gmail.com" placeholder="Email ?" size="50"/>
                <p>
                    <input type="submit" value="Valider" name="btValider" />
                </p>
            </form>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>

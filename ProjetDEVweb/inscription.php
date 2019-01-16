<?php 
$title='log in';
$haut=connexion;
include 'header.php';
?>
<link href="connetion.css" rel="stylesheet" type="text/css"/>
    </header>
    <body>
        <table>
            <tr><td>

                          <input type="text" name="nom" id="nom" class="validate"
                   maxlength="50" required>
            <label for="nom">Nom</label>

            </td></tr>
            
            <tr><td>

                          <input type="text" name="prenom" id="prenom" class="validate"
                   maxlength="50" required>
            <label for="prenom">Prénom</label>

            </td></tr>
            
            <tr><td>

                          <input type="text" name="role" id="role" class="validate"
                   maxlength="50" required>
            <label for="role">Rôle</label>

            </td></tr>

                <tr><td>

                          <input type="text" name="email" id="email" class="validate"
                   maxlength="50" required>
            <label for="email">e-mail</label>

            </td></tr>

        <tr><td>

                          <input type="text" name="mot de passe" id="mdp" class="validate"
                   maxlength="50" required>
            <label for="mot de passe">mot de passe</label>

            </td></tr>
        <tr><td>
                <div ><button class="bouton">inscription</button></div>
            </td></tr>
        </table>
        <div class="logo"><img src="logo-chimere.svg" alt="logo" height="650"></a></div>
        
    </body>
</html>
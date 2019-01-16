<?php 
$title='log in';
$haut=connexion;
include 'header.php';
?>
<link href="connextion.css" rel="stylesheet" type="text/css"/>
    </header>
    <body>
        <table>
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
                <div ><button class="bouton">connextion</button></div>
            </td></tr>
        </table>
    </body>
</html>

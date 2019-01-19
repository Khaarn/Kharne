<?php 
$title='log in';
$haut=inscription;
include 'header.php';
?>
<link href="connetion.css" rel="stylesheet" type="text/css"/>
    </header>
    <body>

        <div class="coo">
                          <input type="text" name="nom" id="nom" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="nom">Nom</label>
            <br> <br></div>
        <div class="coo">

                          <input type="text" name="prenom" id="prenom" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="prenom">Prénom</label>
            <br> <br></div>

        <div class="coo">
                          <input type="text" name="role" id="role" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="role">Rôle</label>
            <br> <br></div>

        <div class="coo">
                          <input type="text" name="email" id="email" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="email">e-mail</label>
            <br> <br></div>

        <div class="coo">
                          <input type="text" name="mot de passe" id="mdp" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="mot de passe">mot de passe</label>
            <br> <br></div>

        <div class="coo" ><button class="bouton">inscription</button></div>

        <div class="logo"><img src="logo-chimere.svg" alt="logo" height="650"></a></div>
        
    </body>
</html>
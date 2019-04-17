<?php 
$title='log in';
$haut=connection;
include 'header.php';
?>
<link href="connetion.css" rel="stylesheet" type="text/css"/>
    </header>
    <body>
        <form method="post" action="actions/Connect.php">
        <div class="coo">
            <input type="email" name="email" id="email" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="email">e-mail</label>
            <br> <br></div>


        <div class="coo">
            <input type="password" name="mot de passe" id="mdp" class="validate"
                                 maxlength="50" required></div><div class="coo">
            <label for="mot de passe">mot de passe</label>
            <br> <br></div>

                <div class="coo"><input type="submit" value="Connection" class="btn-large right"></div>
        </form>
           
        <div class="logo"><img src="logo-chimere.svg" alt="logo" height="650"></a></div>
        
    </body>
</html>
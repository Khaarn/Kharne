
        <?php
        require_once '../Config.php';
        
        $db = mysqli_connect( Config::SERVEURNAME . ";dbname=" . Config::dbname
        , Config::user, Config::password);
        
        session_start();
        
        $eMail = mysqli_real_escape_string($db,$_POST,"email");
        $MDP = mysqli_real_escape_string($db,$_POST, "mot de passe");
        
        $sql = "SELECT id FROM utilisateurs WHERE Email = '$eMail' and Mot de passe ='$MDP'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $cout = mysqli_num_rows($result);
        
        if($cout == 1) {
            session_register("Email");
            $_SESSION['login_user'] = $eMail;
            
            header("ListeTravaille.php");
        }else{
            $error = "Votre e-maile ou votre mot de passe est incorrecte";
        }
        ?>
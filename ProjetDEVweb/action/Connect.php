
        <?php
        require_once '../Config.php';
        
        $eMail = filter_input(INPUT_POST,"email");
        $MDP = filter_input(INPUT_POST, "mot de passe");
        
        
        
        $db = new PDO("mysql:host=" . Config::SERVEURNAME . ";dbname=" . Config::dbname
        , Config::user, Config::password);
        
        $sql = "SELECT id FROM utilisateurs WHERE Email = '$eMail' and Mot de passe ='$MDP'";
        $result = mysqli_query("mysql:host=" .Config::SERVEURNAME . ";dbname=" . Config::dbname
        , Config::user, Config::password,$sql);
        $row = fetch_all($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $cout = mysqli_num_rows($result);
        
        if($cout == 1) {
            session_register("Email");
            $_SESSION['login_user'] = $eMail;
            
            header("../ListeTravaille.php");
        }else{
            $error = "Votre e-maile ou votre mot de passe est incorrecte";
        }
        ?>
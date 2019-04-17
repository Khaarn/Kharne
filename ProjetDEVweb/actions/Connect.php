<?php
        session_start();
        require_once '../Config.php';

        $db = new PDO("mysql:host=" . Config::SERVEURNAME . ";dbname=" . Config::dbname
        , Config::user, Config::password);

        $mailconnect = filter_input(INPUT_POST, "email");
        $MDP  = filter_input(INPUT_POST, "motdepasse");
        echo $mailconnect;
        echo $MDP;

        $requser = $db->prepare("SELECT * FROM utilisateurs WHERE Email = ? AND Motdepasse = ?");
        $requser->execute(array($mailconnect,$MDP));
        $userexist = $requser->rowCount();
        if ($userexist == 1){
            $userinfo = $requser->fetch();
            $_SESSION['id']= $userinfo['id'];
            $_SESSION['nom'] = $userinfo['nom'];
            $_SESSion['email'] = $userinfo['email'];

            header("Location: ../ListeTravaille.php");
        }
        else{
            echo "PTDR T KI";
        }
        ?>
<?php
session_start();
include 'Db.php';
  
class Verification{

    public function checkUser(){

        if (isset($_POST["user"]) && $_POST["user"] != '') {
            $db = new Db();
            $db->connect();  
            
            $user = $_POST["user"];
            
            $response = $db->pdo->query("SELECT * FROM user 
                INNER JOIN roles ON roles.id_role = user.id_role
                WHERE `userName` = '$user'");
                $test = $response->fetchAll();
            
            if($test && $test[0]['name'] === 'Admin'){  
                $db->disconnect();
                return true;
            }
            else{     
                $db->disconnect();
                $msg =  "Nom d'utlisateur invalide";
                return  $msg;
            }
        }else if(isset($_POST['user']) && $_POST["user"] == ''){ 
            $msg = 'Remplissez le champ utilisateur';
            return $msg;
        }
    }

    public function checkPassword(){
        
        
        if (isset($_POST["password"]) && $_POST["password"] != '') {  
            $db = new Db();
            $db->connect();   
        
            $password = $_POST["password"];

            if (isset($_POST["user"])) {
                $user = $_POST["user"];

                $resp = $db->pdo->query("SELECT * FROM user WHERE `password` = '$password' AND userName ='$user'");
                $testPassword = $resp->fetchAll();
                
                if (isset($_POST['submit'])) {
                    if($testPassword){
                        return true;
                    }
                    else{
                        echo 'identifiants invalide';
                        return false;
                    }
                }
                $db->disconnect();
            }else {
                $msg = 'Remplissez le champ utilisateur';
                return $msg;
            }

        }else if(isset($_POST['submit']) && $_POST["password"] == ''){ 
            $msg = 'Remplissez le champ mot de passe';
            return $msg;
        }
    }
}
        if (isset($_POST['submit'])) {
   
    $user = $_POST["user"];
    $password = $_POST["password"];
    $verification = new Verification();
    $userAdmin = $verification->checkUser($user);
    
        if ($userAdmin === true) {
            $passwordAdmin = $verification->checkPassword($user, $password);
        }
        
        if (isset($passwordAdmin) && $passwordAdmin === true) {
            $_SESSION['user'] = $userAdmin;
            header("Location: ../templates/dashboard.php");
        }   
}
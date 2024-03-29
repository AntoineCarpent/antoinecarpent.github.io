<?php 
    include "../classes/Voyage.php";

    $theme = $_POST['theme'];
        if ($theme ==='mer') {
            $theme = 1;
        }else if($theme === "campagne"){
            $theme = 2;
        }else if($theme === "montagne"){
            $theme = 3;
        }

    $lieux = $_POST['place'];
    $titre1 = $_POST['title1'];
    $nom = $_POST['name'];
    $short = $_POST['title-description'];
    $prix = $_POST['price'];
    $titre2 = $_POST['title2'];
    $description = $_POST['description'];
    $service = $_POST['service'];
    $idee = $_POST['idea'];
    $debut = $_POST['start'];
    $fin = $_POST['end'];
    $image = $_POST['image'];

        if (isset( $_POST['offre']) && $_POST['offre'] != null) {
            $offre = 1;
        }else{
            $offre = 2;
        }

    $test = new Voyage();
    $test->addVoyage($theme,$offre,$titre1,$nom,$short,$prix,$lieux,$titre2,$image,$description,$service,$idee,$debut,$fin);
    
    header("Location: ../templates/dashboard.php");
 ?>
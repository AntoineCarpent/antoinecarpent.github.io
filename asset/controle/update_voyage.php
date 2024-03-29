<?php
session_start();
include_once '../classes/voyage.php';

    $theme = $_POST['theme'];

        if ($theme ==='mer') {
            $theme = 1;
        }else if($theme === "campagne"){
            $theme = 2;
        }else if($theme === "montagne"){
            $theme = 3;
        }

        if (isset( $_POST['offre']) && $_POST['offre'] != null) {
            $offre = 1;
        }else{
            $offre = 2;
        }

    $titre1 = $_POST['title1'];
    $short = $_POST['title-description'];
    $nom = $_POST['name'];
    $prix = $_POST['price'];
    $lieux = $_POST['place'];
    $titre2 = $_POST['title2'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $service = $_POST['service'];
    $idee = $_POST['idea'];
    $debut = $_POST['start'];
    $fin = $_POST['end'];
    
    $voyageId = $_SESSION['idVoyage'];
    $imageEdit = $_SESSION['image'];
      
    
    
    $test = new Voyage();



    $test->updateVoyage($theme,$offre,$titre1,$nom,$short,$prix,$lieux,$titre2,$image,$description,$service,$idee,$debut,$fin,$voyageId);

    header("Location: ../templates/dashboard.php");
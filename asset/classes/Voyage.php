<?php 

include "Db.php";


class Voyage{

        protected $id_voyage;
        protected $id_categorie;
        protected $id_formule;
        protected $title;
        protected $short_description;
        protected $name;
        protected $price;
        protected $place;
        protected $title_loge;
        protected $description_loge;
        protected $service;
        protected $idea;
        protected $start;
        protected $end;
        protected $image;

    public function addVoyage($id_theme,$id_formule,$title,$name,$short_description,$price,$place,$title_loge,$image,$description_loge,$service,$idea,$start,$end){
        $db = new Db();
        $db->connect();
    
        $stmt = $db->pdo->prepare("INSERT INTO voyages (id_theme, id_formule, title, name, short_description, price, place, title_loge, image_url, description_loge, service, idea, start, end) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $stmt->execute([$id_theme, $id_formule, $title, $name, $short_description, $price, $place, $title_loge, $image, $description_loge, $service, $idea, $start, $end]);
    
        $db->disconnect();
    }
    
    public function updateVoyage($id_theme,$id_formule,$title,$name,$short_description,$price,$place,$title_loge,$image,$description_loge,$service,$idea,$start,$end,$voyageId){
        $db = new Db();
        $db->connect();
    
        $stmt = $db->pdo->prepare("UPDATE voyages SET id_theme=?, id_formule=?, title=?, name=?, short_description=?, price=?, place=?, title_loge=?, image_url=?, description_loge=?, service=?, idea=?, start=?, end=? WHERE id_voyage=?");
    
        $stmt->execute([$id_theme, $id_formule, $title, $name, $short_description, $price, $place, $title_loge, $image, $description_loge, $service, $idea, $start, $end, $voyageId]);
    
        $db->disconnect();
    }
    

    public function deleteVoyage($voyageId){

        $db = new Db();
        $db->connect();
        
    $db->pdo->query("DELETE FROM `voyages` WHERE id_voyage = $voyageId");

    $db->disconnect();
    }

}
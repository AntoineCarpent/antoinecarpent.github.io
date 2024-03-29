<?php
include "../classes/Db.php";

    $db = new Db();
    $db->connect();     

    foreach ($db->pdo->query("SELECT * FROM voyages")
            as $travel){
        $voyage = $travel['id_voyage'];
?>
<!------------------ Fiches voyages ------------------>

            <div class="items">
                <img src=" ../images/<?php echo $travel['image_url'];?>" alt="">
                <div class="text">
                    <div class="bandeau"></div>
                    <h2><?php echo $travel['title'];?></h2>
                    <p><?php echo $travel['short_description'];?>
                    </p>
                    <div class="btn">
                    <a href="../templates/formulaire_update.php?update=<?php echo $voyage?>"><button id="btn">Modifier</button></a>
                    <a href="../controle/delete_voyage.php?delete=<?php echo $voyage?>"><button id="btn">Supprimer</button></a>
                    </div>
                </div>
            </div>
<?php    } 

    $db->disconnect();
?>
           
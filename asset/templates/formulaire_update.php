<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="../images/logo_png.png" alt="logo"> 
    </header>
    <main>
        <div>
            <?php
            session_start();
            include "../classes/Db.php";

                $_SESSION['idVoyage'] = intval($_GET['update']);
                $voyageIdupdate = $_SESSION['idVoyage'];
                $db = new Db();
                $db->connect();

                    foreach ($db->pdo->query("SELECT * FROM    voyages WHERE `id_voyage` = $voyageIdupdate")
                    as $updateData) {};
                
                $theme = $updateData['id_theme'];
                $formule = $updateData['id_formule'];
                $title = $updateData['title'];
                $short = $updateData['short_description'];
                $name = $updateData['name'];
                $price = $updateData['price'];
                $place = $updateData['place'];
                $titleLoge = $updateData['title_loge'];
                $image = $updateData['image_url'];
                var_dump($image);
                $_SESSION['image'] = $image;
                $descriptionLoge = $updateData['description_loge'];
                $service = $updateData['service'];
                $idea = $updateData['idea'];
                $start = $updateData['start'];
                $end = $updateData['end'];
                $offre = $updateData['id_formule'];
                

                $db->disconnect();
            ?>
            <form action="../controle/update_voyage.php" method="post" class="form">  
                
                <div class="item-form">
<!-------------------------- Theme -------------------------->
                <div class="theme">
                    <div><label for="theme">Theme</label></div>
                    <select name="theme" id="theme">
                        <option value="default" ></option>
                        <option value="mer" <?php if ($theme === 1) {
                        echo 'selected';
                        } ?>>Mer</option>
                        <option value="campagne" <?php if ($theme === 2) {
                        echo 'selected';
                        } ?>>Campagne</option>
                        <option value="montagne" <?php if ($theme === 3) {
                        echo 'selected';
                        } ?>>Montagne</option>
                    </select>
                </div>
<!-------------------------- Lieux -------------------------->
                <div class="lieux">
                    <div><label for="place">Lieux</label></div>
                    <select name="place" id="place">
                        <option value="00" <?php if ($place === "00"){ echo "selected";};?>>(00) Hors France</option>
                        <option value="01" <?php if ($place === "01"){ echo "selected";};?>>(01) Ain </option>
                        <option value="02" <?php if ($place === "02"){ echo "selected";};?>>(02) Aisne </option>
                        <option value="03" <?php if ($place === "03"){ echo "selected";};?>>(03) Allier </option>
                        <option value="04" <?php if ($place === "04"){ echo "selected";};?>>(04) Alpes de Haute Provence </option>
                        <option value="05" <?php if ($place === "05"){ echo "selected";};?>>(05) Hautes Alpes </option>
                        <option value="06" <?php if ($place === "06"){ echo "selected";};?>>(06) Alpes Maritimes </option>
                        <option value="07" <?php if ($place === "07"){ echo "selected";};?>>(07) Ardèche </option>
                        <option value="08" <?php if ($place === "08"){ echo "selected";};?>>(08) Ardennes </option>
                        <option value="09" <?php if ($place === "09"){ echo "selected";};?>>(09) Ariège </option>
                        <option value="10" <?php if ($place === "10"){ echo "selected";};?>>(10) Aube </option>
                        <option value="11" <?php if ($place === "11"){ echo "selected";};?>>(11) Aude </option>
                        <option value="12" <?php if ($place === "12"){ echo "selected";};?>>(12) Aveyron </option>
                        <option value="13" <?php if ($place === "13"){ echo "selected";};?>>(13) Bouches du Rhône </option>
                        <option value="14" <?php if ($place === "14"){ echo "selected";};?>>(14) Calvados </option>
                        <option value="15" <?php if ($place === "15"){ echo "selected";};?>>(15) Cantal </option>
                        <option value="16" <?php if ($place === "16"){ echo "selected";};?>>(16) Charente </option>
                        <option value="17" <?php if ($place === "17"){ echo "selected";};?>>(17) Charente Maritime </option>
                        <option value="18" <?php if ($place === "18"){ echo "selected";};?>>(18) Cher </option>
                        <option value="19" <?php if ($place === "19"){ echo "selected";};?>>(19) Corrèze </option>
                        <option value="2A" <?php if ($place === "2A"){ echo "selected";};?>>(2A) Corse du Sud </option>
                        <option value="2A" <?php if ($place === "2A"){ echo "selected";};?>>(2A) Corse du Sud </option>
                        <option value="2B" <?php if ($place === "2B"){ echo "selected";};?>>(2B) Haute-Corse </option>
                        <option value="21" <?php if ($place === "21"){ echo "selected";};?>>(21) Côte d'Or </option>
                        <option value="22" <?php if ($place === "22"){ echo "selected";};?>>(22) Côtes d'Armor </option>
                        <option value="23" <?php if ($place === "23"){ echo "selected";};?>>(23) Creuse </option>
                        <option value="24" <?php if ($place === "24"){ echo "selected";};?>>(24) Dordogne </option>
                        <option value="25" <?php if ($place === "25"){ echo "selected";};?>>(25) Doubs </option
                        ><option value="26" <?php if ($place === "26"){ echo "selected";};?>>(26) Drôme </option>
                        <option value="27" <?php if ($place === "27"){ echo "selected";};?>>(27) Eure </option>
                        <option value="28" <?php if ($place === "28"){ echo "selected";};?>>(28) Eure et Loir </option>
                        <option value="29" <?php if ($place === "29"){ echo "selected";};?>>(29) Finistère </option>
                        <option value="30" <?php if ($place === "30"){ echo "selected";};?>>(30) Gard </option>
                        <option value="31" <?php if ($place === "31"){ echo "selected";};?>>(31) Haute Garonne </option>
                        <option value="32" <?php if ($place === "32"){ echo "selected";};?>>(32) Gers </option>
                        <option value="33" <?php if ($place === "33"){ echo "selected";};?>>(33) Gironde </option>
                        <option value="34" <?php if ($place === "34"){ echo "selected";};?>>(34) Hérault </option>
                        <option value="35" <?php if ($place === "35"){ echo "selected";};?>>(35) Ille et Vilaine </option>
                        <option value="36" <?php if ($place === "36"){ echo "selected";};?>>(36) Indre </option>
                        <option value="37" <?php if ($place === "37"){ echo "selected";};?>>(37) Indre et Loire </option>
                        <option value="38" <?php if ($place === "38"){ echo "selected";};?>>(38) Isère </option>
                        <option value="39" <?php if ($place === "39"){ echo "selected";};?>>(39) Jura </option>
                        <option value="40" <?php if ($place === "40"){ echo "selected";};?>>(40) Landes </option>
                        <option value="41" <?php if ($place === "41"){ echo "selected";};?>>(41) Loir et Cher </option>
                        <option value="42" <?php if ($place === "42"){ echo "selected";};?>>(42) Loire </option>
                        <option value="43" <?php if ($place === "43"){ echo "selected";};?>>(43) Haute Loire </option>
                        <option value="44" <?php if ($place === "44"){ echo "selected";};?>>(44) Loire Atlantique </option>
                        <option value="45" <?php if ($place === "45"){ echo "selected";};?>>(45) Loiret </option>
                        <option value="46" <?php if ($place === "46"){ echo "selected";};?>>(46) Lot </option>
                        <option value="47" <?php if ($place === "47"){ echo "selected";};?>>(47) Lot et Garonne </option>
                        <option value="48" <?php if ($place === "48"){ echo "selected";};?>>(48) Lozère </option>
                        <option value="49" <?php if ($place === "49"){ echo "selected";};?>>(49) Maine et Loire </option>
                        <option value="50" <?php if ($place === "50"){ echo "selected";};?>>(50) Manche </option>
                        <option value="51" <?php if ($place === "51"){ echo "selected";};?>>(51) Marne </option>
                        <option value="52" <?php if ($place === "52"){ echo "selected";};?>>(52) Haute Marne </option>
                        <option value="53" <?php if ($place === "53"){ echo "selected";};?>>(53) Mayenne </option>
                        <option value="54" <?php if ($place === "54"){ echo "selected";};?>>(54) Meurthe et Moselle </option>
                        <option value="55" <?php if ($place === "55"){ echo "selected";};?>>(55) Meuse </option>
                        <option value="56" <?php if ($place === "56"){ echo "selected";};?>>(56) Morbihan </option>
                        <option value="57" <?php if ($place === "57"){ echo "selected";};?>>(57) Moselle </option>
                        <option value="58" <?php if ($place === "58"){ echo "selected";};?>>(58) Nièvre </option>
                        <option value="59" <?php if ($place === "59"){ echo "selected";};?>>(59) Nord </option>
                        <option value="60" <?php if ($place === "60"){ echo "selected";};?>>(60) Oise </option>
                        <option value="61" <?php if ($place === "61"){ echo "selected";};?>>(61) Orne </option>
                        <option value="62" <?php if ($place === "62"){ echo "selected";};?>>(62) Pas de Calais </option>
                        <option value="63" <?php if ($place === "63"){ echo "selected";};?>>(63) Puy de Dôme </option>
                        <option value="64" <?php if ($place === "64"){ echo "selected";};?>>(64) Pyrénées Atlantiques </option>
                        <option value="65" <?php if ($place === "65"){ echo "selected";};?>>(65) Hautes Pyrénées </option>
                        <option value="66" <?php if ($place === "66"){ echo "selected";};?>>(66) Pyrénées Orientales </option>
                        <option value="67" <?php if ($place === "67"){ echo "selected";};?>>(67) Bas Rhin </option>
                        <option value="68" <?php if ($place === "68"){ echo "selected";};?>>(68) Haut Rhin </option>
                        <option value="69" <?php if ($place === "69"){ echo "selected";};?>>(69) Rhône </option>
                        <option value="70" <?php if ($place === "70"){ echo "selected";};?>>(70) Haute Saône </option>
                        <option value="71" <?php if ($place === "71"){ echo "selected";};?>>(71) Saône et Loire </option>
                        <option value="72" <?php if ($place === "72"){ echo "selected";};?>>(72) Sarthe </option>
                        <option value="73" <?php if ($place === "73"){ echo "selected";};?>>(73) Savoie </option>
                        <option value="74" <?php if ($place === "74"){ echo "selected";};?>>(74) Haute Savoie </option>
                        <option value="75" <?php if ($place === "75"){ echo "selected";};?>>(75) Paris </option>
                        <option value="76" <?php if ($place === "76"){ echo "selected";};?>>(76) Seine Maritime </option>
                        <option value="77" <?php if ($place === "77"){ echo "selected";};?>>(77) Seine et Marne </option>
                        <option value="78" <?php if ($place === "78"){ echo "selected";};?>>(78) Yvelines </option>
                        <option value="79" <?php if ($place === "79"){ echo "selected";};?>>(79) Deux Sèvres </option>
                        <option value="80" <?php if ($place === "80"){ echo "selected";};?>>(80) Somme </option>
                        <option value="81" <?php if ($place === "81"){ echo "selected";};?>>(81) Tarn </option>
                        <option value="82" <?php if ($place === "82"){ echo "selected";};?>>(82) Tarn et Garonne </option>
                        <option value="83" <?php if ($place === "83"){ echo "selected";};?>>(83) Var </option>
                        <option value="84" <?php if ($place === "84"){ echo "selected";};?>>(84) Vaucluse </option>
                        <option value="85" <?php if ($place === "85"){ echo "selected";};?>>(85) Vendée </option>
                        <option value="86" <?php if ($place === "86"){ echo "selected";};?>>(86) Vienne </option>
                        <option value="87" <?php if ($place === "87"){ echo "selected";};?>>(87) Haute Vienne </option>
                        <option value="88" <?php if ($place === "88"){ echo "selected";};?>>(88) Vosges </option>
                        <option value="89" <?php if ($place === "89"){ echo "selected";};?>>(89) Yonne </option>
                        <option value="90" <?php if ($place === "90"){ echo "selected";};?>>(90) Territoire de Belfort </option>
                        <option value="91" <?php if ($place === "91"){ echo "selected";};?>>(91) Essonne </option>
                        <option value="92" <?php if ($place === "92"){ echo "selected";};?>>(92) Hauts de Seine </option>
                        <option value="93" <?php if ($place === "93"){ echo "selected";};?>>(93) Seine Saint Denis </option>
                        <option value="94" <?php if ($place === "94"){ echo "selected";};?>>(94) Val de Marne </option>
                        <option value="95" <?php if ($place === "95"){ echo "selected";};?>>(95) Val d'Oise </option>
                        <option value="971" <?php if ($place === "971"){ echo "selected";};?>>(971) Guadeloupe </option>
                        <option value="972" <?php if ($place === "972"){ echo "selected";};?>>(972) Martinique </option>
                        <option value="973" <?php if ($place === "973"){ echo "selected";};?>>(973) Guyane </option>
                        <option value="974" <?php if ($place === "974"){ echo "selected";};?>>(974) Réunion </option>
                        <option value="975" <?php if ($place === "975"){ echo "selected";};?>>(975) Saint Pierre et Miquelon </option>
                        <option value="976" <?php if ($place === "976"){ echo "selected";};?>>(976) Mayotte </option>
                    </select>
                </div>
               
<!--------------------- Titre principale --------------------->
                <div class="title1">
                    <div><label for="title1">Titre annonce</label></div>
                    <input type="text" name="title1" id="title1" value="<?php echo $title;?>">
                </div>
<!---------------------------- Nom ---------------------------->
                
                <div class="name">

                    <label for="name">Nom du camping/residence</label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>">
                </div>
<!--------------------- Short description --------------------->

                <div class="title-description">
                    <label for="title-description">Short déscription</label>
                    <textarea name="title-description" name="title-description" id="title-description" cols="30" rows="2"><?php echo $short;?></textarea>
                </div>
<!--------------------- Titre du logement --------------------->

                <div class="title2">
                    <label for="title2">Titre du logement</label>
                    <input type="text" name="title2" id="title2"  value="<?php echo $titleLoge;?>">
                </div>
<!--------------------------- Prix --------------------------->
                
                <div class="price">
                    <label for="price">Tarif</label>
                    <input type="number" name="price" id="price"  value="<?php echo $price;?>">
                </div>
<!------------------ Description du logement ------------------>

                <div class="description">
                    <label for="description">Description du logement</label>
                    <textarea name="description" id="description" cols="30" rows="2"> <?php echo $descriptionLoge;?></textarea>
                </div>
<!-------------------------- Service -------------------------->

                <div class="service-idee">
                    <label for="service">Service</label>
                    <textarea name="service" id="service" cols="30" rows="2"><?php echo $service;?></textarea>
<!--------------------------- Idée --------------------------->

                    <label for="idea">Idées de chose a faire</label>
                    <textarea name="idea" id="idea" cols="30" rows="2"><?php echo $idea;?></textarea>
                </div>
<!---------------------- Checkbox offre ---------------------->

                <div class="item-checkbox">
                    <label for="offre">Offre 2 pour 1:</label> <input type="checkbox" name="offre" <?php if ($offre === 1) {
                        echo 'checked';
                    } ?>>
                </div>
<!--------------------------- Date --------------------------->

            <div class="date">
                <label for="date">Dates</label>
                <input type="date" name="start" id="start" name="start"  value="<?php echo $start;?>">
                <input type="date" name="end" id="end" name="end"  value="<?php echo $end;?>">
            </div>
            </div>                
<!----------------------- Ajout d'image ----------------------->
            <div class="item-image">
                <img src=" ../images/<?php 
                    echo $image;
                ?>" alt="" id='test'>
                <input type="file" name="image" id="image" >
                <label for="image">Ajouter une image</label>
               
            </div>
                <input type="submit" id="submit" value="Modifier">
                <a href="../templates/dashboard.php" class="back"><input type="button"  value="Annuler" id="back"></a>

            </form>
         </div>
    </main>
    <script src="../js/index.js"></script>
</body>
</html>
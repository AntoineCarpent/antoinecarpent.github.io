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
        <form action="../controle/add_voyage.php" method="post" class="form">  
            
            <div class="item-form">
<!-------------------------- Theme -------------------------->
                <div class="theme">
                    <div><label for="theme">Theme</label></div>
                    <select name="theme" id="theme">
                        <option value="default" ></option>
                        <option value="mer">Mer</option>
                        <option value="campagne">Campagne</option>
                        <option value="montagne">Montagne</option>
                    </select>
                </div>
<!-------------------------- Lieux -------------------------->
                <div class="lieux">
                    <div><label for="place">Lieux</label></div>
                    <select name="place" id="place">
                        <option value="00">(00) Hors France</option>
                        <option value="01">(01) Ain </option>
                        <option value="02">(02) Aisne </option>
                        <option value="03">(03) Allier </option>
                            <option value="04">(04) Alpes de Haute Provence </option>
                            <option value="05">(05) Hautes Alpes </option>
                            <option value="06">(06) Alpes Maritimes </option>
                            <option value="07">(07) Ardèche </option>
                            <option value="08">(08) Ardennes </option>
                            <option value="09">(09) Ariège </option>
                            <option value="10">(10) Aube </option>
                            <option value="11">(11) Aude </option>
                            <option value="12">(12) Aveyron </option>
                            <option value="13">(13) Bouches du Rhône </option>
                            <option value="14">(14) Calvados </option>
                            <option value="15">(15) Cantal </option>
                            <option value="16">(16) Charente </option>
                            <option value="17">(17) Charente Maritime </option>
                            <option value="18">(18) Cher </option>
                            <option value="19">(19) Corrèze </option>
                            <option value="2A">(2A) Corse du Sud </option>
                            <option value="2A">(2A) Corse du Sud </option>
                            <option value="2B">(2B) Haute-Corse </option>
                            <option value="21">(21) Côte d'Or </option>
                            <option value="22">(22) Côtes d'Armor </option>
                            <option value="23">(23) Creuse </option>
                            <option value="24">(24) Dordogne </option>
                            <option value="25">(25) Doubs </option
                            ><option value="26">(26) Drôme </option>
                            <option value="27">(27) Eure </option>
                            <option value="28">(28) Eure et Loir </option>
                            <option value="29">(29) Finistère </option>
                            <option value="30">(30) Gard </option>
                            <option value="31">(31) Haute Garonne </option>
                            <option value="32">(32) Gers </option>
                            <option value="33">(33) Gironde </option>
                            <option value="34">(34) Hérault </option>
                            <option value="35">(35) Ille et Vilaine </option>
                            <option value="36">(36) Indre </option>
                            <option value="37">(37) Indre et Loire </option>
                            <option value="38">(38) Isère </option>
                            <option value="39">(39) Jura </option>
                            <option value="40">(40) Landes </option>
                            <option value="41">(41) Loir et Cher </option>
                            <option value="42">(42) Loire </option>
                            <option value="43">(43) Haute Loire </option>
                            <option value="44">(44) Loire Atlantique </option>
                            <option value="45">(45) Loiret </option>
                            <option value="46">(46) Lot </option>
                            <option value="47">(47) Lot et Garonne </option>
                            <option value="48">(48) Lozère </option>
                            <option value="49">(49) Maine et Loire </option>
                            <option value="50">(50) Manche </option>
                            <option value="51">(51) Marne </option>
                            <option value="52">(52) Haute Marne </option>
                            <option value="53">(53) Mayenne </option>
                            <option value="54">(54) Meurthe et Moselle </option>
                            <option value="55">(55) Meuse </option>
                            <option value="56">(56) Morbihan </option>
                            <option value="57">(57) Moselle </option>
                            <option value="58">(58) Nièvre </option>
                            <option value="59">(59) Nord </option>
                            <option value="60">(60) Oise </option>
                            <option value="61">(61) Orne </option>
                            <option value="62">(62) Pas de Calais </option>
                            <option value="63">(63) Puy de Dôme </option>
                            <option value="64">(64) Pyrénées Atlantiques </option>
                            <option value="65">(65) Hautes Pyrénées </option>
                            <option value="66">(66) Pyrénées Orientales </option>
                            <option value="67">(67) Bas Rhin </option>
                            <option value="68">(68) Haut Rhin </option>
                            <option value="69">(69) Rhône </option>
                            <option value="70">(70) Haute Saône </option>
                            <option value="71">(71) Saône et Loire </option>
                            <option value="72">(72) Sarthe </option>
                            <option value="73">(73) Savoie </option>
                            <option value="74">(74) Haute Savoie </option>
                            <option value="75">(75) Paris </option>
                            <option value="76">(76) Seine Maritime </option>
                            <option value="77">(77) Seine et Marne </option>
                            <option value="78">(78) Yvelines </option>
                            <option value="79">(79) Deux Sèvres </option>
                            <option value="80">(80) Somme </option>
                            <option value="81">(81) Tarn </option>
                            <option value="82">(82) Tarn et Garonne </option>
                            <option value="83">(83) Var </option>
                            <option value="84">(84) Vaucluse </option>
                            <option value="85">(85) Vendée </option>
                            <option value="86">(86) Vienne </option>
                            <option value="87">(87) Haute Vienne </option>
                            <option value="88">(88) Vosges </option>
                            <option value="89">(89) Yonne </option>
                            <option value="90">(90) Territoire de Belfort </option>
                            <option value="91">(91) Essonne </option>
                            <option value="92">(92) Hauts de Seine </option>
                            <option value="93">(93) Seine Saint Denis </option>
                            <option value="94">(94) Val de Marne </option>
                            <option value="95">(95) Val d'Oise </option>
                            <option value="971">(971) Guadeloupe </option>
                            <option value="972">(972) Martinique </option>
                            <option value="973">(973) Guyane </option>
                            <option value="974">(974) Réunion </option>
                            <option value="975">(975) Saint Pierre et Miquelon </option>
                            <option value="976">(976) Mayotte </option>
                    </select>
                </div>
                
<!--------------------- Titre principale --------------------->
                <div class="title1">
                    <div><label for="title1">Titre annonce</label></div>
                    <input type="text" name="title1" id="title1">
                </div>
<!---------------------------- Nom ---------------------------->
                    
                <div class="name">
                    
                    <label for="name">Nom du camping/residence</label>
                    <input type="text" name="name" id="name">
                </div>
<!--------------------- Short description --------------------->

                <div class="title-description">
                    <label for="title-description">Short déscription</label>
                    <textarea name="title-description" name="title-description" id="title-description" cols="30" rows="2"></textarea>
                </div>
<!--------------------- Titre du logement --------------------->
    
                <div class="title2">
                    <label for="title2">Titre du logement</label>
                    <input type="text" name="title2" id="title2">
                </div>
<!--------------------------- Prix --------------------------->
                    
                <div class="price">
                    <label for="price">Tarif</label>
                    <input type="number" name="price" id="price">
                </div>
<!------------------ Description du logement ------------------>
                    
                <div class="description">
                    <label for="description">Description du logement</label>
                    <textarea name="description" id="description" cols="30" rows="2"></textarea>
                </div>
<!-------------------------- Service -------------------------->
                    
                <div class="service-idee">
                    <label for="service">Service</label>
                    <textarea name="service" id="service" cols="30" rows="2"></textarea>
<!--------------------------- Idée --------------------------->
                        
                    <label for="idea">Idées de chose a faire</label>
                    <textarea name="idea" id="idea" cols="30" rows="2"></textarea>
                </div>
<!---------------------- Checkbox offre ---------------------->
                    
                <div class="item-checkbox">
                    <label for="offre">Offre 2 pour 1:</label> <input type="checkbox" name="offre">
                </div>
<!--------------------------- Date --------------------------->
                    
                <div class="date">
                        <label for="date">Dates</label>
                    <input type="date" name="start" id="start" name="start">
                    <input type="date" name="end" id="end" name="end">
                </div>
            </div>                
<!----------------------- Ajout d'image ----------------------->
                <div class="item-image">
                    <img src="" alt="" id='test'>
                    <label for="image">Ajouter une image</label>
                    <input type="file" name="image" id="image">
                </div>
                 <input type="submit" id="submit" value="Ajouter">
                <a href="../templates/dashboard.php" class="back"><input type="button"  value="Annuler" id="back"></a>
                
        </form>
    </main>
    <script src="../js/index.js"></script>
</body>
</html>
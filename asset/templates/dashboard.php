<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php session_start(); 
        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
        }
    ?>
    <header class="header-deshboard">      
        <a href="./formulaire_ajout.php" id="ajout">
            <button>Ajouter</button>
        </a>
        <img src="../images/logo_png.png" alt="logo"> 

        <a href="../controle/logout.php" id="deconnexion">
            Deconnexion
        </a>
    </header>
    <main>
        <div class="container-dashboard">
                <?php include './template-part/fiche.php';?>
        </div>
    </main>
</body>
</html>
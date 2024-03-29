<?php
include '../classes/voyage.php';

    $test = new Voyage();

    $voyageId = intval($_GET['delete']);
    $test->deleteVoyage($voyageId);

    header("Location: ../templates/dashboard.php");
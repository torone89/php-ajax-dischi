<?php

// importo i data dal mio data.php per chiamata api
include "../includes/data/data.php";


header("Content-Type: application/json");

echo json_encode($dischi);

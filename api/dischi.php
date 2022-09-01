<?php

// importo i data dal mio data.php per chiamata api
include "../includes/data/data.php";

// Le informazioni inviate sono di tipo json 
header("Content-Type: application/json");


// Stampo & Trasformo il mio Array php in JSon
echo json_encode($dischi);

<?php
    include_once 'header.php';
    require 'vendor/autoload.php';
?>

<!-- <?php
    phpinfo()
?> -->



<?php

    // connet mongodb

    $m = new MongoDB\Client("mongodb://localhost:27017");
    echo "Connect to MongoDB!";
    echo'<br/>';
    var_dump($m);
    
    // select database

    // $db = $m->test;
    $db1 = $m->test;
    echo "Database selected!";
    echo'<br/>';
    var_dump($db1);
    
    
    // create collection

    // $collection = $db->createCollection("db_col1");
    // echo "Collection created!";
    // var_dump($db);
    // var_dump($collection);

    // select collection
    $col1 = $db1->db_col1;





    // insert document

    $doc1 = array(
        "name" => "wlj2", 
        "email" => "wlj2@gmail.com",
        "location" => "Brisbane"
    );
    $col1->insertOne($doc1);
    echo "insert doc1!";
    echo'<br/>';


    // delete document

    $col1->deleteOne(array("name"=>'wlj1'));


?> 





<?php 

// // connet mongodb
// $m = new MongoDB\Client("mongodb://localhost:27017");
// echo "Connect to MongoDB!";
// echo'<br/>';
// var_dump($m);

// // select database
// // $db = $m->test;
// $db1 = $m->test;
// echo "Database selected!";
// echo'<br/>';
// var_dump($db1);





?>



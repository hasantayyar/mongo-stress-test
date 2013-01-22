<?php
$value = isset($_GET['value'])?$_GET['value']:md5(rand(1,100));
$mongo = new MongoClient();
$docs = $mongo->benchmark->docs;
$data = $docs->findOne(array('value' =>  $value);
print_r($data);

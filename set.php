<?php
$value = isset($_GET['value'])?$_GET['value']:(isset($argv[1])?$argv[1]:md5(rand(1,100)));
$mongo = new Mongo();
$docs = $mongo->benchmark->docs;
$data = $docs->insert(array('value' => $value));

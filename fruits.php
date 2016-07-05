<?php

//Test script

include_once 'ApiCollection.php';

$db = new DatabaseInfo("db.timfalken.com", "md300889db357314", "fruits", "md300889db357314", "6OYGzVe7");

$fruitTable = new ApiCollection($db, new ParamsLayout(["name", "size"]));
$fruitTable->Delete(0);
$fruitTable->Create(["FruityFruit", 100]);

var_dump($fruitTable->ParamArrayFromPostData());
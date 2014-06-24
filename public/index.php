<?php

require_once __DIR__ . '/LinkedList.php';
require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/lib.php';

// 建立頂點陣列
$heads = array( new LinkedList(),
                new LinkedList(),
                new LinkedList(),
                new LinkedList(),
                new LinkedList(),
                new LinkedList() );

$heads[0]->insert(new Node("1"));
$heads[0]->insert(new Node("2"));
$heads[0]->insert(new Node("5"));

$heads[1]->insert(new Node("2"));
$heads[1]->insert(new Node("1"));
$heads[1]->insert(new Node("3"));
$heads[1]->insert(new Node("5"));

$heads[2]->insert(new Node("3"));
$heads[2]->insert(new Node("2"));
$heads[2]->insert(new Node("4"));

$heads[3]->insert(new Node("4"));
$heads[3]->insert(new Node("3"));
$heads[3]->insert(new Node("5"));
$heads[3]->insert(new Node("6"));

$heads[4]->insert(new Node("5"));
$heads[4]->insert(new Node("1"));
$heads[4]->insert(new Node("2"));
$heads[4]->insert(new Node("4"));

$heads[5]->insert(new Node("6"));
$heads[5]->insert(new Node("4"));

//echo "<pre>";
//print_r($heads);
//echo "</pre>";

foreach ($heads as $index => $head) {
    //echo "point " . ($index+1) . " : ";
    echo readList($head->first);
    echo "<br>";
}

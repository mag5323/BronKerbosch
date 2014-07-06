<?php

require_once __DIR__ . '/LinkedList.php';
require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/lib.php';

include __DIR__ . '/main.html';

define("NODE", 6);
define("MAX_DEGREE", 2);
define("MIN_DEGREE", 1);

$heads = array();

// 建立頂點陣列
for ($i = 0; $i < NODE ; $i++) {
    array_push($heads, new LinkedList());
}

foreach ($heads as $i => $head) {
    $alreadyHave = getList($head);

    foreach (randomPath($i, $alreadyHave) as $rand) {
        if ($head->getDegree() > MIN_DEGREE) {
            break;
        }

        $head->insert(new Node($rand));
        $heads[$rand-1]->insert(new Node($i+1));
    }
}

$sortedArr = sortArr($heads);
$isVisited = array_fill(0, NODE, false);

foreach ($sortedArr as $key => $sort) {
    echo ($key+1) . " : ";
    printList($heads[$key]);
}

$top = array_shift(array_keys($sortedArr));

foreach ($heads as $index => $head) {
    echo "<div>";
    echo "<span class='vertice'>" . ($index+1) . "</span>";
    discoverNode($heads, $index);
    echo "</div>";
}

//echo "<div>";
//echo "<span class='vertice'>" . ($top+1) . "</span>";
//discoverNode($heads, $top);
//echo "</div>";

//echo "<pre>";
//print_r($heads);
//echo "</pre>";

<?php

error_reporting(E_ALL);

function printList($head)
{
    foreach (getList($head) as $data) {
        echo $data . " => ";
    }
    echo "<hr>";
}

function getList($head)
{
    $list = array();
    $node = $head->first;
    $next = $node->next;

    do {
        array_push($list, $node->data);
        $next = $node->next;
        $node = $next;
    } while ($next !== null);

    return $list;
}

function randomPath($index, $alreadyHave)
{
    $edge = rand(1, NODE-1);
    $vertices = range(1, NODE);

    // 去掉節點本身以及已經有相連的點(避免重複)
    foreach ($alreadyHave as $node) {
        unset($vertices[$node-1]);
    }
    unset($vertices[$index]);

    shuffle($vertices);
    $target = array();

    for ($i = 0; $i < $edge; $i++) {
        array_push($target, $vertices[$i]);
    }

    return $target;
}

function sortArr($heads)
{
    $sortArr = array();
    foreach ($heads as $head) {
        array_push($sortArr, $head->getDegree());
    }

    asort($sortArr);
    return $sortArr;
}

function discoverNode($heads, $i)
{
    $positionMap = array("left", "leftDown", "down", "right", "top" );

   // if ($heads[$i]->isVisited) {
   //     return false;
   // }
   // $heads[$i]->setVisited(true);

    foreach (getList($heads[$i]) as $index => $node) {
        echo "<span class='". $positionMap[$index] . "'>" . $node ."</span>";
        //discoverNode($heads, $node);
    }
}

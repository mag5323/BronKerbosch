<?php

function readList($node)
{
    echo $node->data . " => ";

    if ($node->next !== null) {
        return readList($node->next);
    } else {
        return "null";
    }
}

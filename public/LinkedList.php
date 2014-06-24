<?php

class LinkedList
{
    public $last;
    public $first;
    public $total;

    public function __construct()
    {
        $this->last = null;
        $this->first = null;
        $this->total = 0;
    }

    public function insert($node)
    {
        if ($this->first !== null and $this->last !== null) {
            $this->last->next = $node;
            $this->last = $node;
        } else {
            $node->next = null;
            $this->first = $node;
            $this->last = $node;
        }

        $this->total += 1;
    }

}

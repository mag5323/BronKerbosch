<?php

class LinkedList
{
    public $last;
    public $first;
    public $total;
    public $visited;

    public function __construct()
    {
        $this->last = null;
        $this->first = null;
        $this->total = 0;
        $this->visited = false;
    }

    public function insert($node)
    {
        if ($this->first !== null and $this->last !== null) {
            $this->last->next = $node;
        } else {
            $node->next = null;
            $this->first = $node;
        }

        $this->last = $node;
        $this->total += 1;
    }

    public function removeLast()
    {
        $currentNode = $this->first;

        for ($i = 0; $i < $this->total - 2; $i++) {
            $currentNode = $this->getNext($currentNode);
        }

        $removedData = $currentNode->next->data;
        $currentNode->next = null;
        $this->last = $currentNode;
        $this->total -= 1;
        return $removeData;
    }

    public function setVisited($visited)
    {
        $this->visited = $visited;
    }

    public function getNext($node)
    {
        return $node->next;
    }

    public function getDegree()
    {
        return $this->total;
    }
}

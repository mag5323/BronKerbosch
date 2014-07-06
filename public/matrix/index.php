<?php

require_once __DIR__ . '/Matrix.php';
include __DIR__ . '/main.html';

if (isset($_GET['vertices']) and !empty($_GET['vertices'])) {
    $matrix = new Matrix(intval($_GET['vertices']));
}

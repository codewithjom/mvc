<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = 'SELECT * FROM posts WHERE id = ?';

$posts = $db->query($query, [$id])->fetchAll();

dd($posts);

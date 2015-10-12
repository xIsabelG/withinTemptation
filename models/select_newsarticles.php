<?php

$nr_items_pp = 3;
$offset = ($page_nr -1) * $nr_items_pp;

$sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . "$nr_items_pp";
$result = $mysqli->query($sql);

$result = resultToArray($result);
<?php

$result = $mysqli->query("SELECT * FROM newsitems");

$result = resultToArray($result);
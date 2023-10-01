<?php

$connStr = "host=localhost port=5432 dbname=apirest_i9u3 user=postgres password=123456";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT *FROM citas");
var_dump(pg_fetch_all($result));

?>
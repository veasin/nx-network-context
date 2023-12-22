<?php
include "../src/helpers/context.php";
include "../src/helpers/context/request.php";
include "../src/helpers/context/response.php";
include "../src/helpers/type.php";

//$resp =\nx\helpers\network\context::get('http://192.168.100.6/self/test/php/header.php')->send();
//$resp =\nx\helpers\network\context::get('https://lop-api.vertu.com/test/ht/debug/ok')->send();
$resp =\nx\helpers\network\context::get('http://localhost/')->send();
var_dump($resp);
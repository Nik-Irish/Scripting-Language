<?php
echo "<h3>1. include() Demo</h3>";
include('25ai.php');
echo "Script keeps running after include().<br><br>";


echo "<h3>2. require() Demo</h3>";
require('25ai.php');
echo "Script keeps running after require().<br><br>";


echo "<h3>3. include_once() Demo</h3>";
include_once('25ai.php');
echo "include_once() prevented duplicate inclusion.<br><br>";


echo "<h3>4. require_once() Demo</h3>";
require_once('25ai.php'); 
echo "require_once() also prevented duplicate inclusion.<br>";
?>
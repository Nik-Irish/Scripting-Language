<?php
// Using mktime()
$timestamp1 = mktime(20, 35, 30, 11, 27, 2026);
echo "Timestamp using mktime(): " . $timestamp1 . "<br>";
echo "Formatted date: " . date("Y-m-d H:i:s", $timestamp1) . "<br>";

// Using strtotime()
$timestamp2 = strtotime("2026-11-27 20:35:30");
echo "Timestamp using strtotime(): " . $timestamp2 . "<br>";
echo "Formatted date: " . date("Y-m-d H:i:s", $timestamp2) . "<br>";
?>

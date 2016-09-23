<?php
// CTGP Leaderboard Functions
// Created by PokeAcer; credit when used.

//Needed for every function:
$json = file_get_contents('http://tt.chadsoft.co.uk/index.json');
$jsonarray = json_decode($json, true);

function get_recent_rkg($num)
{
	return file_get_contents("http://tt.chadsoft.co.uk" . $jsonarray["recentRecords"][$num]["href"]);
}

function get_recent_rkg_url($num)
{
	return "http://tt.chadsoft.co.uk" . $jsonarray["recentRecords"][$num]["href"];
}

function get_recent_rkg_data($num, $type)
{
	return "http://tt.chadsoft.co.uk" . $jsonarray["recentRecords"][$num][$type];
}
?>


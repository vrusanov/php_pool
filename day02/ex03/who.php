#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Kiev');
	$size_bin_line = 628;
	$file = fopen("/var/run/utmpx", "r");
	
	$result = array();
	$lines = array();
	while ($raw_data = fread($file, $size_bin_line)) {
	    $data = unpack("a256login/a4id/a32line/iupid/iutype/I1timeentry", $raw_data);
	    if ($data["utype"] == 7) {
	    	$result[] = $data;
	    	$lines[] = $data["line"];
	    }
	}
	
	array_multisort($lines, $result);
	foreach ($result as $line) {
		echo $line['login']." ".$line['line']."  ".date("M j H:i", $line["timeentry"])."\n";
	}
?>
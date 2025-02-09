<?php

    use PHPOTP\PHPOTP;

	$secretkey = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
	$currentcode = '571427';

	if (PHPOTP::verify($secretkey,$currentcode)) {
		echo "Code is valid\n";
	} else {
		echo "Invalid code\n";
	}

  print sprintf('<img src="%s"/>',PHPOTP::getBarCodeUrl('','',$secretkey,'My%20App'));
  print PHPOTP::getTokenCodeDebug($secretkey,0);
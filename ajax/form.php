<?php

$inp = $_POST['ourForm_inp'];

switch ($inp) {
	case 'Garri':
		echo "Gri";
		break;
	case 'Germ':
		echo "Key";
		break;
	default:
		echo "wif";
}

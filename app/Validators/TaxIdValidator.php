<?php namespace App\Validators;

class TaxIdValidator {

	public function validateTaxId($attribute, $value, $parameters) {
		$value = str_replace('-','',$value);
		if (strlen($value)!=11) return false;
		$s=str_split($value);
		for ($i = 0; $i < 11; $i++) {
		    $s[$i] = intval($s[$i]);
		}
		$chksum = (9 * ($s[0] + $s[4]) + 7 * ($s[1] + $s[5]) + 3 * ($s[2] + $s[6]) + $s[3]) % 10;
		if ($chksum > 0) $chksum = 10 - $chksum;
		if ($s[7] != $chksum) return false;
		if ($s[8] == 0 || $s[8] > 5) return false;

		$nCDV = 10*$s[9]+$s[10];
		if (!((($nCDV>1) && ($nCDV<21)) || (($nCDV>21) && ($nCDV<45)) || ($nCDV==51))) return false;

		return true;

	}
}
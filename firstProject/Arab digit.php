<?php
    $rimDigit = '';
    $digit = readline('Введите арабское число!');
	  $a = $digit / 1000 % 10 ;
		$b = $digit / 100 % 10;
		$c = $digit / 10 % 10;
		$d = $digit % 10;
		if ($a !== 0){
			for ($i = 1; $i < $a + 1; $i++)
				$rimDigit .= "M";
		}
		if ($b !== 0){
			if ($b < 4)
				for ($i = 1; $i < $b + 1; $i++)
					$rimDigit .= "C";
			if ($b === 4)
				$rimDigit .= "CD";
			if ($b === 5)
				$rimDigit .= "D";
			if ($b > 5 && $b < 9){
				$rimDigit .= "D";
				for ($i = 1; $i < $b - 5 + 1; $i++)
					$rimDigit .= "C";
			}
			if ($b === 9)
				$rimDigit .= "CM";
		}
		if ($c !== 0){
			if ($c < 4)
				for ($i = 1; $i < $c + 1; $i++)
					$rimDigit .= "X";
			if ($c === 4)
				$rimDigit .= "XL";
			if ($c === 5)
				$rimDigit .= "L";
			if ($c > 5 && $c < 9){
				$rimDigit .= "L";
				for ($i = 1; $i < $c - 5 + 1; $i++)
					$rimDigit .= "X";
			}
			if ($c === 9)
				$rimDigit .= "XC";
		}
		if ($d !== 0){
			if ($d < 4)
				for ($i = 1; $i < $d + 1; $i++)
					$rimDigit .= "I";
			if ($d === 4)
				$rimDigit .= "IV";
			if ($d === 5)
				$rimDigit .= "V";
			if ($d > 5 && $d < 9){
				$rimDigit .= "V";
				for ($i = 1; $i < $d - 5 + 1; $i++)
					$rimDigit .= "I";
			}
			if ($d === 9)
				$rimDigit .= "IX";
		}
    print_r($rimDigit . "\n");
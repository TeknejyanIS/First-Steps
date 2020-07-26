<?php
	  $flag = false;
	  $rimDigits = readline('Введите римское число!') ;
		$digits = [1, 5, 10, 50, 100, 500, 1000];
    $rimDigit = "MMDCXLIII";
		$i = strlen($rimDigit);
		$newDigit = 0;
		while ($i  > 0)
		{
			$flag = false;
			for ($j=6; $j>-1; $j--)
			{
				if ($rimDigit[$i-1] == $rimDigits[$j])
				{
					$newDigit += $digits[$j];
					if ($i > 1)
					{
						for ($l=0; $l<7; $l++)
							if ($rimDigit[$i-2] == $rimDigits[$l])
								if ($digits[$j] > $digits[$l])
								{
									$newDigit -= $digits[$l];
									$flag = true;
								}
					}
					
				}
			}
			if ($flag)
				$i-=2;
			else
				$i--;
		}
    print_r($newDigit);

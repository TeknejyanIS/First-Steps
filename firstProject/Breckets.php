<?php

	$flag = true;
	$brackets = readline('Введите комбинацию скобок!');

	$indRight = strlen($brackets) - 1;
	$indLeft = 0;
	$middle = strlen($brackets) / 2 % 10;
	if (strlen($brackets) > 0 && strlen($brackets) % 2 == 0)
		while ($indLeft < $indRight)
		{
			if (($brackets[$indLeft] === '('  && $brackets[$indLeft+1] === ')') || ($brackets[$indLeft] === '{'  && $brackets[$indLeft+1] === '}') || ($brackets[$indLeft] === '['  && $brackets[$indLeft+1] === ']'))
				$indLeft += 2;
			else
				if (($brackets[$indLeft] === '(' && $brackets[$indRight] === ')')||($brackets[$indLeft] === '{' && $brackets[$indRight] === '}')||($brackets[$indLeft] === '[' && $brackets[$indRight] === ']'))
				{
					$indLeft++;
					$indRight--;
				}
				else
				{
					$flag = false;
					break;
				}
		}
	else
		$flag = false;
	if ($flag)
		print_r("Строка валидная!\n");
	else
		print_r("Строка не валидная!\n");

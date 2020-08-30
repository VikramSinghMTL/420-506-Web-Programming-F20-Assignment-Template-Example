<?php

use TemplateExample\Models\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
	public function testNumbersWereAddedSuccessfully(): void
	{
		$calculator = new Calculator();
		$x = rand(0, 100);
		$y = rand(0, 100);
		$sum = $calculator->add($x, $y);

		$this->assertEquals($sum, $x + $y);
	}

	public function testNumbersWereNotAddedSuccessfully(): void
	{
		$calculator = new Calculator();
		$x = rand(0, 100);
		$y = rand(0, 100);
		$sum = $calculator->add($x, $y);

		$this->assertNotEquals($sum, $x + $y + 1);
	}

	public function testNumbersSubtractedSuccessfully(): void
	{
		$calculator = new Calculator();
		$x = rand(0, 100);
		$y = rand(0, 100);
		$difference = $calculator->subtract($x, $y);

		$this->assertNotEquals($difference, $x - $y);
	}
}

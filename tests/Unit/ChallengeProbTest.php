<?php

namespace Tests\Unit;

use App\Code\CodingChallenge;
use Tests\TestCase;

class ChallengeProbTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_odd_product()
	{
        $codeChallenge = new CodingChallenge();

		$this->assertEquals(15, $codeChallenge->oddProduct([3, 4, 1, 1, 5]));
		$this->assertEquals(25, $codeChallenge->oddProduct([5, 5, 8, 2, 4, 32]));
		$this->assertEquals(1, $codeChallenge->oddProduct([1, 2, 1, 2, 1, 2, 1, 2]));
		$this->assertEquals(1, $codeChallenge->oddProduct([0, 0, 0, 1]));
		$this->assertEquals(5, $codeChallenge->oddProduct([1, 2, 2, 5, 2, 0]));
	}

    public function test_Addition() {
        $codeChallenge = new CodingChallenge();

		$this->assertEquals(3, $codeChallenge->addition(2));
		$this->assertEquals(-8, $codeChallenge->addition(-9));
		$this->assertEquals(1, $codeChallenge->addition(0));
		$this->assertEquals(1000, $codeChallenge->addition(999)); 
		$this->assertEquals(74, $codeChallenge->addition(73)); 
	}

    public function test_Hurdle_Jump()
	{
        $codeChallenge = new CodingChallenge();
        
        $this->assertTrue($codeChallenge->hurdleJump([1, 2, 3, 4, 5], 5));
        $this->assertFalse($codeChallenge->hurdleJump([5, 5, 3, 4, 5], 3));
        $this->assertTrue($codeChallenge->hurdleJump([5, 4, 5, 6], 10));
        $this->assertFalse($codeChallenge->hurdleJump([1, 2, 1], 1));
        $this->assertTrue($codeChallenge->hurdleJump([3, 3, 3], 4));
        $this->assertFalse($codeChallenge->hurdleJump([4, 4], 3));
        $this->assertTrue($codeChallenge->hurdleJump([], 4)); 
	}

    public function test_remove_duplicates_from_array()
    {
        $codeChallenge = new CodingChallenge();

        $this->assertSame(['John', 'Taylor'], $codeChallenge->removeDups(['John', 'Taylor', 'John']));
        $this->assertSame(['John', 'Taylor', 'john'], $codeChallenge->removeDups(['John', 'Taylor', 'John', 'john']));
        $this->assertSame(['javascript', 'python', 'ruby', 'c'], $codeChallenge->removeDups(['javascript', 'python', 'python', 'ruby', 'javascript', 'c', 'ruby']));
        $this->assertSame([1, 2, 3, 5, 6, 7], $codeChallenge->removeDups([1, 2, 2, 2, 3, 2, 5, 2, 6, 6, 3, 7, 1, 2, 5]));
        $this->assertSame(['#', '%', '&', '$'], $codeChallenge->removeDups(['#', '#', '%', '&', '#', '$', '&']));
    }
}


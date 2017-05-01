<?php
require __DIR__ . '/../src/trend_test2.php';

class test extends PHPUnit_Framework_TestCase
{
    public function test_string_13_DUP_4_POP_5_DUP_add_DUP_add_minus_get_7()
    {
      //arrange
      $actual = solution("13 DUP 4 POP 5 DUP + DUP + -");

      //acturl
      $expected = 7;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_string_5_6_add_minus()
    {
      //arrange
      $actual = solution("5 6 + -");

      //acturl
      $expected = -1;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_string_3_DUP_minus_minus()
    {
      //arrange
      $actual = solution("3 DUP - -");

      //acturl
      $expected = -1;

      //assert
      $this->assertEquals($expected, $actual);
    }
}

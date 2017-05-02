<?php
require __DIR__ . '/../src/trend_test1.php';

class test extends PHPUnit_Framework_TestCase
{
    public function test_string_a0Ba_get_2()
    {
      //arrange
      $actual = solution("a0Ba");

      //acturl
      $expected = 2;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_string_a0bb_get_minus_1()
    {
      //arrange
      $actual = solution("a0bb");

      //acturl
      $expected = -1;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_string_a0bbB0123_get_minus_1()
    {
      //arrange
      $actual = solution("a0bb");

      //acturl
      $expected = -1;

      //assert
      $this->assertEquals($expected, $actual);
    }
}

<?php
require __DIR__ . '/../src/trend_test1.php';

class test extends PHPUnit_Framework_TestCase
{
    public function test_number_1123_get_12()
    {
      //arrange
      $actual = solution(1123);


      //acturl
      $expected = 12;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_number_100_get_1()
    {
      //arrange
      $actual = solution(100);


      //acturl
      $expected = 1;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_number_1000_get_1()
    {
      //arrange
      $actual = solution(1000);


      //acturl
      $expected = 1;

      //assert
      $this->assertEquals($expected, $actual);
    }

    public function test_number_1234_get_24()
    {
      //arrange
      $actual = solution(1234);


      //acturl
      $expected = 24;

      //assert
      $this->assertEquals($expected, $actual);
    }
}

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
}

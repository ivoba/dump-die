<?php

use PHPUnit\Framework\TestCase;

final class dTest extends TestCase
{
    public function testD()
    {
      $output = shell_exec('php '.__DIR__.'/fixtures/test_d.php');

      $this->assertEquals('"now you see me"
{#3
  +"hello": array:1 [
    "here" => "we go"
  ]
}
now too', $output);
    }
}

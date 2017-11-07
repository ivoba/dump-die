<?php

use PHPUnit\Framework\TestCase;

final class ddTest extends TestCase
{
    public function testDd()
    {
      $output = shell_exec('php '.__DIR__.'/fixtures/test_dd.php');

      $this->assertEquals('"now you see me"
{#3
  +"hello": array:1 [
    "here" => "we go"
  ]
}
', $output);
    }
}

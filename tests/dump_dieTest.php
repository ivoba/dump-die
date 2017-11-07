<?php

use PHPUnit\Framework\TestCase;

final class dump_dieTest extends TestCase
{
    public function testDump_die()
    {
        $output = shell_exec('php '.__DIR__.'/fixtures/test_dump_die.php');

        $this->assertEquals('"now you see me"
{#3
  +"hello": array:1 [
    "here" => "we go"
  ]
}
', $output);
    }
}

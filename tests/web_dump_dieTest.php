<?php

use PHPUnit\Framework\TestCase;

final class web_dump_dieTest extends TestCase
{
    public function testDump_dieTest()
    {
        $command = sprintf(
          'php -S %s:%d -t %s >/dev/null 2>&1 & echo $!',
          '127.0.0.1',
          8001,
          realpath(__DIR__).'/fixtures'
        );
        $output = [];
        exec($command, $output);
        $this->pid = (int) $output[0];
        echo $this->pid;
        sleep(2); // its a backgound task and therefore async, lets optimistically wait for it to start
        $url = 'http://127.0.0.1:8001/test_web_dump_die.php';
        $data = file_get_contents($url);
        $this->assertFalse((strpos('now you see me', $data) === 0));
        $this->assertEquals(0, strpos('now you dont', $data));
        exec('kill ' . $this->pid);
    }
}

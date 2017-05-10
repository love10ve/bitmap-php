<?php

use Bitmap\Bitmap;
use PHPUnit\Framework\TestCase;

class BitmapTest extends TestCase
{
    public function testBitOperation()
    {
        $bitm = new Bitmap(['path' => '/tmp/']);

        $this->assertEquals(0, $bitm->bitcount());

        $bitm->setbit(7, 1);

        $this->assertEquals(0, $bitm->getbit(0));
        $this->assertEquals(1, $bitm->getbit(7));

        $this->assertEquals(8, $bitm->bitcount());

        $bitm->destroy();
    }
}

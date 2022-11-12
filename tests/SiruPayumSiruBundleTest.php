<?php

namespace Siru\PayumSiruBundle\Tests;

use Siru\PayumSiruBundle\SiruPayumSiruBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiruPayumSiruBundleTest extends TestCase
{
    public function testConstructor(): void
    {
        $bundle = new SiruPayumSiruBundle();

        $this->assertInstanceOf(Bundle::class, $bundle);
    }
}

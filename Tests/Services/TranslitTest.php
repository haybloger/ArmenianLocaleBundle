<?php

/** 
 * Test Translit Class
**/


namespace Azatyan\ArmenianLocaleBundle\Tests\Services;

class TrasnlitTest extends Symfony\Bundle\FrameworkBundle\Test\WebTestCase
{
    
    
    public function setUp()
    {
        $kernel = self::getKernelClass();

        self::$kernel = new $kernel('dev', true);
        self::$kernel->boot();
    }

    
    
    
    public function testLatinToArmenian()
    {

        $input = "Barev";
        $output =  self::$kernel->getContainer()->get("armenian.locale.translit")->latinToArmenian($input);
        $expected = "Բարև";
        $this->assertEquals($expected, $output);
    }
}

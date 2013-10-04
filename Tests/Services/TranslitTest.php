<?php


/** 
 * 
 * Test Translit Class
 * 
 */




namespace Azatyan\ArmenianLocaleBundle\Tests\Services;


class TrasnlitTest extends \PHPUnit_Framework_TestCase
{
    public function testLatinToArmenian()
    {

        $input = "Barev";
        $output = "Բարև";
        
        $this->assertEquals($input, $output);
    }
}

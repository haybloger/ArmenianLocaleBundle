<?php

/** 
 * Test Translit Class
**/


namespace Azatyan\ArmenianLocaleBundle\Tests\Services;


class TrasnlitTest extends \PHPUnit_Framework_TestCase
{
    public function testLatinToArmenian()
    {

        $input = "Barev";
        $output = "Բարև";
        // TODO: Implement This
        
        $this->assertEquals($input, $output);
    }
}

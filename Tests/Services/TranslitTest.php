<?php

/**
 *  @author Tigran Azatyan
 */

namespace Azatyan\ArmenianLocaleBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class TrasnlitTest
 * @package Azatyan\ArmenianLocaleBundle\Tests\Services
 */
class TrasnlitTest extends WebTestCase
{

    /**
     *  Check Translit function
     */
    public function testLatinToArmenian()
    {
        $client = static::createClient();
        $container = $client->getContainer();

        $input = "Barev";
        $expected = "Բարև";

        $actual =  $container->get("armenian.locale.translit")->latinToArmenian($input);
        $this->assertEquals($expected, $actual,"Translit Test Failed");
    }
}


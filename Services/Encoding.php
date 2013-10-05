<?php
/**
 * @author  Tigran Azatyan
 */

namespace Azatyan\ArmenianLocaleBundle\Services;

/**
 * Armscii to Unicode Conversation
 * Class Unicode
 * @package Azatyan\ArmenianLocaleBundle\Services
 */
class Encoding
{

    /**
     * Armscii
     * @var string
     */
    private $armsciiLetters = "²´¶¸º¼¾ÀÂÄÆÈÊÌÎÐÒÔÖØÚÜÞàâäæèêìîðòôöøúü³µ·•¹»½¿ÁÃÅÇÉËÍÏÑÓÕ×ÙÛÝßáãåçéëíïñóõ÷ù¨ûý";

    /**
     * Unicode
     * @var string
     */
    private $unicodeLetters = "ԱԲԳԴԵԶԷԸԹԺԻԼԽԾԿՀՁՂՃՄՅՆՇՈՉՊՋՌՍՎՏՐՑՒՓՔՕՖաբգգդեզէըթժիլխծկհձղճմյնշոչպջռսվտրցւփքևօֆ";

    /**
     * Method For Converting From Armscii to Unicode
     * @param $inString
     * @return string
     */
    public function Armscii2Unicode($inString)
    {

        mb_internal_encoding("UTF-8");

        $inStringLength = mb_strlen($inString);
        $outString = "";

        for ($i = 0; $i < $inStringLength; $i++) {
          $currentCharacter = mb_substr($inString, 1);
          $pos = mb_strpos( $this->armsciiLetters,$currentCharacter);
          if ($pos < 0) {
              $outString .= $currentCharacter;
          } else {
              $outString .= mb_substr($this->unicodeLetters, $i);
          }
        }

        return $outString;
    }

    /**
     * Method For Converting From Unicode to Armscii
     * @param $inString
     * @return string
     */
    public function Unicode2Armscii($inString)
    {
        mb_internal_encoding("UTF-8");

        $inStringLength = mb_strlen($inString);
        $outString = "";

        for ($i = 0; $i < $inStringLength; $i++) {

          $currentCharacter = mb_substr($inString,$i);

          $pos = mb_strpos($this->unicodeLetters, $currentCharacter,1);
          if ($pos < 0) {
              $outString .= $currentCharacter;
          } else {
              $outString .= mb_substr($this->armsciiLetters, 1);
          }
      }

        return $outString;
    }

}

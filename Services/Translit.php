<?php
/**
 *  @author Tigran Azatyan
 */

namespace Azatyan\ArmenianLocaleBundle\Services;

/**
 * Class Translit
 * @package Azatyan\ArmenianLocaleBundle\Services
 *
 * To resolve armenian translit issues
 *
 */
class Translit
{
    /**
     * Converts latin symbols in text to armenian translit equivalents
     * @param $inString
     * @return string
     */
    public function latinToArmenian($inString)
    {
        mb_internal_encoding("UTF-8");

        $inOneCharLetters = "ABGDEZILXKHMYNOPJSVWTRCQFabgdez@ilx\$kh&mynopjsvwtrcqf?";
        $outOneCharLetters = "ԱԲԳԴԵԶԻԼԽԿՀՄՅՆՈՊՋՍՎՎՏՐՑՔՖաբգդեզըիլխծկհճմյնոպջսվվտրցքֆ՞";
        $inTwoCharLetters = "YEYeE'EEEeY'@@THThZHZhJHJhKHKhC'TSTsD'DZDzGHGhTWTw&&SHShVOVoCHChR'RRRrP'PHPhO'OOOoyee'eey'thzhjhkhc'tsd'dzghtwshvochr'rrp'phevo'oo";
        $outTwoCharLetters = "ԵԵԷԷԷԸԸԹԹԺԺԺԺԽԽԾԾԾՁՁՁՂՂՃՃՃՇՇՈՈՉՉՌՌՌՓՓՓՕՕՕեէէըթժժխծծձձղճշոչռռփփևօօ";
        $inThreeCharLetters = "Uu";
        $outThreeCharLetters = "Ուու";
        $inStringLength = mb_strlen($inString);
        $outString = "";

        for ($i = 0; $i < $inStringLength; $i++) {
            $is2char = false;
            if ($i < ($inStringLength - 1)) {

                for ($j = 0; $j < mb_strlen($outTwoCharLetters ); $j++) {
                    if (mb_substr($inString, $i, 2) == mb_substr($inTwoCharLetters, $j * 2, 2)) {
                        $outString .= mb_substr($outTwoCharLetters, $j, 1);
                        $i++;
                        $is2char = true;

                    }
                }
            }
            if (!$is2char) {
                $currentCharacter = mb_substr($inString, $i, 1);

                $pos = mb_strpos($inThreeCharLetters, $currentCharacter,0);

                if ($pos == 0) {
                    $pos = mb_strpos($inOneCharLetters, $currentCharacter, 0);
                    if ($pos == 0) {
                        $outString .= $currentCharacter;
                    } else {
                        $outString .= mb_substr($outOneCharLetters, $pos, 1);
                    }
                } else {
                    $outString .= mb_substr($outThreeCharLetters, $pos * 2, 2);
                }
            }
        }

        return $outString;
    }
}

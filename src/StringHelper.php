<?php

namespace Ejklock\BackendChallenge;

class StringHelper
{

    public static function brokeTextInWords(string $text): array
    {
        $resultText = [];
        $word = "";
        for ($i = 0; $i < strlen($text); $i++) {
            $word = $word . trim($text[$i]);
            if (($text[$i] == " ") || $i + 1 == strlen($text)) {
                $resultText[] = $word;
                $word = "";
            }
        }
        return $resultText;
    }
    public static function brokeTextInLines(string $text, int $charsPerLine)
    {

        $words = self::brokeTextInWords($text);
        $textLines = [];
        $lineToInsert = "";

        for ($i = 0; $i < count($words); $i++) {
            $lineToInsert = trim($lineToInsert);
            if (strlen($lineToInsert) + strlen(trim($words[$i])) < $charsPerLine) {
                $lineToInsert = $lineToInsert . " " . trim($words[$i]);
            } else {
                $textLines[] = trim($lineToInsert);
                $lineToInsert = $words[$i];
            }
        }

        if ($lineToInsert != "") {
            $textLines[] = trim($lineToInsert);
        }

        return $textLines;
    }
}

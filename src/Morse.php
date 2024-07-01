<?php

namespace App;

class Morse
{
    const MORSE = [
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    ];


   // Méthode pour convertir une chaîne de code Morse en texte lisible.
   public function convertToLetters(string $morseCode): string
   {
       // Diviser l'entrée en mots (séparés par trois espaces).
       $words = explode('   ', $morseCode);
       $decodedMessage = [];

       // Pour chaque mot, traiter les lettres.
       foreach ($words as $word) {
           // Diviser le mot en lettres (séparées par un espace).
           $letters = explode(' ', $word);
           $decodedWord = '';

           // Pour chaque lettre, la traduire en utilisant la constante MORSE.
           foreach ($letters as $letter) {
               if (isset(self::MORSE[$letter])) {
                   $decodedWord .= self::MORSE[$letter];
               }
           }

           // Ajouter le mot décodé à la liste des mots décodés.
           $decodedMessage[] = $decodedWord;
       }

       // Recomposer les mots traduits pour obtenir la phrase finale.
    //    var_dump($decodedMessage);
       return implode(' ', $decodedMessage);
   }
}


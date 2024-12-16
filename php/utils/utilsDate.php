<?php

/**
 * cette fonction prend une date format machine : '2018-10-04'
 * et me renvoie cette meme date au format lisible humain : '04 October 2018'
 * @param string $date
 * @param ?string $format -> c'est un paramètre facultatif, si non renseignée vaudra 'd F Y'
*/
function getFormattedDate($date, $format = 'd F Y') {

  $timestamp = strtotime($date);
  $formattedDate = date($format, $timestamp);
  
  return $formattedDate;
}
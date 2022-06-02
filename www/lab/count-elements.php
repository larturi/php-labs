<?php 

  // OBJETIVO: Retornar la cantidad de elementos con edad mayor o igual que 50 

  // Trae los datos
  $ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch);
  curl_close($ch);

  $data = json_decode($data, true);

  // Armo un array con los datos
  $split_data = explode(",", $data['data']);

  // Preparo un array para las edades
  $array_ages = array();

  // Recorro el array de datos y guardo en el array de edades si corresponde
  foreach ($split_data as $key => $value) {
    if(substr($value, 0, 4) == ' age') {
        $array_ages[] = intval(substr($value, 5));
    } 
  }

  // Obtengo los elementos con edad mayor o igual que 50
  $array_ages_50_or_more = array_filter($array_ages, function($value) {
    return $value >= 50;
  });

  // Imprimo la cantidad de elementos con edad mayor o igual que 50
  echo count($array_ages_50_or_more);

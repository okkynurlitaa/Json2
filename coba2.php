<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/ec1e7579e43461ed/geolookup/conditions/q/ID/Mugassari.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json-> {'location'}->{'city'};
  $station_id = $parsed_json-> {'current_observation'}->{'station_id'};
  $weather = $parsed_json-> {'current_observation'}->{'weather'};
  $temp = $parsed_json-> {'current_observation'}->{'temp_c'};
  $time = $parsed_json-> {'current_observation'}->{'wind_mph'};
  echo 
  
  "Kode Stasiun $location adalah : ${station_id} </br>
   Cuaca : $weather (Berawan) </br>
   Temperatur Suhu C : $temp <sup>O</sup> C </br>
   Kecepatan Angin : $time \n";
?>

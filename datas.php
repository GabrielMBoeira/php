<?php

//Datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s A');

echo "<hr>";

$date = date('Y-m-d'); //DATE SQL
$datetime = date('Y-m-d H:i:s'); //Datetime SQL

echo $date;
echo "<br>";
echo $datetime;

echo "<hr>";

//TIME

$timex = time();
echo date('d-m-Y', $timex);

echo "<hr>";

//MKTIME -> Datas passadas ou futuras

//$data_pagamento = mktime('H:i:s:m:d:Y');
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);

echo date('d/m - H:i', $data_pagamento); //Formatando datas

echo "<hr>";

//STRTOTIME
$data = '2020-03-20 13:00:02';

$dataFormatada = strtotime($data);

echo date('d/m/y', $dataFormatada);


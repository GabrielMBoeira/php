<?php
include_once 'header.php';
?>

<?php echo "Olá pessoal";?>

<?php
require_once 'footer.php';
?>

<?php
/*
require 'header.php'; <- Interrompe a execução FALHA FATAL (O include mostra somente um warning)
?>

<?php echo "Olá pessoal";?>

<?php
require 'footer.php';

OBS: require_once ou include_once (Verifica se o arquivo já foi incluido, se sim -> Ele inclui somente 1 vez)

*/
?>
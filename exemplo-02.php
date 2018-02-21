<?php

$anoNascimento = 1994;

echo $anoNascimento;
echo "<br/>";

$nome = "Romenigue";

//concatenação

$nomeNascimento = $nome . " " . $anoNascimento;

echo $nomeNascimento;

exit;

unset($anoNascimento);

if(isset($anoNascimento)){
	
	echo $anoNascimento;
}
	


?>
<!-- Array -->
<?php
$nome = array ("Sumare", "SI");
$vetor = array();
$vetor[0] = "Sumare";
$vetor[1] = "Faculdade";

# print_r ($nome);
# print_r($vetor);

# for ($i = 0; $i<2; $i++){
# 	echo $vetor[$i];

for ($i = 0; $i<count($vetor); $i++){
	echo $vetor[$i];
}
?>
<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   if ($sexo == "feminino" && $idade < 25) {
   
      return "Você foi aceita";
   }
   
   else { 
      
      return "Você não foi aceito";}      
   
} 

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
  $decrescente = array($num1, $num2, $num3);
  rsort($decrescente);
 return implode("", $decrescente);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
  $media = ($nota1 + $nota2 + $nota3) / 3;

   if($media <= 7) {

      return " Média $media, você foi reprovado.";
   }

   else {

      return "Média $media, Você foi aprovado!";
}

}
?>

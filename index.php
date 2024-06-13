<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
        
<?php 
$minimo= 1_380.60;
$salario= $_GET['sal'] ?? 0;

?>

<main>

<h1>Infome seu salario</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="sal">Salario (R$)</label>
<input type="number" name="sal" id="idsal" value= "<?=$salario?>" step= "0.01">
<p>Considerando o salario minimo <strong> R$ <?= number_format($minimo, 2, ",",".") ?> </strong> </p>
<input type="submit" value="Calcule">

</form>
    </main>

    <section>
<h2>Resultao Final</h2>

<?php 
$tot = intdiv($salario, $minimo);
$dif = $salario % $minimo;

echo " <p>Quem ganha um salarios minimo de R\$".number_format($salario, 2, ",", ".")."  ganha  $tot salarios minimos +R\$ ". number_format($dif, 2, ",", ".").".</p>";

?>
    </section>
</body>
</html>
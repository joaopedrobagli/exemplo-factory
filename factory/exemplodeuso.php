
<?php
$cliente = new Cliente(new FactoryLanche());
$cliente->main();

$cliente = new Cliente(new FactoryLancheVegetariano());
$cliente->main();
?>

<?php
class Cliente {
    private $factory;

    public function __construct(AbstractFactory $factory) {
        $this->factory = $factory;
    }

    public function main(): void {
        $lanche1 = $this->factory->getLanche("burgerTudo");
        $lanche1->montar();

        $lanche2 = $this->factory->getLanche("burgerSaladaVegetariano");
        $lanche2->montar();
    }
}
?>
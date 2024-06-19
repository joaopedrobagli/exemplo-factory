<?php

interface AbstractFactory {
    public function getLanche($tipoLanche): AbstractLanche;
}


class FactoryLanche implements AbstractFactory {
    public function getLanche($tipoLanche): AbstractLanche {
        if ($tipoLanche === "burgerTudo") {
            return new BurgerTudo();
        } elseif ($tipoLanche === "burgerSalada") {
            return new BurgerSalada();
        } else {
            throw new Exception("Tipo de lanche inválido");
        }
    }
}


class FactoryLancheVegetariano implements AbstractFactory {
    public function getLanche($tipoLanche): AbstractLanche {
        if ($tipoLanche === "burgerTudoVegetariano") {
            return new BurgerTudoVegetariano();
        } elseif ($tipoLanche === "burgerSaladaVegetariano") {
            return new BurgerSaladaVegetariano();
        } else {
            throw new Exception("Tipo de lanche inválido");
        }
    }
}


abstract class AbstractLanche {
    abstract public function montar(): void;
}

class BurgerTudo extends AbstractLanche {
    public function montar(): void {
        echo "Montando um Burger Tudo...\n";
    }
}

class BurgerSalada extends AbstractLanche {
    public function montar(): void {
        echo "Montando um Burger Salada...\n";
    }
}


class BurgerTudoVegetariano extends AbstractLanche {
    public function montar(): void {
        echo "Montando um Burger Tudo Vegetariano...\n";
    }
}


class BurgerSaladaVegetariano extends AbstractLanche {
    public function montar(): void {
        echo "Montando um Burger Salada Vegetariano...\n";
    }
}


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



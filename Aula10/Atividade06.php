<?php

class Login {
    public function getNome() {
        return "🔐 Módulo de Login";
    }
}

class Dashboard {
    public function getNome() {
        return "📊 Módulo de Dashboard";
    }
}

class Config {
    public function getNome() {
        return "⚙️ Módulo de Configurações";
    }
}

class Aplicativo {
    private $modulos = [];

    public function __construct() {
        $this->modulos[] = new Login();
        $this->modulos[] = new Dashboard();
        $this->modulos[] = new Config();
        echo "📱 Aplicativo iniciado!<br>";
    }

    public function listarModulos() {
        echo "🧩 Módulos ativos:<br>";
        foreach ($this->modulos as $modulo) {
            echo "- " . $modulo->getNome() . "<br>";
        }
    }
}

$app = new Aplicativo();
$app->listarModulos();

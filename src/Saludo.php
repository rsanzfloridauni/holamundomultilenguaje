<?php

namespace HolaMundoMultilenguaje;

class Saludo
{
    private $saludos;

    public function __construct()
    {
        $this->saludos = [
            "es" => ["saludo" => "¡Hola Mundo!", "codigo" => "ES"], // Español
            "zh" => ["saludo" => "你好，世界！", "codigo" => "CN"], // Chino
            "en" => ["saludo" => "Hello, World!", "codigo" => "US"], // Inglés
            "hi" => ["saludo" => "नमस्ते दुनिया!", "codigo" => "IN"], // Hindi
            "ar" => ["saludo" => "مرحبا بالعالم!", "codigo" => "AR"], // Árabe
            "pt" => ["saludo" => "Olá Mundo!", "codigo" => "PT"], // Portugués
            "ru" => ["saludo" => "Привет, мир!", "codigo" => "RU"], // Ruso
            "ja" => ["saludo" => "こんにちは、世界！", "codigo" => "JP"], // Japonés
            "de" => ["saludo" => "Hallo Welt!", "codigo" => "DE"], // Alemán
            "fr" => ["saludo" => "Bonjour le monde!", "codigo" => "FR"], // Francés
        ];
    }

    public function generarSaludoAleatorio()
    {
        $indice = array_rand($this->saludos);
        return $this->saludos[$indice];
    }
}

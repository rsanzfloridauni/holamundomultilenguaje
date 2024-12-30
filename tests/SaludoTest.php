<?php

use PHPUnit\Framework\TestCase;
use HolaMundoMultilenguaje\Saludo;

class SaludoTest extends TestCase
{
    public function testGenerarSaludoAleatorio()
    {
        $saludo = new Saludo();
        $resultado = $saludo->generarSaludoAleatorio();
        
        // Verifica que el resultado es un string
        $this->assertIsString($resultado['saludo']);
        
        // Verifica que el resultado contiene un saludo válido
        $this->assertNotEmpty($resultado['saludo']);
        
        // Verifica que el código también es un string
        $this->assertIsString($resultado['codigo']);
        
        // Verifica que el código no esté vacío
        $this->assertNotEmpty($resultado['codigo']);
    }
}

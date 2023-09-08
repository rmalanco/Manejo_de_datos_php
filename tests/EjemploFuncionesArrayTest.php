<?php

use PHPUnit\Framework\TestCase;
use App\EjemploFuncionesArray;

class EjemploFuncionesArrayTest extends TestCase
{
    public function testArrayLenguajes()
    {
        $lenguajes = new EjemploFuncionesArray();
        // Prueba la función arrayLenguajes
        $result = $lenguajes->arrayLenguajes('PHP', 'php');
        $this->assertEquals(['PHP' => 'php'], $result);
        // Agrega más lenguajes
        $result = $lenguajes->arrayLenguajes('JavaScript', 'js');
        $this->assertEquals(['PHP' => 'php', 'JavaScript' => 'js'], $result);

        $result = $lenguajes->arrayLenguajes('Python', 'py');
        $this->assertEquals(['PHP' => 'php', 'JavaScript' => 'js', 'Python' => 'py'], $result);

        $result = $lenguajes->arrayLenguajes('Java', 'java');
        $this->assertEquals(['PHP' => 'php', 'JavaScript' => 'js', 'Python' => 'py', 'Java' => 'java'], $result);
    }

    public function testOrdenarLenguajes()
    {
        $lenguajes = new EjemploFuncionesArray();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');
        $lenguajes->arrayLenguajes('Python', 'py');
        $lenguajes->arrayLenguajes('Java', 'java');

        // Prueba la función ordenarLenguajes
        $result = $lenguajes->ordenarLenguajes();
        $this->assertEquals(['0' => 'java', '1' => 'js', '2' => 'php', '3' => 'py'], $result);
    }

    public function testOrdenarLenguajesInverso()
    {
        $lenguajes = new EjemploFuncionesArray();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');
        $lenguajes->arrayLenguajes('Python', 'py');
        $lenguajes->arrayLenguajes('Java', 'java');

        // Prueba la función ordenarLenguajesInverso
        $result = $lenguajes->ordenarLenguajesInverso();
        $this->assertEquals(['0' => 'py', '1' => 'php', '2' => 'js', '3' => 'java'], $result);
    }

    public function testOrdenarLenguajesPorClave()
    {
        $lenguajes = new EjemploFuncionesArray();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');
        $lenguajes->arrayLenguajes('Python', 'py');
        $lenguajes->arrayLenguajes('Java', 'java');

        // Prueba la función ordenarLenguajesPorClave
        $result = $lenguajes->ordenarLenguajesPorClave();
        $this->assertEquals(['Java' => 'java', 'JavaScript' => 'js', 'PHP' => 'php', 'Python' => 'py'], $result);
    }
}
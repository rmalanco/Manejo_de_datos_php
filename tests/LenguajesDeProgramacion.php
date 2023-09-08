<?php

use PHPUnit\Framework\TestCase;
use App\LenguajesDeProgramacion;

class LenguajesDeProgramacionTest extends TestCase
{
    public function test_arrayLenguajes()
    {
        $lenguajes = new LenguajesDeProgramacion();

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

    public function test_upperCase()
    {
        $lenguajes = new LenguajesDeProgramacion();

        // Prueba la función upperCase
        $result = $lenguajes->upperCase('PHP', 'php');
        $this->assertEquals('PHP: php <br>', $result);

        // Prueba con otro lenguaje
        $result = $lenguajes->upperCase('JavaScript', 'js');
        $this->assertEquals('JAVASCRIPT: js <br>', $result);
    }

    public function test_getters_and_setters()
    {
        $lenguajes = new LenguajesDeProgramacion();

        // Prueba los getters y setters
        $lenguajes->setLenguaje('PHP');
        $lenguajes->setExtension('php');

        $this->assertEquals('PHP', $lenguajes->getLenguaje());
        $this->assertEquals('php', $lenguajes->getExtension());
    }

    public function test_convertirValoresAMayusculas()
    {
        $lenguajes = new LenguajesDeProgramacion();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');

        $lenguajesMayusculas = $lenguajes->convertirValoresAMayusculas();

        echo '<pre>';
        var_dump($lenguajesMayusculas);
        echo '</pre>';

        $this->assertEquals([
            'PHP' => 'PHP: php <br>',
            'JavaScript' => 'JAVASCRIPT: js <br>'
        ], $lenguajesMayusculas);
    }

    public function test_buscarLenguaje()
    {
        $lenguajes = new LenguajesDeProgramacion();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');

        $lenguaje = $lenguajes->buscarLenguaje('PHP');

        $this->assertEquals('php', $lenguaje);
    }

    public function test_buscarExtension()
    {
        $lenguajes = new LenguajesDeProgramacion();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');

        $extension = $lenguajes->buscarExtension('js');

        $this->assertEquals('JavaScript', $extension);
    }

    public function test_obtenerExtensiones()
    {
        $lenguajes = new LenguajesDeProgramacion();
        $lenguajes->arrayLenguajes('PHP', 'php');
        $lenguajes->arrayLenguajes('JavaScript', 'js');

        $extensiones = $lenguajes->obtenerExtensiones();

        $this->assertEquals(['php', 'js'], $extensiones);
    }
}
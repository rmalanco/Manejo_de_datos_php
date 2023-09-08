<?php

namespace App;

use Exception;

class LenguajesDeProgramacion
{
    private $lenguaje;
    private $extension;
    private $lenguajeyExtension = [];

    public function arrayLenguajes($lenguaje, $extension)
    {
        $this->lenguaje = $lenguaje;
        $this->extension = $extension;
        $this->lenguajeyExtension[$lenguaje] = $extension;
        return $this->lenguajeyExtension;
    }

    public function upperCase($lenguaje, $extension)
    {
        return strtoupper($lenguaje) . ": $extension <br>";
    }

    // array_walk
    public function convertirValoresAMayusculas()
    {
        $lenguajesMayusculas = $this->lenguajeyExtension;

        array_walk($lenguajesMayusculas, function (&$valor, $lenguaje) {
            $valor = $this->upperCase($lenguaje, $valor);
        });

        return $lenguajesMayusculas;
    }

    // array_key_exists
    public function buscarLenguaje($lenguaje)
    {
        if (array_key_exists($lenguaje, $this->lenguajeyExtension)) {
            return $this->lenguajeyExtension[$lenguaje];
        } else {
            throw new Exception('Lenguaje no encontrado');
        }
    }

    // in_array
    public function buscarExtension($extension)
    {
        if (in_array($extension, $this->lenguajeyExtension)) {
            return array_search($extension, $this->lenguajeyExtension);
        } else {
            throw new Exception('Extensión no encontrada');
        }
    }

    // array_values
    public function obtenerExtensiones()
    {
        return array_values($this->lenguajeyExtension);
    }

    public function getLenguajeyExtension()
    {
        return $this->lenguajeyExtension;
    }

    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;
        return $this;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }
}
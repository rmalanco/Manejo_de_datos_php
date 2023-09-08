<?php

namespace App;

class EjemploFuncionesArray
{
    private $lenguaje;
    private $extension;
    private $lenguajeyExtension = [];

    /**
     * Agrega un lenguaje y su extensión al array $lenguajeyExtension.
     *
     * @param string $lenguaje   El nombre del lenguaje de programación.
     * @param string $extension  La extensión de archivo asociada al lenguaje.
     * @return array            El array actualizado con el nuevo lenguaje y extensión.
     */
    public function arrayLenguajes($lenguaje, $extension)
    {
        $this->lenguaje = $lenguaje;
        $this->extension = $extension;
        $this->lenguajeyExtension[$lenguaje] = $extension;
        return $this->lenguajeyExtension;
    }

    /**
     * Ordena los elementos del array $lenguajeyExtension en orden ascendente.
     *
     * @return array  El array ordenado.
     */
    public function ordenarLenguajes()
    {
        $lenguajes = $this->lenguajeyExtension;
        sort($lenguajes);
        return $lenguajes;
    }

    /**
     * Ordena los elementos del array $lenguajeyExtension en orden descendente.
     *
     * @return array  El array ordenado en orden inverso.
     */
    public function ordenarLenguajesInverso()
    {
        $lenguajes = $this->lenguajeyExtension;
        rsort($lenguajes);
        return $lenguajes;
    }

    /**
     * Ordena los elementos del array $lenguajeyExtension por clave (nombre del lenguaje).
     *
     * @return array  El array ordenado por clave.
     */
    public function ordenarLenguajesPorClave()
    {
        $lenguajes = $this->lenguajeyExtension;
        ksort($lenguajes);
        return $lenguajes;
    }

    /**
     * Ordena los elementos del array $lenguajeyExtension por clave (nombre del lenguaje) en orden inverso.
     *
     * @return array  El array ordenado por clave en orden inverso.
     */
    public function ordenarLenguajesPorClaveInverso()
    {
        $lenguajes = $this->lenguajeyExtension;
        krsort($lenguajes);
        return $lenguajes;
    }

    /**
     * Extrae una porción del array $lenguajeyExtension.
     * @param int $offset  El índice del array a partir del cual se extraerán los elementos.
     * @param int $length  El número de elementos a extraer.
     * @param bool $preserve_keys  Indica si se deben preservar las claves del array.
     * @return array  El array con los elementos extraídos.
     */
    public function extraerLenguajes($offset, $length, $preserve_keys)
    {
        $lenguajes = $this->lenguajeyExtension;
        $lenguajes = array_slice($lenguajes, $offset, $length, $preserve_keys);
        return $lenguajes;
    }

    /**
     * Divide el array $lenguajeyExtension en arrays más pequeños.
     * @param int $size  El tamaño de cada array resultante.
     * @param bool $preserve_keys  Indica si se deben preservar las claves del array.
     * @return array  El array con los elementos extraídos.
     */
    public function dividirLenguajes($size, $preserve_keys)
    {
        $lenguajes = $this->lenguajeyExtension;
        $lenguajes = array_chunk($lenguajes, $size, $preserve_keys);
        return $lenguajes;
    }

    /**
     * Extrae el primer elemento del array $lenguajeyExtension.
     * @return array  El array con el primer elemento extraído.
     */
    public function extraerPrimerLenguaje()
    {
        $lenguajes = $this->lenguajeyExtension;
        $lenguajes = array_shift($lenguajes);
        return $lenguajes;
    }

    /**
     * Extrae el último elemento del array $lenguajeyExtension.
     * @return array  El array con el último elemento extraído.
     */
    public function extraerUltimoLenguaje()
    {
        $lenguajes = $this->lenguajeyExtension;
        $lenguajes = array_pop($lenguajes);
        return $lenguajes;
    }

    /**
     * Inserta uno o más elementos al inicio del array $lenguajeyExtension.
     * @param string $lenguaje   El nombre del lenguaje de programación.
     * @param string $extension  La extensión de archivo asociada al lenguaje.
     * @return array  El array con los elementos insertados.
     */
    public function insertarLenguajeInicio($lenguaje, $extension)
    {
        $lenguajes = $this->lenguajeyExtension;
        array_unshift($lenguajes, $lenguaje, $extension);
        return $lenguajes;
    }

    /**
     * Inserta uno o más elementos al final del array $lenguajeyExtension.
     * @param string $lenguaje   El nombre del lenguaje de programación.
     * @param string $extension  La extensión de archivo asociada al lenguaje.
     * @return array  El array con los elementos insertados.
     */
    public function insertarLenguajeFinal($lenguaje, $extension)
    {
        $lenguajes = $this->lenguajeyExtension;
        array_push($lenguajes, $lenguaje, $extension);
        return $lenguajes;
    }

    /**
     * Intercambia todas las claves de $lenguajeyExtension por sus valores asociados.
     * @return array  El array con las claves y valores intercambiados.
     */
    public function intercambiarClavesValores()
    {
        $lenguajes = $this->lenguajeyExtension;
        $lenguajes = array_flip($lenguajes);
        return $lenguajes;
    }
}
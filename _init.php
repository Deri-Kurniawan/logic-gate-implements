<?php

/**
 * LOGIC GATE AND TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_AND(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE AND : $firstBool + $secondBool = ";
    echo ($firstBool & $secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE OR TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_OR(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE OR : $firstBool + $secondBool = ";
    echo ($firstBool | $secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE NOT TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_NOT($data)
{
    $text = "LOGIC GATE NOT : $data = ";
    echo (!$data) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE NAND TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_NAND(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE NAND : $firstBool + $secondBool = ";
    echo (!$firstBool & !$secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE NOR TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_NOR(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE NOR : $firstBool + $secondBool = ";
    echo (!$firstBool & !$secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE XOR TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_XOR(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE XOR : $firstBool + $secondBool = ";
    echo ($firstBool != $secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * LOGIC GATE XNOR TESTER
 * Hanya Menerima Boolean dengan int (1 dan 0)
 */
function logicGate_XNOR(int $firstBool, int $secondBool)
{
    $text = "LOGIC GATE XNOR : $firstBool + $secondBool = ";
    echo ($firstBool == $secondBool) ? $text . 1 : $text . 0;
    br();
}

/**
 * Break Line
 * @return String break line
 */
function br()
{
    echo "<br>";
}
/**
 * Membuat title
 */
function title()
{
    echo "<h1 style='text-align:center'>Implementasi Gerbang Logika Menggunakan Bahasa Pemrograman PHP</h1>";
}
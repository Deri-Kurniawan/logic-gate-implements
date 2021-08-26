<?php

/** 
 * Implementasi Gerbang Logika Menggunakan Bahasa Pemrograman PHP
 * 
 * @author Deri Kurniawan\
 * @version 1.0.0
 * 
 *  Github : https://github.com/deri-kurniawan
 * 
 *  Note   : Fungsi Logic Gate Yang Dibuat,
 *           Hanya Menerima Boolean dengan int 
 *           (1 untuk true dan 0 untuk false)
 */

/**
 * Fungsi yang tersedia : 
 *  - AND   : logicGate_AND($1, $2)
 *  - OR    : logicGate_OR($1, $2)
 *  - NOT   : logicGate_NOT($1)
 *  - NAND  : logicGate_NAND($1, $2)
 *  - NOR   : logicGate_NOR($1, $2)
 *  - XOR   : logicGate_XOR($1, $2)
 *  - XNOR  : logicGate_XNOR($1, $2)
 * 
 * Informasi lengkap mengenai gerbang logika :
 * @link https://en.wikipedia.org/wiki/Logic_gate
 */

// jangan hapus kode ini
require_once './_init.php';
title();

// ----- Area Uji Coba ------

// Percobaan Menggunakan Gerbang Logika AND
logicGate_AND(1, 1);
logicGate_AND(1, 0);
logicGate_AND(0, 1);
logicGate_AND(0, 0);
br();

// Percobaan Menggunakan Gerbang Logika OR
logicGate_OR(1, 1);
logicGate_OR(1, 0);
logicGate_OR(0, 1);
logicGate_OR(0, 0);
br();

// Percobaan Menggunakan Gerbang Logika NOT
logicGate_NOT(1);
logicGate_NOT(0);
br();

// Percobaan Menggunakan Gerbang Logika NAND
logicGate_NAND(1, 1);
logicGate_NAND(1, 0);
logicGate_NAND(0, 1);
logicGate_NAND(0, 0);
br();

// Percobaan Menggunakan Gerbang Logika NOR
logicGate_NOR(1, 1);
logicGate_NOR(1, 0);
logicGate_NOR(0, 1);
logicGate_NOR(0, 0);
br();

// Percobaan Menggunakan Gerbang Logika XOR
logicGate_XOR(1, 1);
logicGate_XOR(1, 0);
logicGate_XOR(0, 1);
logicGate_XOR(0, 0);
br();

// Percobaan Menggunakan Gerbang Logika XNOR
logicGate_XNOR(1, 1);
logicGate_XNOR(1, 0);
logicGate_XNOR(0, 1);
logicGate_XNOR(0, 1);
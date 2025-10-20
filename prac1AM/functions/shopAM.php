<?php
$productos = [
    'prod1' => [
    'nombre' => 'portátil gaming',
    'precio' => 899.99,
    'stock' => 15,
    'categoria' => 'electrónica'
    ],
    'prod2' => [
    'nombre' => 'mesa escritorio',
    'precio' => 120.50,
    'stock' => 8,
    'categoria' => 'hogar'
    ],
    'prod3' => [
    'nombre' => 'ratón inalámbrico',
    'precio' => 25.99,
    'stock' => 0,
    'categoria' => 'electrónica'
    ]
];

$productosConDescuento = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica',
        'descuento' => 10 // 10% descuento
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
        // sin descuento
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica',
        'descuento' => 15 // 15% descuento
    ]
];
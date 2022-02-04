<?php
function price_transform($price)
{
    $price_ceiled = ceil($price);
    if ($price_ceiled >= 1000) {
        return number_format($price_ceiled, 0, '', ' ') . ' ' . '₽';
    } else {
        return $price_ceiled . ' ' . '₽';
    }
}

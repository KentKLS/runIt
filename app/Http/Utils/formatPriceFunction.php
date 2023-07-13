<?php
function formatPrice($price): string
{
    $formatedPrice = number_format($price / 100, 2) . "€";
    return $formatedPrice;
};

<?php

function recorder($origen)
{
    $ultimoMov = [];
    $ultimoMov[0] = getdate();
    $ultimoMov[1] = $origen;

    return $ultimoMov;
}


 ?>

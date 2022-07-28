<?php

function calc_cal($total_meals) 
{
    return '摂取カロリー合計は' . array_sum($total_meals) . 'Kcalです';
}

<?php

function pre($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * 
 */
// echo strtotime("-3 day");
// echo '<br>';
// echo strtotime(date('Y-m-d',time()));

echo date("Y-m-d",strtotime("+213 day"));


echo '提交github测试';

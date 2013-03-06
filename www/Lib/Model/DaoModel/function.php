<?php
/*=============================================================================
#     FileName: function.php
#   CreateTime: 2013-01-05 16:04:24 
#       Author: yifeng@leju.com
#   LastChange: 2013-01-05 16:04:24
=============================================================================*/
echo 1211;


//PUT THE PUBLIC FUNCTIONS HERE :) 


//过滤变量

function filter_str($str)
{
    Return filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
}

function filter_int($str)
{
    Return filter_var($str, FILTER_VALIDATE_INT);
}

function filter_float($str)
{
    Return filter_var($str, FILTER_VALIDATE_FLOAT);
}

function filter_email($str)
{
    Return filter_var($str, FILTER_VALIDATE_EMAIL);
}

function filter_url($str)
{
    Return filter_var($str, FILTER_VALIDATE_URL);
}


$str = 123;
echo 111;
echo filter_email($str);



?>

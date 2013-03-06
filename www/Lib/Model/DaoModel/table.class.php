<?php

/**
 * 
 **/
class Table
{
    
    function __construct(argument)
    {
        // code...
    }

    //数据辅助函数

    final public function fill($para , &$data , $key)
    {
        if (isset($para[$key]))  $data[$key] = $para[$key];
    }

    public function fill_str($para , &$data , $key)
    {
        if (isset($para[$key])) $data[$key] = filter_str($para[$key]);
    }

    final public function fill_int($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = $para[$key] === '' ? '' : (int) ($para[$key]);
    }

    final public function fill_email($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = filter_email($para[$key]);
    }

    final public function fill_md5($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = md5(trim($para[$key]));
    }

    final public function fill_date($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = get_date($para[$key], 'Y-m-d');
    }

    final public function fill_datetime($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = get_date($para[$key]);
    }

    final public function fill_url($para, &$data, $key)
    {
        if (isset($para[$key])) $data[$key] = filter_url($para[$key]);
    }






}



?>

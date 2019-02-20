<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class pdf2 {
    
    function pdf2()
    {
        $CI = & get_instance();
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
             $param = new mPDF('en-GB', 'Letter', '0', '10', '10', '10', '10', '6', '3', 'P');
        }
        return  $param; 
    }
    function loads($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
            $param = new mPDF('en-GB', 'Legal', '0', '3', '3', '3', '3', '6', '3', 'P');
        }
        return  $param; 
    }
    
    function landscape($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
            $param = new mPDF('en-GB', 'Legal', '0', '10', '10', '10', '10', '6', '3', 'L');
        }
        return  $param; 
    } 
    function legal($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
             $param = new mPDF('en-GB', 'Legal', '0', '10', '10', '10', '10', '6', '3', 'P');
        }
        return  $param; 
    }
}
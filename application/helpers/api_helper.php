<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function get_operadores(){
    $CI =& get_instance();
    return $CI->db->get('operador')->result();
}

function post_msj($data){
    $CI =& get_instance();
    $CI->db->insert('mensajecobro',$data);
}

function post_nws($data){
    $CI =& get_instance();
    $CI->db->insert('nuevows',$data);
    return $CI->db->insert_id();
}

function post_sms($data){
    $CI =& get_instance();
    $CI->db->insert('sms',$data);
}
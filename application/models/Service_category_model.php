<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service_category_model extends CI_Model
{

    public $_table_name = 'service_category';
    public $id    = 'id_service_category';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        return $this->db->get($this->_table_name)->result();
    }
}

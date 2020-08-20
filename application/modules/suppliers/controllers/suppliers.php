<?php
class Suppliers extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'Suppliers';
        $page = 'suppliers/v_content';
        $js = NULL;
        echo modules::run('template/backend/loadview', $data, $page,$js);
    }
}
?>

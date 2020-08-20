<?php
class Sales extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'Sales';
        $page = 'sales/v_content';
        $js = NULL;
        echo modules::run('template/backend/loadview', $data, $page,$js);
    }
}
?>

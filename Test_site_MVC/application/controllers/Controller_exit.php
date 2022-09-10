<?php
class Controller_exit extends Controller
{
    function action_index()
    {

        //$this->view->generate_panel('panel/panel_main.php', 'main_view.php');
        include_once(SITE_ROOT."autorization/exit.php");
        //header(SITE_ROOT);
        //$this->view->generate('main_view.php', 'template_view.php');

    }
}
/**
 * Created by JetBrains PhpStorm.
 * User: Malutka
 * Date: 30.01.13
 * Time: 12:35
 * To change this template use File | Settings | File Templates.
 */
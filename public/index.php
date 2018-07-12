<?php

require('../private/smarty/Smarty.class.php');
require('../private/model.php');
require('../private/controller.php');
require ('../private/views/navbar.tpl');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE',5);

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm']. '%' : '%';
if (isset($_POST['submit_login'])){
    login_action();
}

switch ($page) {
    case 'home':homepage_action(); break;
    case 'news': news_action(); break;
    case 'contact':contact_action(); break;
    case 'admin' : admin_action(); break;
    case 'login' : login_page_action(); break;
    default: page_not_found_action(); break;
}

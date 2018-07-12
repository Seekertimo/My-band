<?php

function homepage_action() {
    global $smarty;
    $articles = get_articles();
    $smarty->assign('articles',$articles);
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action() {
    global $smarty;
    $smarty->display('notfound.tpl');
}

function contact_action() {
global $smarty;

// Model



//View
$smarty->display('header.tpl');
$smarty->display('contact.tpl');
$smarty->display('footer.tpl');
}

function news_action() {
    global $smarty, $pageno, $page, $searchterm;
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page',$pageno);
    $smarty->assign('number_of_pages', $number_of_pages);
    $smarty->assign('articles',$articles);
    //View
//    $smarty->display('header.tpl');
//    $smarty->display('news.tpl');
//    $smarty->display('footer.tpl');
//
    display_page($page);
}

function display_page($page) {
    global $smarty;
    $smarty->assign('title',strtoupper($page));

    $smarty->display('header.tpl');
    $smarty->display('menu.tpl');
   $smarty->display($page . '.tpl');
    $smarty->display('footer.tpl');
}



 function admin_action(){

    global $smarty;


    if ($_SESSION['loggedin'] == 'loggedin'){
        global $smarty;
//        $articles1 = get_some_articles();
//        $smarty->assign('articles',$articles1);


        $smarty->display('header.tpl');
        $smarty->display('admin.tpl');
        $smarty->display('footer.tpl');

    }else{
        $smarty->display('login.tpl');


    }

}

function login_page_action(){
    global $smarty;
    //model
    //views
    $smarty->display('header.tpl');
    $smarty->display('login.tpl');
    $smarty->display('footer.tpl');
}

function login_action(){
    check_login();
}
<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

require 'libs/function.php';

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Within Temptation');
// Toon de template: output html
$templateParser->display('head.tpl');



$page = isset($_GET['page']) ? $_GET['page'] : 'news';
$templateParser->assign('current_pag', $page);
$templateParser->display('header.tpl');


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page){
    case 'about':
        include 'views/about.tpl';
        break;
    case 'discography':
        include 'views/discography.tpl';
        break;
    case 'bandmembers':
        include 'views/bandmembers.tpl';
        break;
    case 'tourdates':
        include 'views/tourdates.tpl';
        break;
    case 'tourvlogs':
        include 'views/tourvlogs.tpl';
        break;
    case 'news':
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'models/select_newsarticles.php';
        $templateParser->assign('result', $result);
        $templateParser->display('newsarticles.tpl');
        break;
    case 'contact':
        include 'views/contact.tpl';
        break;
    case 'search':
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        $search_str = isset($_POST['search_str'])? $_POST['search_str'] : "";
        require 'models/search_newsarticles.php';
        $templateParser->assign('result',$result);
        $templateParser->display('searchresult.tpl');
        break;
    default:
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'models/select_newsarticles.php';
        $templateParser->assign('result', $result);
        $templateParser->display('newsarticles.tpl');
        break;

}

$templateParser->display('footer.tpl');
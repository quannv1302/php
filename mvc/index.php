<?php
require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';


$url = isset($_GET['r']) == true ? $_GET['r'] : '/';

switch ($url) {
    case '/':
        $ctl = new HomeController();
        $ctl->index();
        break;
    case 'product':
        $ctl = new ProductController();
        $ctl->index();
        break;
    case 'admin/add-product':
        $ctl = new ProductController();
        $ctl->add();
        break;
    case 'admin/add-product/save-add':
        $ctl = new ProductController();
        $ctl->saveAdd();
        break;
    case 'admin/update-product':
        $ctl = new ProductController();
        $ctl->update();
        break;
    case 'admin/update-product/save-update':
        $ctl = new ProductController();
        $ctl->saveUpdate();
        break;
    case 'admin/remove-product':
        $ctl = new ProductController();
        $ctl->remove();
        break;
    
    default:
        echo "<h1>Not found!</h1>";
        break;
}



?>
<?php
const C_FISH = '/../controller/FISH/fish.php';
const FISH = "/../view/F/assets/fish.png";
const FISH_CSS = "/../view/F/assets/fish.css";

require_once __DIR__ . C_FISH;                                                              
$controllerName = $_GET['c'] ?? 'fish';                                                 
$action         = $_GET['a'] ?? 'index';                                        

switch ($controllerName) {
    case 'fish':
    default:
        $controller = new fish();
        break;
}
if (!method_exists($controller, $action)) {                                                         
    $action = 'index';                                                                  
}
$controller->$action();
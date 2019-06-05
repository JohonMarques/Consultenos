<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

//if (Configure::read('debug')) :
//    $this->layout = 'dev_error';
//
//    $this->assign('title', $message);
//    $this->assign('templateName', 'error500.ctp');

?>

<h1 class="eltdf-404-title">
    500 </h1>

<h2 class="eltdf-404-subtitle" style="font-family: Alex Brush,cursive;">
    Pagina nao encontrada </h2>

<p class="eltdf-404-text" style=" color: #ffffff">
    Ops...Ocorreu um erro, entre em contato com o suporte ou clique em "voltar" para retornar a pagina anterior					</p>
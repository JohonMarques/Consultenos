<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        Algo deu errado...
    </title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="/images/favicon.ico" rel="apple-touch-icon" type="image/ico" />
    <link rel='stylesheet' id='gourmand_elated_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C600%2C700%7CAlex+Brush%3A300%2C400%2C500%2C600%2C700&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all' />

    <?= $this->Html->css([
        'site/d8455',
        'site/rbt-modules',
    ]) ?>



    <?= $this->fetch('meta') ?>

    <?= $this->fetch('script') ?>
</head>
<body style="background-image: url('/images/error-background-1.jpg')">

<div class="eltdf-wrapper">
    <div class="eltdf-wrapper-inner">
        <div class="eltdf-content" style="margin-top: -94px; text-align: center; background-color: unset ">
            <div class="eltdf-content-inner">
                <div class="eltdf-page-not-found">
                    <?= $this->Flash->render() ?>

                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="footer" style="font-size: 25px">
        <?= $this->Html->link(__('Voltar'), 'javascript:history.back()') ?>
    </div>

</body>
</html>

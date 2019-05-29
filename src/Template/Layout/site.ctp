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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<?php echo $this->element('site/head_site'); ?>

<body class="home page-template page-template-full-width page-template-full-width-php page page-id-6 eltd-core-1.0 eltdf-restaurant-1.0 gourmand-ver-1.0 eltdf-grid-1300 eltdf-light-header eltdf-sticky-header-on-scroll-down-up eltdf-dropdown-animate-height eltdf-header-standard eltdf-menu-area-shadow-disable eltdf-menu-area-in-grid-shadow-disable eltdf-menu-area-border-disable eltdf-menu-area-in-grid-border-disable eltdf-logo-area-border-disable eltdf-header-vertical-shadow-disable eltdf-header-vertical-border-disable eltdf-side-menu-slide-from-right eltdf-woocommerce-columns-3 eltdf-woo-small-space eltdf-woo-pl-info-below-image eltdf-woo-single-thumb-below-image eltdf-woo-single-has-pretty-photo eltdf-default-mobile-header eltdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-5.4.5 vc_responsive"
      itemscope itemtype="http://schema.org/WebPage">



<div class="eltdf-wrapper">
    <div class="eltdf-wrapper-inner">

        <header class="eltdf-page-header" style="background-color: #0e0e0e">

            <div class="eltdf-menu-area eltdf-menu-center">

                <div class="eltdf-vertical-align-containers">
                    <div class="eltdf-position-left">
                        <div class="eltdf-position-left-inner">

                            <div class="eltdf-logo-wrapper">
                                <a itemprop="url" href="/" style="height: 68px; width: 60px;">
                                    <img itemprop="image" class="eltdf-normal-logo" src="/images/brasao.svg"
                                         width="336" height="37" alt="logo"/>
                                    <img itemprop="image" class="eltdf-dark-logo" src="/images/brasao.svg"
                                         width="336" height="37" alt="dark logo"/> <img itemprop="image"
                                                                                        class="eltdf-light-logo"
                                                                                        src="/images/brasao.svg"
                                                                                        width="336" height="37"
                                                                                        alt="light logo"/> </a>
                            </div>

                        </div>
                    </div>
                    <div class="eltdf-position-center">
                        <div class="eltdf-position-center-inner">

                            <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
                                <ul id="menu-main-menu" class="clearfix">
                                    <li id="nav-menu-item-549"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow">
                                        <a href="/" class=" current "><span class="item_outer"><span class="item_text">Home</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    </li>
                                    <li id="nav-menu-item-550"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="/#Missao" class=""><span class="item_outer"><span class="item_text">Missão</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                    </li>
                                    <li id="nav-menu-item-550"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="<?= $this->Url->build("/equipe") ?>" class=""><span class="item_outer"><span class="item_text">Equipe</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                    </li>
                                    <li id="nav-menu-item-550"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="#" class=""><span class="item_outer"><span class="item_text">Quem atendemos</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                    </li>
                                    <li id="nav-menu-item-551"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="" class=""><span class="item_outer"><span
                                                        class="item_text">Serviços</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                        <div class="second">
                                            <div class="inner">
                                                <ul>
                                                    <?php foreach ($categories as $category): ?>
                                                        <li id="nav-menu-item-1148"
                                                            class="menu-item menu-item-type-custom
                                                        menu-item-object-custom menu-item-has-children sub">
                                                            <a href="" class="">
                                                            <span class="item_outer">
                                                                <span class="item_text"><?php echo $category->name ?></span>
                                                            </span>
                                                            </a>

                                                            <ul>
                                                                <?php foreach ($category['staffs'] as $staff): ?>
                                                                    <li id="nav-menu-item-1807"
                                                                        class="menu-item menu-item-type-post_type
                                                                 menu-item-object-page "><a
                                                                                href="<?= $this->Url->build("servicos/{$staff->id}/cargos") ?>"
                                                                                class="">
                                                                    <span class="item_outer">
                                                                    <span class="item_text"><?php echo $staff->staff ?></span></span></a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>

                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li id="nav-menu-item-553"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="#" class=""><span class="item_outer"><span
                                                        class="item_text">Portfolio</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                        <div class="second">
                                            <div class="inner">
                                                <ul>
                                                    <li id="nav-menu-item-559"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href=""
                                                           class=""><span class="item_outer"><span class="item_text">Product List</span></span></a>
                                                    </li>
                                                    <li id="nav-menu-item-1439"
                                                        class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                        <a href=""
                                                           class=""><span class="item_outer"><span class="item_text">Product Single</span></span></a>
                                                    </li>
                                                    <li id="nav-menu-item-1260"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub">
                                                        <a href="#" class=""><span class="item_outer"><span
                                                                        class="item_text">Layouts</span></span></a>
                                                        <ul>
                                                            <li id="nav-menu-item-1264"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Three Columns Grid</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1265"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Three Columns Wide</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1262"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Four Columns Grid</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1263"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Four Columns Wide</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1261"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Five Columns Wide</span></span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="nav-menu-item-1392"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub">
                                                        <a href="#" class=""><span class="item_outer"><span
                                                                        class="item_text">Pages</span></span></a>
                                                        <ul>
                                                            <li id="nav-menu-item-1389"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Cart</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1438"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">My Account</span></span></a>
                                                            </li>
                                                            <li id="nav-menu-item-1388"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                <a href=""
                                                                   class=""><span class="item_outer"><span
                                                                                class="item_text">Checkout</span></span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="nav-menu-item-554"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                        <a href="" class=""><span class="item_outer"><span
                                                        class="item_text">Contato</span><i
                                                        class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                        <div class="second">
                                            <div class="inner">
                                                <ul>
                                                    <li id="nav-menu-item-751"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="<?= $this->Url->build("/contato") ?>" class=""><span
                                                                    class="item_outer"><span
                                                                        class="item_text">Fale Conosco</span></span></a>
                                                    </li>
                                                    <li id="nav-menu-item-835"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="<?= $this->Url->build("/visita") ?>" class=""><span
                                                                    class="item_outer"><span
                                                                        class="item_text">Marque uma visita</span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>

            </div>

            <div class="eltdf-sticky-header">
                <div class="eltdf-sticky-holder eltdf-menu-center">
                    <div class="eltdf-vertical-align-containers">
                        <div class="eltdf-position-left">
                            <div class="eltdf-position-left-inner">

                                <div class="eltdf-logo-wrapper">
                                    <a itemprop="url" href="" style="height: 68px; width: 60px;">
                                        <img itemprop="image" class="eltdf-normal-logo" src="/images/brasao.png"
                                             width="336" height="37" alt="logo"/>
                                        <img itemprop="image" class="eltdf-dark-logo" src="/images/brasao.png"
                                             width="336" height="37" alt="dark logo"/> <img itemprop="image"
                                                                                            class="eltdf-light-logo"
                                                                                            src="/images/brasao.png"
                                                                                            width="336" height="37"
                                                                                            alt="light logo"/> </a>
                                </div>

                            </div>
                        </div>
                        <div class="eltdf-position-center">
                            <div class="eltdf-position-center-inner">

                                <nav class="eltdf-main-menu eltdf-drop-down eltdf-sticky-nav">
                                    <ul id="menu-main-menu-1" class="clearfix">
                                        <li id="sticky-nav-menu-item-549"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow">
                                            <a href="/" class=" current "><span class="item_outer"><span
                                                            class="item_text">Home</span><span class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                        </li>
                                        <li id="sticky-nav-menu-item-550"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                            <a href="/#Missao" class=""><span class="item_outer"><span
                                                            class="item_text">Missao</span><span class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                        </li>
                                        <li id="sticky-nav-menu-item-551"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                            <a href="<?= $this->Url->build("/equipe") ?>" class=""><span class="item_outer"><span class="item_text">Equipe</span><span
                                                            class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                        </li>
                                        <li id="sticky-nav-menu-item-552"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                            <a href="" class=""><span class="item_outer"><span
                                                            class="item_text">Quem Atendemos</span><span class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                        </li>
                                        <li id="sticky-nav-menu-item-553"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                            <a href="" class=""><span class="item_outer"><span
                                                            class="item_text">Serviços</span><span class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second">
                                                <div class="inner">
                                                    <ul>
                                                        <?php foreach ($categories as $category): ?>
                                                        <li id="sticky-nav-menu-item-1260"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub">
                                                            <a href="#" class=""><span class="item_outer"><span
                                                                            class="item_text"><?php echo $category->name ?></span><span
                                                                            class="plus"></span></span></a>
                                                            <ul>
                                                                <?php foreach ($category['staffs'] as $staff): ?>
                                                                <li id="sticky-nav-menu-item-1264"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                                    <a href="<?= $this->Url->build("servicos/{$staff->id}/cargos") ?>"
                                                                       class=""><span class="item_outer"><span
                                                                                    class="item_text"><?php echo $staff->staff ?></span><span
                                                                                    class="plus"></span></span></a></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-554"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide">
                                            <a href="#" class=""><span class="item_outer"><span class="item_text">Portifolio</span><span
                                                            class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>

                                        </li>
                                        <li id="sticky-nav-menu-item-554"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                            <a href="#" class=""><span class="item_outer"><span class="item_text">Contato</span><span
                                                            class="plus"></span><i
                                                            class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="nav-menu-item-751"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="<?= $this->Url->build("/contato") ?>" class=""><span
                                                                        class="item_outer"><span
                                                                            class="item_text">Fale Conosco</span></span></a>
                                                        </li>
                                                        <li id="nav-menu-item-835"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="<?= $this->Url->build("/visita") ?>" class=""><span
                                                                        class="item_outer"><span
                                                                            class="item_text">Marque uma visita</span></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <header class="eltdf-mobile-header">

            <div class="eltdf-mobile-header-inner">
                <div class="eltdf-mobile-header-holder">
                    <div class="eltdf-grid">
                        <div class="eltdf-vertical-align-containers">
                            <div class="eltdf-vertical-align-containers">
                                <div class="eltdf-mobile-menu-opener">
                                    <a href="javascript:void(0)">
                                            <span class="eltdf-mobile-menu-icon">
                                        <span class="eltdf-mm-line eltdf-line-1"></span>
                                            <span class="eltdf-mm-line eltdf-line-2"></span>
                                            <span class="eltdf-mm-line eltdf-line-3"></span>
                                            <span class="eltdf-mm-line eltdf-line-4"></span>
                                            </span>
                                    </a>
                                </div>
                                <div class="eltdf-position-center">
                                    <div class="eltdf-position-center-inner">

                                        <div class="eltdf-mobile-logo-wrapper">
                                            <a itemprop="url" href="/" style="height: 18px">
                                                <img itemprop="image" src="/images/logo-site.png" width="336"
                                                     height="37" alt="Mobile Logo"/>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="eltdf-position-right">
                                    <div class="eltdf-position-right-inner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="eltdf-mobile-nav">
                    <div class="eltdf-grid">
                        <ul id="menu-main-menu-2" class="">
                            <li id="mobile-menu-item-549"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub">
                                <a href="/" class=" current  eltdf-mobile-no-link"><span>Home</span></a>

                            </li>
                            <li id="mobile-menu-item-550"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="/#Missao" class=" eltdf-mobile-no-link"><span>Missao</span></a>

                            </li>
                            <li id="mobile-menu-item-551"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="<?= $this->Url->build("/equipe") ?>" class=" eltdf-mobile-no-link"><span>Equipe</span></a>

                            </li>
                            <li id="mobile-menu-item-552"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="#" class=" eltdf-mobile-no-link"><span>Quem Atendemos</span></a><span
                                        class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                            class="fa fa-angle-down"></i></span>

                            </li>
                            <li id="mobile-menu-item-553"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="#" class=" eltdf-mobile-no-link"><span>Serviços</span></a><span
                                        class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                            class="fa fa-angle-down"></i></span>
                                <ul class="sub_menu">
                                    <?php foreach ($categories as $category): ?>
                                    <li id="mobile-menu-item-1260"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                        <a href="#" class=" eltdf-mobile-no-link"><span><?php echo $category->name ?></span></a><span
                                                class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                                    class="fa fa-angle-down"></i></span>
                                        <?php foreach ($category['staffs'] as $staff): ?>
                                        <ul class="sub_menu">

                                            <li id="mobile-menu-item-1264"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="<?= $this->Url->build("servicos/{$staff->id}/cargos") ?>/"
                                                        class=""><span><?php echo $staff->staff ?></span></a></li>

                                        </ul>
                                        <?php endforeach; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li id="mobile-menu-item-554"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="#" class=" eltdf-mobile-no-link"><span>Portifolio</span></a><span
                                        class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                            class="fa fa-angle-down"></i></span>
                                <ul class="sub_menu">
                                    <li id="mobile-menu-item-1647"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                        <a href="#" class=" eltdf-mobile-no-link"><span>Classic</span></a><span
                                                class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                                    class="fa fa-angle-down"></i></span>
                                        <ul class="sub_menu">
                                            <li id="mobile-menu-item-2524"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/accordions-toggles/"
                                                        class=""><span> Toggles</span></a></li>
                                            <li id="mobile-menu-item-2146"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/blockquote/"
                                                        class=""><span>Blockquote</span></a></li>
                                            <li id="mobile-menu-item-1846"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/buttons/"
                                                        class=""><span>Buttons</span></a></li>
                                            <li id="mobile-menu-item-1972"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/contact-form/"
                                                        class=""><span>Contact Form</span></a></li>
                                            <li id="mobile-menu-item-1973"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/google-map/"
                                                        class=""><span>Google Map</span></a></li>
                                            <li id="mobile-menu-item-1974"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/separators/"
                                                        class=""><span>Separators</span></a></li>
                                            <li id="mobile-menu-item-1975"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/tabs/"
                                                        class=""><span>Tabs</span></a></li>
                                            <li id="mobile-menu-item-1976"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                        href="https://gourmand.elated-themes.com/elements/testimonials/"
                                                        class=""><span>Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="mobile-menu-item-554"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                                <a href="#" class=" eltdf-mobile-no-link"><span>Contato</span></a><span
                                        class="mobile_arrow"><i class="eltdf-sub-arrow fa fa-angle-right"></i><i
                                            class="fa fa-angle-down"></i></span>
                                <ul class="sub_menu">
                                    <li id="mobile-menu-item-1647"
                                        class="menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="<?= $this->Url->build("/contato") ?>" class=" eltdf-mobile-no-link"><span>Fale Conosco</span></a>

                                    </li>
                                    <li id="mobile-menu-item-1647"
                                        class="menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="<?= $this->Url->build("/visita") ?>" class=" eltdf-mobile-no-link"><span>Marque sua Visita</span></a>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

        </header>

        <a id='eltdf-back-to-top' href='#'>
                <span class="eltdf-icon-stack">
                     <i class="eltdf-icon-font-awesome fa fa-angle-up "></i>                </span>
        </a>

        <div class="eltdf-content" style="margin-top: -94px">
            <div class="eltdf-content-inner">
                <?php echo $this->fetch('content'); ?>
            </div>
            <!-- close div.content_inner -->
        </div>

        <?php echo $this->element('site/footer_site'); ?>
    </div>
    <!-- close div.eltdf-wrapper-inner  -->
</div>
<!-- close div.eltdf-wrapper -->
<div class="rbt-toolbar" data-theme="Gourmand" data-featured="" data-button-position="70%"
     data-button-horizontal="right" data-button-alt="no"></div>
</body>
</html>
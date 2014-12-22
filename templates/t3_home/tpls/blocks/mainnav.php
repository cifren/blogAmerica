<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
// get params
$sitename = $this->params->get('sitename');
if (!$sitename) {
    $sitename = JFactory::getConfig()->get('sitename');
}

$logosize = 'col-sm-12';
if ($headright = $this->countModules('head-search or languageswitcherload')) {
	$logosize = 'col-sm-8';
}
?>

<!-- MAIN NAVIGATION -->
<header>
    <nav class="wrap navbar">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
                    <?php $this->addScript(T3_URL . '/js/nav-collapse.js'); ?>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                <?php endif ?>

                <?php if ($this->getParam('addon_offcanvas_enable')) : ?>
                    <?php $this->loadBlock('off-canvas') ?>
                <?php endif ?>

                <ul class="nav navbar-nav logo">
                    <li class="nav-home">
                      <a href="/" class="navbar-brand-custom">Blog<span>America</span> </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php if ($this->countModules('languageswitcherload')) : ?>
                        <!-- LANGUAGE SWITCHER -->
                        <li><jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" /></li>
                        <!-- //LANGUAGE SWITCHER -->
                    <?php endif ?>
                </ul>
                <div class="nav navbar-nav navbar-right navbar-menu">
                    <jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
                </div>
                <?php /*if ($headright): ?>
                    <ul class="nav navbar-nav navbar-right">                  
                        <?php if ($this->countModules('head-search')) : ?>
                            <!-- HEAD SEARCH -->
                            <li><jdoc:include type="modules" name="<?php $this->_p('head-search') ?>" style="raw" /></li
                            <!-- //HEAD SEARCH -->
                        <?php endif ?>

                        <?php if ($this->countModules('languageswitcherload')) : ?>
                            <!-- LANGUAGE SWITCHER -->
                            <li><jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" /></li>
                            <!-- //LANGUAGE SWITCHER -->
                        <?php endif ?>
                    </ul>

                <?php endif*/ ?>
            </div>

        </div>
    </nav>
</header>
<!-- //MAIN NAVIGATION -->

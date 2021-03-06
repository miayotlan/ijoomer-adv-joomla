<?php
/**
 * @package     ijoomer
 * @subpackage  Cept
 * @copyright   Copyright (C) 2008 - 2015 ijoomer.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
$scenario->group('Joomla3');
$I = new AcceptanceTester($scenario);
$config = $I->getConfig();
$className = 'AcceptanceTester\Login' . $config['env'] . 'Steps';
$I = new $className($scenario);

$I->wantTo('Install Extension');
$I->doAdminLogin();
$config = $I->getConfig();
$className = 'AcceptanceTester\InstallExtension' . $config['env'] . 'Steps';
$I = new $className($scenario);

$I->installExtension();
$I->wantTo('Install ijoomer demo data');
$I->installSampleData();

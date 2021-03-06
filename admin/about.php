<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Module: XoopsPartners - a partner affiliation links module
 *
 * @package      module\Xoopspartners\admin
 * @author       Mage, Mamba
 * @author       XOOPS Module Development Team
 * @copyright    {@link https://xoops.org 2001-2016 XOOPS Project}
 * @license      {@link https://www.gnu.org/licenses/gpl-2.0.html GNU Public License}
 * @link         https://xoops.org XOOPS
 * @since        1.11
 */

use Xmf\Module\Admin;

require_once __DIR__ . '/admin_header.php';
xoops_load('xoopsformloader');

$moduleAdmin = Admin::getInstance();
$moduleAdmin->displayNavigation(basename(__FILE__));
$moduleAdmin::setPaypal('6KJ7RW5DR3VTJ');
$moduleAdmin->displayAbout(false);

require_once __DIR__ . '/admin_footer.php';

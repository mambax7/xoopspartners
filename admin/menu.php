<?php
/*
 ------------------------------------------------------------------------
               XOOPS - PHP Content Management System
                   Copyright (c) 2000 XOOPS.org
                      <http://www.xoops.org/>
 ------------------------------------------------------------------------
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting
 source code which is considered copyrighted (c) material of the
 original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 ------------------------------------------------------------------------
 Author: Raul Recio (AKA UNFOR)
 Project: The XOOPS Project
 -------------------------------------------------------------------------
*/
/**
 * Module: XoopsPartners - a partner affiliation links module
 *
 * @package      module\xoopspartners\admin
 * @author       Mage, Mamba
 * @author       Raul Recio (aka UNFOR)
 * @author       XOOPS Module Development Team
 * @copyright    {@link http://xoops.org 2001-2016 XOOPS Project}
 * @license      {@link http://www.gnu.org/licenses/gpl-2.0.html GNU Public License}
 */
use Xmf\Module\Helper;
use Xmf\Module\Admin;

$moduleDirname = basename(dirname(__DIR__));

$xpHelper   = Helper::getHelper($moduleDirname);
$xpHelper->loadLanguage('modinfo');

$adminmenu = array(
    array(
        'title' => _MI_XPARTNERS_ADMIN_HOME,
        'link'  => 'admin/index.php',
        'icon'  => Admin::iconUrl('home.png', 32)
    ),
    array(
        'title' => _MI_XPARTNERS_ADMIN_MANAGE,
        'link'  => 'admin/main.php',
        'icon'  => Admin::iconUrl('manage.png', 32)
    ),
    array(
        'title' => _MI_XPARTNERS_ADMIN_ADDP,
        'link'  => 'admin/main.php?op=partnersAdminAdd',
        'icon'  => Admin::iconUrl('add.png', 32)
    ),
    array(
        'title' => _MI_XPARTNERS_ADMIN_ABOUT,
        'link'  => 'admin/about.php',
        'icon'  => Admin::iconUrl('about.png', 32)
    )
);

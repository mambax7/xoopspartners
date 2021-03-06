<?php

namespace XoopsModules\Xoopspartners;

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
 * Class to define XOOPS Partners constant values. These constants are
 * used to make the code easier to read and to keep values in central
 * location if they need to be changed.  These should not normally need
 * to be modified. If they are to be modified it is recommended to change
 * the value(s) before module installation. Additionally the module may not
 * work correctly if trying to upgrade if these values have been changed.
 *
 * @package      module\Xoopspartners\class
 * @author       zyspec <zyspec@yahoo.com>
 * @author       XOOPS Module Development Team
 * @copyright    {@link https://xoops.org 2001-2016 XOOPS Project}
 * @license      {@link https://www.gnu.org/licenses/gpl-2.0.html GNU Public License}
 * @link         https://xoops.org XOOPS
 * @since        1.12
 */
/**
 * interface Constants
 */
interface Constants
{
    /**#@+
     * Constant definition
     */
    /**
     * no delay XOOPS redirect delay (in seconds)
     */
    public const REDIRECT_DELAY_NONE = 0;
    /**
     * short XOOPS redirect delay (in seconds)
     */
    public const REDIRECT_DELAY_SHORT = 1;
    /**
     * medium XOOPS redirect delay (in seconds)
     */
    public const REDIRECT_DELAY_MEDIUM = 3;
    /**
     * long XOOPS redirect delay (in seconds)
     */
    public const REDIRECT_DELAY_LONG = 7;
    /**
     * default image width  (don't change here, change in Preferences)
     */
    public const DEFAULT_MAX_WIDTH = 150;
    /**
     * default image height (don't change here, change in Preferences)
     */
    public const DEFAULT_MAX_HEIGHT = 110;
    /**
     * value indicates poll options are shown as list
     */
    public const DEFAULT_UPLOAD_SIZE = 1048576;
    /**
     * default partner ID
     */
    public const DEFAULT_PID = 0;
    /**
     * default module ID
     */
    public const DEFAULT_MID = 0;
    /**
     *  indicates a partner title should be displayed
     */
    public const SHOW_TITLE = 2;
    /**
     *  indicates a partner image should be displayed
     */
    public const SHOW_IMAGE = 1;
    /**
     *  indicates a partner listing is inactive
     */
    public const STATUS_INACTIVE = 0;
    /**
     *  indicates a partner listing is active
     */
    public const STATUS_ACTIVE = 1;
    /**
     * default poll weight for display order
     */
    public const DEFAULT_WEIGHT = 0;
    /**
     * cannot join
     */
    public const JOIN_NOT_OK = 0;
    /**
     * ok to join
     */
    public const JOIN_OK = 1;
    /**
     * confirm not ok to take action
     */
    public const CONFIRM_NOT_OK = 0;
    /**
     * confirm ok to take action
     */
    public const CONFIRM_OK = 1;
    /**#@-*/
}

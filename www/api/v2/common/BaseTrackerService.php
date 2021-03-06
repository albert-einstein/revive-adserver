<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package    OpenX
 * @author     David Keen <david.keen@openx.org>
 *
 */

require_once MAX_PATH . '/www/api/v2/xmlrpc/TrackerServiceImpl.php';

class BaseTrackerService
{
    protected $oTrackerServiceImpl;

    function __construct()
    {
        $this->oTrackerServiceImpl = new TrackerServiceImpl();
    }
}

?>

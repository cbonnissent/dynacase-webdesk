<?php
/*
 * @author Anakeen
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @package WEBDESK
*/

function parseUrl($link)
{
    
    global $_SERVER;
    $gparams = array(
        "[user]" => isset($_SERVER['PHP_AUTH_USER']) ? urlencode($_SERVER['PHP_AUTH_USER']) : '',
        "[pass]" => isset($_SERVER['PHP_AUTH_PW']) ? urlencode($_SERVER['PHP_AUTH_PW']) : '',
    );
    $ms = $mr = array();
    foreach ($gparams as $k => $v) {
        $ms[] = $k;
        $mr[] = $v;
    }
    return str_ireplace($ms, $mr, $link);
}

<?php
/**
 * Created
 * With PhpStorm;
 * By User: shinishirotomonaga;
 * On Date: 10/08/2017;
 * At Time: 00:47;
 *
 * Project name:    Nederlandsche Financiële Reserve
 * File name:       ${FILENAME}
 *
 * All rights reserved on behalf of J.Klaassen.
 */

// Always provide a TRAILING SLASH (/) AFTER A PATH

// TODO: automatically detect workspace / server/host

# @Todo: create dynamic CONSTANTS ETC.

define('PROJECT_NAME', 'Nederlansche Financiële Reserve');

define('URL', 'http://nfr.jklaassen.com/');

define('VIEWS', 'views/');

define('MODELS', 'models/');

define('LIBS', 'libs/');

define('CONTROLLERS', 'controllers/');

define('HEADER', 'header.php');
define('FOOTER', 'footer.php');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'HFR_PRELIMINARY');
define('DB_USER', 'root');
define('DB_PASS', '');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', "7876lksjf898|3948;kljadl;f|KJKL;DSJFOIEKM9[]'-");
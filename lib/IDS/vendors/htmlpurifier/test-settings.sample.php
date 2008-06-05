<?php

// ATTENTION! DO NOT EDIT THIS FILE!
// This file is necessary to run the unit tests and profiling scripts.
// Please copy it to 'test-settings.php' and make the necessary edits.

// Note: The only external library you *need* is SimpleTest; everything else
//       is optional.

// We've got a lot of tests, so we recommend turning the limit off.
set_time_limit(0);

// Turning off output buffering will prevent mysterious errors from core dumps.
$data = @ob_get_clean();
if ($data !== false && $data !== '') {
    echo "Output buffer contains data [".urlencode($data)."]\n";
    exit;
}

// -----------------------------------------------------------------------------
// REQUIRED SETTINGS

// Note on running SimpleTest:
//      Because HTML Purifier is PHP5-only and E_STRICT compliant, SimpleTest
//      1.0.1 will not work; you need to run SimpleTest off its trunk using:
//
//        $ svn co https://simpletest.svn.sourceforge.net/svnroot/simpletest/simpletest/trunk simpletest
//
//      If SimpleTest is borked with HTML Purifier, please contact me or
//      the SimpleTest devs; I am a developer for SimpleTest so I should be
//      able to quickly assess a fix. SimpleTest's problem is my problem!

// Where is SimpleTest located? Remember to include a trailing slash!
$simpletest_location = '/path/to/simpletest/';

// -----------------------------------------------------------------------------
// OPTIONAL SETTINGS

// Note on running PHPT:
//      Vanilla PHPT from http://phpt.info will not work, because there are 
//      a number of bugs that prevent HTML Purifier from doing what they need
//      to do. If you really want to run PHPT, you'll will need to apply the
//      patches in maintenance/phpt-modifications.patch on the PHPT Core trunk,
//      which can be checked out using:
//
//        $ svn co https://svn.phpt.info/Core/trunk phpt-core

// Should PHPT tests be enabled?
$GLOBALS['HTMLPurifierTest']['PHPT'] = false;

// If PHPT isn't in your Path via PEAR, set that here:
// set_include_path('/path/to/phpt/Core/src' . PATH_SEPARATOR . get_include_path());

// Where is CSSTidy located? (Include trailing slash. Leave false to disable.)
$csstidy_location    = false;

// For tests/multitest.php, which versions to test?
$versions_to_test    = array();

// Stable PHP binary to use when invoking maintenance scripts.
$php = 'php';

// For tests/multitest.php, what is the multi-version executable? It must
// accept an extra parameter (version number) before all other arguments
$phpv = false;

// Should PEAR tests be run? If you've got a valid PEAR installation, set this
// to true (or, if it's not in the include path, to its install directory).
$GLOBALS['HTMLPurifierTest']['PEAR'] = false;


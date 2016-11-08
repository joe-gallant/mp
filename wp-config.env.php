<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Watson Design WordPress Multi-Environment Config
 * @version    1.0
 * @author     Watson Design
 */


// Set environment based on hostname
switch ($hostname) {
    case 'localhost':
    case 'mp.dev':
        define('WP_ENV', 'development');
        break;

    case 'mighton.redgraphic.co.uk':
        define('WP_ENV', 'staging');
        break;

    case 'www.mightonprodcts.com':
    case 'mightonprodcts.com':
    default: 
        define('WP_ENV', 'production');
}


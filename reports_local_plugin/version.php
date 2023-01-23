<?php
/**
 * Version details.
 * @package   reports
 * @copyright 2023 Michael Hayes
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_reports_local_plugin';  // Recommended since 2.0.2 (MDL-26035). Required since 3.0 (MDL-48494)
$plugin->version = 2023012331; // Plugin released on 23rd Jan 2023.
$plugin->requires = 2022112801; // Moodle 4.1.1 is required.
$plugin->maturity = MATURITY_ALPHA; // This is considered as ALPHA for production sites.
$plugin->release = 'v1'; // Version 1


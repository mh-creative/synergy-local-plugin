<?php
/**
 * Version details.
 * @package   reports
 * @copyright 2023 Michael Hayes
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
* Insert a link to index.php on the site front page navigation menu. > More Dropdown > Reports
*/

if (is_siteadmin()) {
    function local_reports_local_plugin_extend_navigation_frontpage(navigation_node $frontpage) {
        $frontpage->add(
            get_string('pluginname', 'local_reports_local_plugin'),
            new moodle_url('/local/reports_local_plugin/index.php')
            );
    }
}
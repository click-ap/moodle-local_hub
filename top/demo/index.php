<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package     local_moodleorg
 * @copyright   2014 David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__.'/../../../../config.php');

// Force the theme for this page
$CFG->theme = 'moodleorgcleaned_demo';

$PAGE->set_context(context_system::instance());
$PAGE->set_title('Moodle demo');
$PAGE->set_heading($PAGE->title);
$PAGE->set_url(new moodle_url('/demo/'));
$PAGE->set_pagelayout('frontpage');

echo $OUTPUT->header();
echo $OUTPUT->footer();

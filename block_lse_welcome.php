<?php

class block_lse_welcome extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_lse_welcome');
    }

    function applicable_formats() {
        return array('my' => true);
    }

    public function get_content() {

        global $COURSE, $CFG;

        if ($this->content !== null) {
            return $this->content;
        }

        // initalise block content object
        $this->content = new stdClass();
        $blockpath = $CFG->wwwroot .'/blocks/'. $this->name();

        $this->content->text = <<<EOT
<div>
<table style="width: 600px;" border="0">
<tbody>
<tr>
<td style="width: 50%; text-align: left;">
<p><strong><a href="http://clt.lse.ac.uk/moodle/moodle-faqs-students.php" target="_blank">Help for students</a><br /></strong></p>
<p><a href="http://clt.lse.ac.uk/moodle/moodle-faqs-students.php" target="_blank"><img alt="Lecture in NAB" src="$blockpath/pix/student_faq.jpg" height="110" width="250" /></a></p>
</td>
<td style="width: 50%; text-align: right;">
<p><strong><strong><a href="http://clt.lse.ac.uk/moodle/moodle-faqs-staff.php" target="_blank">Help for staff</a><br /></strong></strong></p>
<p><a href="http://clt.lse.ac.uk/moodle/moodle-faqs-staff.php" target="_blank"><strong><img alt="Hands on keyboard" src="$blockpath/pix/staff_faq.jpg" height="110" width="250" /></strong></a></p>
</td>
</tr>
<tr>
<td style="text-align: left;">
<p><strong><a title="Training and development" href="http://www2.lse.ac.uk/intranet/LSEServices/trainingAndDevelopment/home.aspx" target="_blank">Training &amp; development</a><br /></strong><a title="Teaching and Learning Centre" href="http://www2.lse.ac.uk/intranet/LSEServices/TLC/Home.aspx" target="_blank"><strong>Study support from TLC</strong></a></p>
</td>
<td style="text-align: right;">
<p><a href="$CFG->wwwroot/mod/page/view.php?id=279912"><strong>Introduction to Moodle: Screencasts</strong> <img style="vertical-align: middle;" alt="playback icon" src="$blockpath/pix/Actions-media-playback-start-icon.png" height="16" width="16" /> </a><br /> </p>
</td>
</tr>
</tbody>
</table>
</div>
EOT;


        $this->content->footer = '';

        return $this->content;

    }

}
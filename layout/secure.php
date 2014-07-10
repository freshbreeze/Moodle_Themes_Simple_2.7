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
 * A  secure layout for the Bootstrapbase theme.
 *
 * @package   theme_bootstrapbase
 * @copyright 2012 Bas Brands, www.basbrands.nl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php
/**********************
* start ZHAW Header
***********************
Header are identical in:
columns1.php
columns2.php
columns3.php
mydashboard.php

frontpage.php is slightly different: with SWITCHaai Login
secure.php is slightly different: without "$OUTPUT->login_info();"

If you make changes update this files.
**********************/
?>
<header role="banner" class="navbar notfrontpage">
     <div id="pageheader">
        <?php
        if(current_language()=='de'){
            $showheader = 'Header einblenden';
        }else{
            $showheader = 'Show Header';
        }
        ?>
        <div id="show_header"><a href="javascript:showHeader();"><?php echo $showheader; ?></a></div>
        <div id="pageheader-top-left"><?php 
            $languages = get_string_manager()->get_list_of_translations();
            $current_language = current_language();
            $home = array('de'=>'Startseite','en'=>'Home','es'=>'P&aacute;gina Principal','fr'=>'Accueil','it'=>'Home');
            $s = '<ul id="TOOLREF"><li><a href="'.$CFG->wwwroot.'/">'.$home[$current_language].'</a></li>';
            foreach ($languages as $key => $v) {
                if($key==$current_language){
                    $s .= '<li>'.$key.'</li>';
                }else{
                    $s .= '<li><a href="'.$CFG->wwwroot.'/?lang='.$key.'" title="'.$v.'">'.$key.'</a></li>';
                }
            }
            $s .= '</ul>';
            echo $s; ?></div>
        <div id="pageheader-top-right">&nbsp;</div>
        <div class="cleaner">&nbsp;</div>

        <div id="pageheader-middle-left"><a href="<?php echo $CFG->wwwroot; ?>/?redirect=0"><img src="<?php echo $OUTPUT->pix_url('logo', 'theme')?>" alt="Logo" /></a></div>
        <div id="pageheader-middle-right"><h1 class="page-front"><?php echo $PAGE->heading ?></h1></div>
        <div class="headermenu"><?php
            echo $PAGE->headingmenu;
        ?></div>
    </div>
</header>
<?php
/**********************
* end ZHAW Header
***********************/
?>

<div id="page" class="container-fluid">

    <div id="page-content" class="row-fluid">
        <div id="region-bs-main-and-pre" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <?php echo $OUTPUT->main_content(); ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
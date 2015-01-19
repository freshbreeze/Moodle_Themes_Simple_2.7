Version 1.9 for Moodle 2.7 (Build: 20150119) and above

For Moodle 2.1 - 2.3 visite: https://github.com/freshbreeze/Moodle_Themes_Simple_2.2
For Moodle 2.4 - 2.6 visite: https://github.com/freshbreeze/Moodle_Themes_Simple_2.4



Simple template extends the bootstrapbase theme

Key Features
- Simple design
- The front-page design uses blocks in the content area and displaying them as boxes
- Easy to change the template color (possible to use different colors for different departments)
- Multi device optimized: "Simple" follows the best practice of using responsive web design, namely serving the same HTML for devices and using only CSS media queries to decide the rendering on each device



How to change the default template color?
Substitute #0164A7 with your hex color in style/simple.css

How to use different colors for different departments?
a) create folder new templat folder e.g. name: xyz, color: #E0922E

b) create xyz/config.php
$THEME->name = 'xyz';
$THEME->doctype = 'html5';
$THEME->parents = array('simple','bootstrapbase');
$THEME->sheets = array('skin');
$THEME->yuicssmodules = array();
$THEME->editor_sheets = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->enable_dock = true;

c) create xyz/style/skin.css
#pageheader-middle-right{
    background-color: #E0922E !important;
}

d) create xyz/pix/logo.png

e) create xyz/pix/screenshot.png

More infos about Moodle Themes: http://docs.moodle.org/dev/Themes
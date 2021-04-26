<?php

/*
 * Template Name: Name of Template
 * Version: 1.0.0
 * Description: A print-friendly template displaying the ...
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: XXX
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: Tag_a
 */

/* Prevent direct access to the template */
if (!class_exists('GFForms')) {
    return;
}

/**
 * Load our template-specific settings
 * (This picks up the settings in the dashboard)
 */
$show_meta_data = !empty($settings['world_show_meta_data']) ? $settings['world_show_meta_data'] : 'No';
?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- STYLES -->
<style>
/* FONTS */

/* LISTS */
ul,
ol {
    margin: 0;
    padding-left: 1mm;
    padding-right: 1mm;
    list-style-type: U+2610;
}

li {
    margin: 0;
    padding: 2mm 0 0 0;
    list-style-position: outside;
}

/* TABLES */
/* .footer_left_half {
    width: 69%;
}

.footer_right_half {
    width: 30%;
} */

/* HEADERS or PAGE */
@page {
    size: 8.5in 11in;
    margin: 20mm 20mm 10mm 20mm;
    header: html_MyCustomHeader;
    /* The template looks for this tag later in the template to insert the header */
    /* The template looks for this tag later in the template to insert the header */
    line-height: 1.3;
}

/* FOOTERS */
@page {
    footer: html_MyCustomFooter;
    /* The template looks for this tag later in the template to insert the footer */
    /* The template looks for this tag later in the template to insert the header */
    margin-footer: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFHeader">
    <table class="header">
        <tr class="paragraph">
            <td class="footer_left_half"></td>
            <td class="footer_right_half text_align_right"></td>
        </tr>
    </table>
</htmlpagefooter>

<htmlpagefooter name="MyCustomFooter">
    <table class="footer">
        <tr class="paragraph">
            <td class="footer_left_half"></td>
            <td class="footer_right_half text_align_right"><span class="bs_bold">PAGE {PAGENO}</span></td>
        </tr>
    </table>
</htmlpagefooter>
<!-- HEADR FOOTER END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
$date_today = new \DateTime();

// Example simple field
$variable_1 = $form_data['field'][29]; // The number is the form field id
// Not numbers can be entered without '
// When using strings to reference an array key, you must enclose the string in ''

// Example complex field
$variable_address_street_1 = $form_data['field'][6]['street'];
$variable_address_street_2 = $form_data['field'][6]['street2'];
$variable_address_city = $form_data['field'][6]['city'];
$variable_address_state = $form_data['field'][6]['state'];
$variable_address_zip = $form_data['field'][6]['zip'];

// I will add signature fields and other more complex fields later

/* ***********************************************************************************************************
 * VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- ADD HTML HERE -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold"><?php echo $variable_1 ?></div>
<br>

<!-- INTRO HEADER -->
<table class="INTRO">
    <tr class="paragraph">
        <td class="column_left_half"></td>
        <td class="column_right_half"></td>
    </tr>
</table>

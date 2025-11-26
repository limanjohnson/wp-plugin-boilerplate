<?php

/**
 * Template Name: Event Ticket
 * Version: 1.0
 * Description: PDF layout for attendee ticket
 * Author: Liam Nell
 * Author URI: https://github.com/limanjohnson/wp-plugin-boilerplate
 * Group: Core
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: Header, Footer, Background, Optional HTML Fields, Optional Page Fields, Container Background Color
 */

/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
    return;
}

/**
 * All Gravity PDF v4/v5/v6 templates have access to the following variables:
 *
 * @var array  $form      The current Gravity Forms array
 * @var array  $entry     The raw entry data
 * @var array  $form_data The processed entry data stored in an array
 * @var object $settings  The current PDF configuration
 * @var array  $fields    An array of Gravity Forms fields which can be accessed with their ID number
 * @var array  $config    The initialised template config class – eg. /config/zadani.php
 */

?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>

</style>

<!-- The PDF content should be placed in here -->

<div class="ticket">
    <div>
        <h2>Event Name</h2>
        <?php echo $form_data['field'][5]; ?>
    </div>
    <div class="field-row">
        <span class="label">Attendee:</span>
        <?php echo $form_data['field'][1]; ?>
    </div>
    <div class="field-row">
        <span class="label">Number of Attendees:</span>
        <?php echo $form_data['field'][7]; ?>
    </div>
    <div class="field-row">
        <span class="label">Add-Ons:</span>
        <?php echo $form_data['field'][8]; ?>
    </div>
</div>

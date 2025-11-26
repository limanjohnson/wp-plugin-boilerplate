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
if (!class_exists('GFForms')) {
    return;
}

/**
 * All Gravity PDF v4/v5/v6 templates have access to the following variables:
 *
 * @var array $form The current Gravity Forms array
 * @var array $entry The raw entry data
 * @var array $form_data The processed entry data stored in an array
 * @var object $settings The current PDF configuration
 * @var array $fields An array of Gravity Forms fields which can be accessed with their ID number
 * @var array $config The initialised template config class – eg. /config/zadani.php
 */

?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>

    .ticket {

    }

    .field-row {
        margin: 1em;
    }

    .total-row {
        overflow: auto;
    }

    .total-row .label {
        float: right;
        text-align: end;
    }

    .total-row .value {
        float: left;
    }

    .section {
        border: 2px solid #0a4b78;
        padding: 2em;
    }

    .smplfy-list {
        padding: 0;
    }

    .smplfy-list-item {
        list-style: none;
        margin-bottom: .75em;
    }

    .qr-code {
        margin: 1em 0;
    }

</style>

<!-- The PDF content should be placed in here -->

<div class="ticket">
    <h1>Event Ticket</h1>
    <h2>Details:</h2>
    <div class="section">
        <div class="field-row">
            <span>Event Name:</span>
            <?php echo $form_data['field'][5]; ?>
        </div>
        <div class="field-row">
            <span class="label">Attendee:</span>
            <?php echo esc_html($form_data['field'][1]['first'] . " " . $form_data['field'][1]['last']) ?>
        </div>
        <div class="field-row">
            <span class="label">Number of Attendees:</span>
            <?php echo $form_data['field'][7]; ?>
        </div>
    </div>
    <h2>Additional Information</h2>
    <div class="section">
        <div class="field-row">
            <span class="label">Add-Ons:</span>
            <?php if (!empty($form_data['field'][8])) : ?>
                <ul class="smplfy-list">
                    <?php foreach ($form_data['field'][8] as $addon) : ?>
                        <li class="smplfy-list-item"><?php echo esc_html($addon); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>No add-ons</p>
            <?php endif; ?>
        </div>
        <hr>
        <div class="field-row total-row">
            <span class="value"><?php echo $form_data['field'][11]; ?></span>
            <span class="label">Total</span>
        </div>
    </div>
    <div class="qr-code">
        <barcode
                code="https://liam-nell.sblik.com/wp-admin/admin.php?page=gf_entries&view=entry&id=<?php echo $form['id']; ?>&lid=<?php echo $entry['id']; ?>"
                type="QR" size="1" error="M"/>
    </div>
</div>


<?php

add_action('gform_after_submission_1', 'send_to_crm', 10, 2);

function send_to_crm($entry, $form)
{
    $endpoint_url = 'https://webhook.site/be170cd4-c572-4e4f-bff8-1318494db0bb';
    $data = array(
        'single_line_text' => rgar($entry, '1'),
        'paragraph_field' => rgar($entry, '2'),
        'dropdown_options' => rgar($entry, '3'),
        'numbers' => rgar($entry, '4'),
        'radio_button' => rgar($entry, '5'),
    );

    wp_remote_post($endpoint_url, array(
        'body' => json_encode($data),
        'headers' => array( 'Content-Type' => 'application/json' ),
    ));


}
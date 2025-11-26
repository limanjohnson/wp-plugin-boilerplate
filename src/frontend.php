<?php

add_shortcode("liam-plugin", "render");

function render() {
    // add your frontend code that renders your shortcode here
    ob_start();
    ?>
        
        <div class="wrap">
            <h2>Hello World!</h2>
            <h3>Here is a demo message for loom</h3>
        </div>

    <?php
    return ob_get_clean();
}

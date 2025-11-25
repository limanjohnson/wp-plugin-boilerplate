<?php

add_shortcode("liam-plugin", "render");

function render() {
    // add your frontend code that renders your shortcode here
    ob_start();
    ?>
        
        <div class="wrap">
            <h2>Hello World!</h2>
            <p>This is a test site to implement internship tasks</p>
        </div>

    <?php
    return ob_get_clean();
}

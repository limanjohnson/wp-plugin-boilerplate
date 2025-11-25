<?php

add_shortcode("liam-plugin", "render");

function render() {
    // add your frontend code that renders your shortcode here
    ob_start();
    ?>
        
        <div class="wrap">
            <h2>Hello World!</h2>
            <p>If this message is here, then FTP Deploy is working!</p>
            <p>Another test</p>
            <p>Last Test</p>
        </div>

    <?php
    return ob_get_clean();
}

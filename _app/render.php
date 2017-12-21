<?php
    /**
     * Render the requested page
     */
    include 'config.php';
    include './_templates/template.php';
    
    function render($body){
        $page = web_header(config('site'));
        $page .= $body;
        $page .= web_footer();

        echo $page;
    }
<?php

function render($partial, $data = [], $zone = "public"): void
{   
    $skeletonPath = SITE_ROOT . "app/view/$zone/skeleton.html";
    $partialPath = SITE_ROOT . "app/view/$zone/$partial";
    
    if (!file_exists($skeletonPath) || !file_exists($partialPath)) {
        http_response_code(500);
        echo "Template not found.";
        /*var_dump($skeletonPath, $partialPath);*/
        return;
    }

    // Load the skeleton
    $skeleton = file_get_contents($skeletonPath);

    // Load and parse the partial
    ob_start();
    include $partialPath;
    $partialContent = ob_get_clean();

    // Replace the placeholder
    if (isset($data['head_title'])) {
        $skeleton = str_replace('%%HEAD_TITLE%%', $data['head_title'], $skeleton);
    }

    $page = str_replace('%%MAIN_CONTENT%%', $partialContent, $skeleton);

    echo $page;
}

?>
<?php
    $page = get_page_by_path('escuela-produss');
    $pageId = $page->ID;
    $pageContent = $page->post_content;
    $content = $pageContent;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
?>
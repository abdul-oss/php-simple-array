<?php
function get_item_html($id , $item )
{
    $output = "<li>"."<div>"
    ."<a href=".$item["img"].">"
    ."<img src='".$item["img"]."'. alt='".$item["title"]."'>"
    ."<h1>".$item["title"]."</h1>"
    ."</a>"."</div>"
    ."</li>";
        return $output;
}
?>
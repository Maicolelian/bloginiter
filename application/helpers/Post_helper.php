<?php

function posted()
{
    return array("si" => "si", "no" => "no");
}

function categorie_to_form($categories) {
    $aCategories = array();

    foreach ($categories as $key => $c) {
        $aCategories[$c->category_id] = $c->name;
    }

    return $aCategories;
}

function clean_name($name)
{
    return url_title($name, '-', TRUE);
}
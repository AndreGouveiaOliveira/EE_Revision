<?php

function select($name, $id, $options, $current = null) {
    $selectElement = "<select name=\"$name\" id=\"$id\">";
    foreach ($options as $value) {
        if ($current == $value) {
            $selectElement .= "<option selected value=\"$value\">$value</option>";
        } else {
            $selectElement .= "<option value=\"$value\">$value</option>";
        }
    }
    $selectElement .= "<select>";
    return $selectElement;
}

function radioButton($name, $couleur, $current) {
    $radioArray = array();
    foreach ($couleur as $value) {
        if ($current == $value) {

            array_push($radioArray, "<label><input type='radio' name=\"$name\" value=\"$value\" checked='checked'>$value</label>");
        } else {

            array_push($radioArray, "<label><input type='radio' name=\"$name\" value=\"$value\">$value</label>");
        }
    }
        return $radioArray;
}

function checkBox(){
    $checkArray = array();
}

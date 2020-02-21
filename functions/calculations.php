<?php

function get_lookup_table_one() {

    $lookup_table_one = array();

    for($i = 0; $i <= 400; $i++ ) {

        $lbs = $i;

        if ($lbs < 131) {
            $volume = 80;
        } else {
            $volume = get_volume($lbs);
        }

        $lookup_table_one[$lbs] = array('kgs' => convert_lbs_to_kgs($lbs), 'volume' => $volume);
    }

    return $lookup_table_one;
}

function get_look_up_table($protocol) {

    switch ($protocol['look_up_table_id']) {
        case 1:
            return get_lookup_table_one();
        default:
            return null;
    }
}

function get_lookup_table_two() {

    $lookup_table_two = array();

    for($i = 0; $i <= 400; $i++ ) {
        $lbs = $i;
        $kgs = convert_lbs_to_kgs($lbs);

        if ($i < 89) {
            $volume = $kgs * 2;
        } elseif($i >= 89 && $i < 144) {
            $volume = 80;
        } elseif($i >= 144) {
            $volume = get_volume($lbs);
        }

        $lookup_table_two[] = array('lbs' => $lbs, 'kgs' => $kgs, 'volume' => $volume);
    }

    return $lookup_table_two;
}

function get_row_from_table($look_up_table, $patient_weight, $is_weight_unit_kgs) {

    if (!$is_weight_unit_kgs) {
        $data_row = $look_up_table[round($patient_weight)];
    } else {
        $weight = convert_kgs_to_lbs($patient_weight);
        $data_row = $look_up_table[round($weight)];
    }

    return $data_row;
}

function convert_lbs_to_kgs($weight) {
    return $weight * .45359237;
}

function convert_kgs_to_lbs($weight) {
    return $weight / .45359237;
}

function get_volume($lbs) {
    return (0.6114 * $lbs) + 0.1939;
}

function is_weight_unit_kgs($weight_unit) {
    return !empty($weight_unit) && $weight_unit === 'kgs';
}

?>
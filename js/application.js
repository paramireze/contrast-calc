$('input[name=patient_weight]').change(function(e) {
    var weight = e.target.value;

    if (!is_a_number(weight)) {
        alert('Numbers Only');
    } else {
        var max_weight = Number($('#max_weight').text());
        var patient_weight_div = $('#patient_weight');

        if (weight < 0) {
            alert('Weight has to not negative');
            patient_weight_div.addClass('is-invalid');
            $('#patient_weight').val("");
        } else if (weight > max_weight) {
            alert('weight cannot be over 400');
            $('#patient_weight').val("");
            patient_weight_div.addClass('is-invalid');
        } else {
            $("#calculate_volume").submit();
        }
    }
});

$('input[name=weight_unit]').change(function(e) {
    var weight_unit = e.target.value;
    var weight = $('#patient_weight').val();

    if (is_a_number(weight)) {
        var converted_weight = convert_weight(weight, weight_unit);
        $('#patient_weight').val(converted_weight);
        $("#calculate_volume").submit();
    }
});

function is_a_number(input) {
    return input != null && !isNaN(input);
}

function convert_weight(weight, weight_unit) {
    var kg = 0.45359237;
    return weight_unit === "kgs" ?  (weight * kg) : (weight / kg);
}


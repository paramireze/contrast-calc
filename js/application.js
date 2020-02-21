$('input[name=patient_weight]').change(function(e) {

    var weight = e.target.value;

    if (!is_a_number(weight)) {
        alert('Numbers Only');
    } else {
        if (weight < 0) {
            alert('Weight has to not negative');
        } else if (weight > 400) {
            alert('weight cannot be over 400');
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

function convert_weight(weight, weight_unit){
    var kg = 0.45359237
    var results = ""

    if (weight_unit === "kgs") {
        result = weight * kg;
    } else {
        result = weight / kg;
    }

    return result;
};



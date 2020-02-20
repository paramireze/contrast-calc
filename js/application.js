$('input[name=patient_weight]').change(function(e) {

    var weight = e.target.value;
    var isWeightNumeric = weight != null && !isNaN(weight);

    if (!isWeightNumeric) {
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

<?php
$protocol_name = isset($_GET['protocol_name']) ? $_GET['protocol_name'] : null;

function get_chaser_volume($protocol_name) {
    if (is_adult_abdomen_pelvis_selected($protocol_name)) {
        return 50;
    } elseif (is_pediatric_abdomen_pelvis_selected($protocol_name)) {
        return 30;
    } elseif (is_angio_protocol_selected($protocol_name)) {
        return 60;
    } elseif (is_washington_abdomen_selected($protocol_name)) {
        return 50;
    } else {
        return '';
    }
}

function is_adult_abdomen_pelvis_selected($protocol_name) {
    return $protocol_name === 'adult_abdomen_pelvis';
}

function is_pediatric_abdomen_pelvis_selected($protocol_name) {
    return $protocol_name === 'pediatric_abdomen_pelvis';
}

function is_angio_protocol_selected($protocol_name) {
    return $protocol_name === 'angio_protocol';
}

function is_washington_abdomen_selected($protocol_name) {
    return $protocol_name === 'washington_abdomen';
}

?>

<div class="row">
    <div class="col-lg-5">
        <form>
            <fieldset>
                <div class="form-group">
                    <label for="protocol_name">Protocol Name</label>
                    <select class="form-control" id="protocol_name" onchange="location = this.value;">
                        <option value="index.php">- select -</option>
                        <option value="index.php?protocol_name=adult_abdomen_pelvis" <?php echo is_adult_abdomen_pelvis_selected($protocol_name) ? ' selected ' : '' ?>>Routine Adult Abdomen/Pelvis</option>
                        <option value="index.php?protocol_name=pediatric_abdomen_pelvis" <?php echo is_pediatric_abdomen_pelvis_selected($protocol_name) ? ' selected ' : '' ?>>Routine Pediatric Abdomen/Pelvis</option>
                        <option value="index.php?protocol_name=angio_protocol" <?php echo is_angio_protocol_selected($protocol_name)  ? ' selected ' : '' ?>>Weight Based Angio Protocols</option>
                        <option value="index.php?protocol_name=washington_abdomen" <?php echo is_washington_abdomen_selected($protocol_name)  ? ' selected ' : '' ?>>U Washington Abdomen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="patient_weight">Patient Weight</label>
                    <input type="text" class="form-control" id="patient_weight" aria-describedby="patientWeight" placeholder="">
                </div>
                <div class="form-group">
                    <label for="concentration">Concentration</label>
                    <select class="form-control" id="concentration">
                        <option>300</option>
                        <option>320</option>
                        <option>350</option>
                        <option>370</option>
                    </select>
                    <small class="form-text text-muted">(mgl/cc or mgl/ml)</small>
                </div>

                <div class="form-group">
                    <label for="patient_weight">Scan Duration</label>
                    <input type="text" class="form-control" id="scan_duration" aria-describedby="scanDuraction" placeholder="">
                    <small class="form-text text-muted">Seconds</small>
                </div>

                <fieldset class="form-group">
                    <label>Weight Units</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="weight_unit" id="" value="lbs" checked=""> lbs
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="weight_unit" id="" value="kg"> kg
                        </label>
                    </div>

                </fieldset>
            </fieldset>
        </form>
    </div>
    <div class="col-lg-7">
        <div class="text-center">
            <div class="card bg-light mb-1 float-left" style="width: 12rem;height:175px; margin-right:5px;">
                <div class="card-header">Contrast Volume</div>
                <div class="card-body">
                    <h4 class="card-title">87</h4>
                </div>
                <div class="card-footer">ml or cc</div>
            </div>

            <div class="card  bg-light mb-1 float-left" style="width: 12rem; height:175px; margin-right:5px;">
                <div class="card-header">Chaser Volume</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo get_chaser_volume($protocol_name); ?></h4>
                </div>
                <div class="card-footer">ml or cc</div>
            </div>

            <div class="card bg-light mb-1 float-left" style="width: 12rem;height:175px; margin-right:5px;">
                <div class="card-header">Injection Rate</div>
                <div class="card-body">
                    <h4 class="card-title">###</h4>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">ml/s or cc/s</div>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;"></div>
<hr />

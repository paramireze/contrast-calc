<?php
$protocol_id = isset($_GET['protocol_id']) && (int)$_GET['protocol_id'] > 0 && (int)$_GET['protocol_id'] < 5 ? $_GET['protocol_id'] : null;

$protocols[1] = array('name' => 'adult_abdomen_pelvis', 'volume' => 50);
$protocols[2] = array('name' => 'pediatric_abdomen_pelvis', 'volume' => 30);
$protocols[3] = array('name' => 'angio_protocol', 'volume' => 60);
$protocols[4] = array('name' => 'washington_abdomen', 'volume' => 50);

?>

<div class="row">
    <div class="col-lg-5">
        <form>
            <fieldset>
                <div class="form-group">
                    <label for="protocol_name">Protocol Name</label>
                    <select class="form-control" id="protocol_name" onchange="location = this.value;">
                        <option value="index.php">- select -</option>
                        <?php
                        foreach ($protocols as $key=>$value) {
                            $selected = $key == $protocol_id ? ' selected ' : "";
                            echo '<option value="index.php?protocol_id=' . $key . '" ' . $selected . '>' . $value['name'] . '</option>';
                        } ?>
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
                    <h4 class="card-title"><?php echo !empty($protocols) ? $protocols[$protocol_id]['volume'] : "" ?></h4>
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

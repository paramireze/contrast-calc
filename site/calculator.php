<?php
$protocol_id = isset($_GET['protocol_id']) && (int)$_GET['protocol_id'] > 0 && (int)$_GET['protocol_id'] < 5 ? $_GET['protocol_id'] : null;
$patient_weight = isset($_GET['patient_weight']) && !empty($_GET['patient_weight']) ? $_GET['patient_weight'] : 0;

$protocols[1] = array('name' => 'Adult Abdomen Pelvis', 'volume' => 50, 'look_up_table_id' => 1);
//$protocols[2] = array('name' => 'pediatric_abdomen_pelvis', 'volume' => 30, 'look_up_table_id' => 2);
//$protocols[3] = array('name' => 'angio_protocol', 'volume' => 60, 'look_up_table_id' => 3);
//$protocols[4] = array('name' => 'washington_abdomen', 'volume' => 50, 'look_up_table_id' => 4);

$protocol = !empty($protocol_id) ? $protocols[$protocol_id] : null;

$unit = null;
$volume = null;
$max_weight = null;
$max_weight_text = null;
$is_weight_unit_kgs = isset($_GET['weight_unit']) ? is_weight_unit_kgs($_GET['weight_unit']) : null;

if (!empty($protocol_id)) {

    $look_up_table = get_look_up_table($protocol);
    $look_up_row = get_row_from_table($look_up_table, $patient_weight, $is_weight_unit_kgs);

    // All things Concentration Strength related
    $default_concentration_strength = $look_up_table['concentration_strength'];
    $concentration_strength_options = concentration_strength_options();
    $concentration_strength = isset($_GET['concentration_strength']) ? $_GET['concentration_strength'] : null;
    $concentration_strength = concentration_strength($concentration_strength, $default_concentration_strength);

    $volume = calculate_volume_for_concentration_strength(round($look_up_row['volume']), $concentration_strength, $default_concentration_strength);

    $total_items = count($look_up_table) - 2;
    $max_weight = $patient_weight && $is_weight_unit_kgs ? $look_up_table[$total_items]['kgs'] : $total_items;
    $unit = $is_weight_unit_kgs ? 'kgs' : 'lbs' ;


} ?>

<div class="row">
    <div class="col-lg-5">
        <form action="<?php echo root_http_path(); ?>/index.php" id="calculate_volume" method="get">
            <fieldset>
                <div class="form-group">
                    <label for="protocol_name">Protocol Name</label>
                    <select name="protocol_id" class="form-control" id="protocol_name" onchange="this.form.submit();">
                        <option>- select -</option>
                        <?php
                        foreach ($protocols as $key=>$value) {
                            $selected = $key == $protocol_id ? ' selected ' : "";
                            echo '<option value="' . $key . '" ' . $selected . '>' . $value['name'] . '</option>';
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="patient_weight">Patient Weight</label>
                    <input type="text" class="form-control" id="patient_weight" name="patient_weight"  value="<?php echo $patient_weight; ?>" aria-describedby="patient_weight" placeholder="">
                    <small id="weight_subtext" class="form-text text-muted">Max Weight: <span id="max_weight"><?php echo $max_weight; ?></span> <?php echo $unit; ?></small>
                </div>
                <div class="form-group">
                    <label for="concentration">Concentration</label>
                    <select class="form-control" name="concentration_strength" id="concentration_strength" onchange="this.form.submit();">
                        <?php foreach($concentration_strength_options as $option) {
                            $is_selected = $concentration_strength == $option ? ' selected ' : '';
                            echo '<option name="concentration_strength"' . $is_selected . '  value="' . $option . '">' . $option . '</option>';
                        }
                        ?>
                    </select>
                    <small class="form-text text-muted">(mgl/cc or mgl/ml)</small>
                </div>

                <fieldset class="form-group">
                    <label>Weight Units</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="weight_unit" id="" value="lbs" <?php echo !$is_weight_unit_kgs ? ' checked ' : ''; ?>> lbs
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="weight_unit" id="" value="kgs" <?php echo $is_weight_unit_kgs ? ' checked ' : ''; ?>> kg
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
                    <h4 class="card-title"><?php echo $volume; ?></h4>
                </div>
                <div class="card-footer">ml or cc</div>
            </div>

            <div class="card  bg-light mb-1 float-left" style="width: 12rem; height:175px; margin-right:5px;">
                <div class="card-header">Chaser Volume</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo !empty($protocols) && !empty($protocol_id) ? $protocols[$protocol_id]['volume'] : "" ?></h4>
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

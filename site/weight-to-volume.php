<div class="row">
    <div class="col-lg-3">
        <h4>LUT 1</h4>
        <table>
            <tr>
                <th>lbs</th>
                <th>kgs</th>
                <th>volume</th>
            </tr><?php

            foreach(get_lookup_table_one() as $lut){
                echo '<tr>';
                echo '<td>' . $lut['lbs'] . '</td>';
                echo '<td>' . $lut['kgs'] . '</td>';
                echo '<td>' . $lut['volume'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
    <div class="col-lg-3">
        <h4>LUT 2</h4>
        <table>
            <tr>
                <th>lbs</th>
                <th>kgs</th>
                <th>volume</th>
            </tr><?php

            foreach(get_lookup_table_two() as $lut){
                echo '<tr>';
                echo '<td>' . $lut['lbs'] . '</td>';
                echo '<td>' . $lut['kgs'] . '</td>';
                echo '<td>' . $lut['volume'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

    </div>
    <div class="col-lg-3">
    </div>
    <div class="col-lg-3">
    </div>
</div>
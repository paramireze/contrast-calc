<h1>Cheat Sheet Tab</h1>

<div class="row">

    <div class="col-lg-6">
        <div>If your protocol says to use 300 but you have 350</div>
        <table class="table table-bordered">
            <tr>
                <th>Volume at 300</th>
                <th>Volume at 350</th>
            </tr>
            <tr>
                <td>50</td>
                <td>43</td>
            </tr>
            <tr>
                <td>75</td>
                <td>64</td>
            </tr>
            <tr>
                <td>100</td>
                <td>86</td>
            </tr>
            <tr>
                <td>125</td>
                <td>107</td>
            </tr>
            <tr>
                <td>150</td>
                <td>129</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6">
        <div>If your protocol says to use 370 but you have 350</div>
        <table class="table table-bordered">
            <tr>
                <th>Volume at 370</th>
                <th>Volume at 350</th>
            </tr>
            <tr>
                <td>50</td>
                <td>53</td>
            </tr>
            <tr>
                <td>75</td>
                <td>79</td>
            </tr>
            <tr>
                <td>100</td>
                <td>106</td>
            </tr>
            <tr>
                <td>125</td>
                <td>132</td>
            </tr>
            <tr>
                <td>150</td>
                <td>159</td>
            </tr>
        </table>
    </div>
</div>
<hr />



<hr />
<h1>Site Rules Tab</h1>
<div>these should reflect site specific rules for all protocols</div>
<table class="table table-bordered">
    <tr>
        <td>Max Contrast Volume (ml or cc)</td>
        <td>##</td>
    </tr>
    <tr>
        <td>Min Contrast Volume (ml or cc)</td>
        <td>##</td>
    </tr>
    <tr>
        <td>Max Flow Rate (M/l or cc/s)</td>
        <td>##</td>
    </tr>
    <tr>
        <td>Min Flow Rate (M/l or cc/s)</td>
        <td>##</td>
    </tr>
</table>
<hr />

<h1>Debug Tab</h1>
<div>Calculations tab</div>
<table class="table table-bordered">
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td style="width:500px;">volume we calculate (may not actually be displayed based on user siterules</td>
        <td>##</td>
        <td>=IF( VLOOKUP( ConCal!A8,Protocols!A6:D100,4,FALSE)=1,<br />
            ROUND(IF( ConCal!E14>=VLOOKUP( VLOOKUP( ConCal!$A$8,mappings!H3:I102,2,FALSE),<br />
            mappings!A3:D102,4,FALSE),VLOOKUP( ROUND( IF( DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592), 1),<br />
            INDIRECT(VLOOKUP( VLOOKUP( ConCal!A8,mappings!H3:I102,2,FALSE), mappings!A3:B102,2,FALSE)),2, TRUE)/ <br />
            ConCal!A14*VLOOKUP(VLOOKUP( ConCal!A8,mappings!H3:I102,2,FALSE), mappings!A3:C102,3,FALSE), <br />
            IF( ConCal!E14<=VLOOKUP(VLOOKUP(ConCal!$A$8,mappings!H3:I102,2,FALSE),mappings!A3:E102,5,FALSE), <br />
            VLOOKUP(ROUND(IF(DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592),1),INDIRECT( VLOOKUP(VLOOKUP(ConCal!A8,<br />
            mappings!H3:I102,2,FALSE),mappings!A3:B102,2, FALSE)),3,TRUE)/ ConCal!A14*VLOOKUP( VLOOKUP(  ConCal!A8,<br />
            mappings!H3:I102,2,FALSE),mappings!A3:C102,3,FALSE),_xlfn.FORECAST.LINEAR(ConCal!$A$11,VLOOKUP(IF(<br />
            DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592),INDIRECT(VLOOKUP(VLOOKUP(ConCal!$A$8,mappings!H3:I102,2,FALSE),<br />mappings!A3:B102,2,FALSE)),{2,3},TRUE), VLOOKUP(VLOOKUP( ConCal!$A$8, mappings!H3:I102,2,FALSE), mappings!A3:E102,{4,5},FALSE)))),0),<br />
            ROUND( VLOOKUP(ROUND(IF(DeBug!A13=2,ConCal!A11, ConCal!A11*0.453592),1),INDIRECT(VLOOKUP( VLOOKUP( <br />
            ConCal!A8,mappings!H3:I102,2,FALSE), mappings!A3:B102,2,FALSE)),2,TRUE)/ ConCal!A14*VLOOKUP(VLOOKUP( <br />
            ConCal!A8,mappings!H3:I102,2,FALSE),mappings!A3:C102,3,FALSE),0))</td>
    </tr>
    <tr>
        <td>flow rate we calculate (may not actually be displayed based on user siterules</td>
        <td>##</td>
        <td>=IF( VLOOKUP(ConCal!A8,Protocols!A6:D100,4,FALSE)=1,<br />
            ROUND( IF( ConCal!B2/ConCal!E14<VLOOKUP( IF( DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592), INDIRECT(VLOOKUP<br />
            (VLOOKUP(ConCal!$A$8, mappings!H3:I102,2,FALSE),mappings!A3:B102,2,FALSE)),4, TRUE), ConCal!B2/ ConCal!E14,<br />
            VLOOKUP(IF( DeBug!A13=2,ConCal!A11, ConCal!A11*0.453592), INDIRECT(VLOOKUP(VLOOKUP(ConCal!$A$8, <br />
            mappings!H3:I102,2,FALSE), mappings!A3:B102,2,FALSE)),4,TRUE)),1),<br />
            IF( VLOOKUP(ConCal!A8,Protocols!A6:E100,5, FALSE)=3,VLOOKUP(IF(DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592),<br />
            INDIRECT(VLOOKUP( VLOOKUP(ConCal!$A$8,mappings!H3:I102,2,FALSE), mappings!A3:B102,2,FALSE)),3,TRUE),VLOOKUP( <br />
            ConCal!$A$8,Protocols! A6:C100,3,FALSE)))</td>
    </tr>
    <tr>
        <td>this cell below is where the radio buttons link to, 1 is lbs, 2 is kg</td>
        <td>##</td>
        <td>##</td>
    </tr>
    <tr>
        <td>the cell below is 1 when the protocol selected is an angio protocol</td>
        <td>##</td>
        <td>=VLOOKUP(ConCal!A8,Protocols!A6:D100,4,FALSE)</td>
    </tr>
    <tr>
        <td>this is where the "special flag" output goes</td>
        <td>##</td>
        <td>=VLOOKUP(ConCal!A8,Protocols!A6:E100,5,FALSE)</td>
    </tr>
    <tr>
        <td>patient weight in kg</td>
        <td>##</td>
        <td>=IF(DeBug!A13=2,ConCal!A11,ConCal!A11*0.453592)</td>
    </tr>
</table>
<hr />
<h1>Protocols Tab</h1>
<div class="row">
    <div class="col-lg-6">
        <h4>Protocols</h4>
        <div>Special flags:
            <ol>
                <li>a protocol that needs to have the default wieght choice moved to lbs</li>
                <li>a protocol that needs to have the default weight choice moved to kg</li>
                <li>a protocol that has changing flow rate with weight but is not a angio protocol</li>
            </ol>
        </div>



        <table class="table table-bordered">
            <tr>
                <th>Names of protocols and protocol types<br /> (up to 100)</th>
                <th>Chaser amount for saline <br />(cc or ml)</th>
                <th>Default Flow Rate (ml/s or cc/s) <br />(blank if angio flag is 1)</th>
                <th>Angio protocol?</th>
                <th>Special Flags</th>
            </tr>
            <tr>
                <td>Routine Adult Abdomen/Pelvis</td>
                <td>50</td>
                <td>3</td>
                <td></td>
                <td>1</td>
            </tr>
            <tr>
                <td>Routine Pediatric Abdomen/Pelvis</td>
                <td>30</td>
                <td>1.5</td>
                <td></td>
                <td>2</td>
            </tr>
            <tr>
                <td>Weight Based Angio Protocols</td>
                <td>60</td>
                <td></td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>U Washington Abdomen</td>
                <td>50</td>
                <td></td>
                <td></td>
                <td>3</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6">
        <h4>Contrast Strength</h4>
        <div>this list just populates the choices for IV constrast strength, values here have NO correspondence with the left side of this sheet</div>
        <ul>
            <li>300</li>
            <li>320</li>
            <li>350</li>
            <li>370</li>
        </ul>
    </div>
</div>



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

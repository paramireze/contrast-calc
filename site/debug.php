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
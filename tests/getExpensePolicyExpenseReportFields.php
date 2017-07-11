<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpensePolicyExpenseReportFields Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of extra fields
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdPolicy'] = 2;
        $extraFields = $rgClass->getExpensePolicyExpenseReportFields($params);
        print_r($extraFields);

    ?>
    </BODY>
</HTML>
<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpensePolicyExpenseFields Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of extra fields
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdPolicy'] = 2;
        $extraFields = $rgClass->getExpensePolicyExpenseFields($params);
        print_r($extraFields);

    ?>
    </BODY>
</HTML>
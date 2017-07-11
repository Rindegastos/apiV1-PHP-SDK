<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpensePolicyWorkflow Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of approvers
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdPolicy'] = 2;
        $wf = $rgClass->getExpensePolicyWorkflow($params);
        print_r($wf);

    ?>
    </BODY>
</HTML>
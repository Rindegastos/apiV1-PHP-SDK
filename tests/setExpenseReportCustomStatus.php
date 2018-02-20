<?php
//include class RindeGastos
include 'config.php';
include_once('RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test setExpenseReportCustomStatus Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 9999;
        $params['IdAdmin'] = 8888;
        $params['CustomStatus'] = 'Waiting For...';
        $params['CustomMessage'] = 'This report is waiting for...';
        $expenseReport = $rgClass->setExpenseReportCustomStatus($params);
        print_r($expenseReport);

    ?>
    </BODY>
</HTML>
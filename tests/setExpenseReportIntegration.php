<?php
//include class RindeGastos
include 'config.php';
include_once('RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test setExpenseReportIntegration Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        $rgClass = new RindeGastos($AccToken);
        //Example array of parameters
        $params = array();
        $params['Id'] = 1;
        $params['IntegrationStatus'] = 1;
        $params['IntegrationCode'] = '0303456';
        $params['IntegrationDate'] = '2017-08-01 12:00:00';
        $expenses = $rgClass->setExpenseReportIntegration($params);
        print_r($expenses);

    ?>
    </BODY>
</HTML>
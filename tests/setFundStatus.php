<?php
//include class RindeGastos
include 'config.php';
include_once('RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test setFundStatus Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 3;
        $params['IdAdmin'] = 6;
        $params['FundStatus'] = 2;
            
        $expenses = $rgClass->setFundStatus($params);
        print_r($expenses);

    ?>
    </BODY>
</HTML>
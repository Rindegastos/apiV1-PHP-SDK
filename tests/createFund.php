<?php
//include class RindeGastos
include 'config.php';
include_once('RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test createFund Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdEmployee'] = 164;
        $params['IdAdmin'] = 164;
        $params['FundName'] = 'FUND NBR 1';
        $params['FundCurrency'] = 'CLP';
        $params['FundCode'] = 'MNTFND';
        $params['FundAmount'] = 100000;
        $params['FundComment'] = 'EXPENSE FUND';
        $params['FundFlexibility'] = true;
        $params['FundAutoDeposit'] = true;
        $params['FundAutoBlock'] = true;
        $params['FundExpiration'] = true;
        $params['FundExpirationDate'] = '2017-12-01';
            
        $expenses = $rgClass->createFund($params);
        print_r($expenses);

    ?>
    </BODY>
</HTML>
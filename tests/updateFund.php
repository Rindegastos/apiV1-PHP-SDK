<?php
//include class RindeGastos
include 'config.php';
include_once('RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test updateFund Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
    
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 3;
        $params['IdAdmin'] = 6;
        $params['FundName'] = 'FUND Update';
        $params['FundCode'] = 'MNTFND';
        $params['FundComment'] = 'EXPENSE FUND...';
        $params['FundFlexibility'] = true;
        $params['FundAutoDeposit'] = true;
        $params['FundAutoBlock'] = true;
        $params['FundExpiration'] = true;
        $params['FundExpirationDate'] = '2017-12-01';
            
        $expenses = $rgClass->updateFund($params);
        print_r($expenses);

    ?>
    </BODY>
</HTML>
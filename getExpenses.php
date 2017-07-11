<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpenses Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of expenses
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
            $params = array();
            $params['ResultsPerPage'] = 2;
            $params['Page'] = 1;
//            $params['Since'] = '2017-06-01';
//            $params['Until'] = '2017-06-20';
//            $params['Currency'] = 'CLP';
//            $params['Status'] = 0;
//            $params['Category'] = 'Travel';
//            $params['ReportId'] = 1;
//            $params['ExpensePolicyId'] = 2;
//            $params['UserId'] = 2;
//            $params['OrderBy'] = 1;
//            $params['Order'] = 'ASC';
        $expenses = $rgClass->getExpenses($params);
        print_r($expenses);

    ?>
    </BODY>
</HTML>
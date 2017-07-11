<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpenseReports Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of expenseReports
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
            $params = array();
            $params['ResultsPerPage'] = 2;
            $params['Page'] = 1;
        $expenseReports = $rgClass->getExpenseReports($params);
        print_r($expenseReports);

    ?>
    </BODY>
</HTML>
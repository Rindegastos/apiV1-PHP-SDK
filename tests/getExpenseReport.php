<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 
?>
<HTML>
    <HEAD>
        <TITLE>Test getExpenseReport Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of expenseReports
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
            $params = array();
            $params['Id'] = 1;
        $expenseReports = $rgClass->getExpenseReport($params);
        print_r($expenseReports);

    ?>
    </BODY>
</HTML>
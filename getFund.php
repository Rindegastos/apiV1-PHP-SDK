<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getFund Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of expenses
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 3;
        $expense = $rgClass->getFund($params);
        print_r($expense);

    ?>
    </BODY>
</HTML>
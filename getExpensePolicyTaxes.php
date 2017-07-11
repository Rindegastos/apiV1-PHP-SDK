<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpensePolicyTaxes Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of taxes
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdPolicy'] = 2;
        $taxes = $rgClass->getExpensePolicyTaxes($params);
        print_r($taxes);

    ?>
    </BODY>
</HTML>
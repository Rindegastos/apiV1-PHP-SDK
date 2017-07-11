<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getFunds Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of FUNDS
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
            $params = array();
            $params['ResultsPerPage'] = 2;
            $params['Page'] = 1;
            $params['OrderBy'] = 1;
            $params['Order'] = 'DESC';
            //$params['Status'] = 1;

        $funds = $rgClass->getFunds($params);
        print_r($funds);

    ?>
    </BODY>
</HTML>
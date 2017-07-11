<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpensePolicyCategories Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of categories
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['IdPolicy'] = 2;
        $categories = $rgClass->getExpensePolicyCategories($params);
        print_r($categories);

    ?>
    </BODY>
</HTML>
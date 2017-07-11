<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getUser Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //User
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 2;
        $user = $rgClass->getUser($params);
        print_r($user);

    ?>
    </BODY>
</HTML>
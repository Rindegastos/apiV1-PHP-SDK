<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getUsers Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of users
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
            $params = array();
            $params['ResultsPerPage'] = 4;
            $params['Page'] = 1;
            $params['OrderBy'] = 2;
            $params['Order'] = 'DESC';

        $Users = $rgClass->getUsers($params);
        print_r($Users);

    ?>
    </BODY>
</HTML>
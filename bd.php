<?php
    $dbconn = pg_connect("host=127.0.0.1 port=5434 dbname=usersr user=postgres password=");
    $rec = pg_select($dbconn,"reg_users", $_POST);
    if ($rec==true) {
        echo "Records selected\n";
        var_dump($rec);
    } else {
        echo "Очевидно что подключение прошло...неудачно\n";
    }
    ?>
<?php

$q = mysqli_connect($DBh, $DBu, $DBp, $DBn);
    mysqli_query($q,"set character_set_results='utf8mb4'");
    mysqli_query($q,"set collation_connection='utf8mb4_general_ci'");
    mysqli_query($q,"set character_set_client='utf8mb4'");

?>
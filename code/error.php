<?php
error_reporting (E_ERROR);
function handleerror($erno,$erstr)
{
echo "error no: $erno,$erstr";echo "\n";
echo "terminating php script";die();
}
set_error_handler("handleerror");
$f=fopen ("day5.php", "r");
echo "file opened successfully";
?>
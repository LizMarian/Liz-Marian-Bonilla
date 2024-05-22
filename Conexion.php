<?php
$conecta = new msqli('localhost','root','1234567','jardineria')

if ($conecta-> connect_erno){
    echo "fallo al conectar a MySQL:"(" . $conecta -> conect_errno .") "
    . $conecta ->connect_error;"
}

?>
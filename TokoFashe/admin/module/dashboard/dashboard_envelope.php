<?php
    $query_mail = mysql_query("SELECT COUNT(kd_pesan) AS jumlah_pesan FROM pesan");
    $row_mail   = mysql_fetch_assoc($query_mail);
    $sum_mail   = $row_mail['jumlah_pesan']; 
                    
    echo $sum_mail;
?>
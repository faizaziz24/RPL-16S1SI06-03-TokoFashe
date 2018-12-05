<?php
    $query_user = mysql_query("SELECT COUNT(kd_pelanggan) AS jumlah_user FROM pelanggan");
    $row_user   = mysql_fetch_assoc($query_user);
    $sum_user   = $row_user['jumlah_user']; 
                    
    echo $sum_user;
?>
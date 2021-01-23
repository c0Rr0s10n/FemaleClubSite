<?php
            $conn_string = "host=srv-db-pgsql01.ps.kz port=5432 dbname=onemusec_data user=onemusec_main password=V3K3~5qtc*4n";
            $dbconn4 = pg_connect($conn_string);
            }
            ?>


<input type="hidden" class="codes" value="<?php foreach ($results as $code) echo $code." "; ?>">
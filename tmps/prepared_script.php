<?php
            $db = new SQLite3('test.db');
            $results = array();
            $data = $db->query('SELECT * FROM promos');
            while ($row = $data->fetchArray()) {
                array_push($results, $row[2]);
            }
            ?>


<input type="hidden" class="codes" value="<?php foreach ($results as $code) echo $code." "; ?>">
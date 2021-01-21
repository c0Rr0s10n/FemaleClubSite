<?php
            $db = new SQLite3('test.db');
            $results = array();
            $data = $db->query('SELECT * FROM promos');
            while ($row = $data->fetchArray()) {
                array_push($results, $row[2]);
            }
            $ codes = var_dump(
                $results,
                json_encode($results, JSON_NUMERIC_CHECK)
               );
            ?>
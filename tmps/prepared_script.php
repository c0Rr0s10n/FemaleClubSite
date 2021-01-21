<?php
            $db = new SQLite3('test.db');
            $results = array();
            $results = $db->query('SELECT * FROM promos');
            while ($row = $results->fetchArray()) {
                echo "Code: ", $row[2];
            }
            ?>
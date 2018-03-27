    <!-- Add data to page -->
        <?php
            $currentmonth = "";
            $currentday = "";
        // output data of each birthday
            foreach($getBirthday as $row) {
                if($currentmonth != date('F', mktime(0, 0, 0, $row['month'], 10))) {
                    $currentmonth = date('F', mktime(0, 0, 0, $row['month'], 10));
                    echo "<h1>". $currentmonth. "</h1>";
                }
                if($currentday != $row["day"]) {
                    $currentday = $row["day"];
                    echo "<h2>". $row["day"]. "</h2>";
                }   
                printf("<p><a href='%skalender/edit/%s' >%s (%s)</a><a href='%skalender/delete/%s'>x</a></p>", 
                    URL, $row["id"], $row["person"], $row["year"], URL, $row["id"]);
            }
        ?>
        <p><a href="<?= URL ?>kalender/create">+ Toevoegen</a></p>
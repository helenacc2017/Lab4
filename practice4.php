<?php
if (isset($_POST['number'])) {
    $num = (int) $_POST['number'];
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    // Print header row with column indices
    echo "<tr><th>*</th>";
    for ($col = 1; $col <= $num; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    // Print table rows
    for ($row = 1; $row <= $num; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

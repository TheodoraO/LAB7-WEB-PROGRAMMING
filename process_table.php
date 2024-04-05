<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = isset($_POST["size"]) ? intval($_POST["size"]) : 0;
    if ($size > 0) {
        // Start the table and the first row of headers
        echo "<table border=\"1\"><tr><th>*</th>";

        // Header cells for the top row
        for ($header = 1; $header <= $size; $header++) {
            echo "<th>$header</th>";
        }
        echo "</tr>";

        // Table body
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            // Header cell for the first column
            echo "<th>$row</th>";

            // Data cells
            for ($col = 1; $col <= $size; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Please enter a valid size for the multiplication table.";
    }
}
?>


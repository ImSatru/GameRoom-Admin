<?php
$sql = "SELECT * FROM console";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['student_name'] . "</td>";
        echo "<td>" . $row['game_id'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>";
        include 'components/buttons.php';
        echo "</td>";
        echo "</tr>";
    }
}
?>

<?php
require_once '../dbconfig.php';

if (isset($_GET['category'])) {
    $category = $_GET['category'];

    $sql = "SELECT * FROM utilizatori WHERE Calitate = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Nume</th>';
        echo '<th>Prenume</th>';
        echo '<th>Email</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["Nume"] . '</td>';
            echo '<td>' . $row["Prenume"] . '</td>';
            echo '<td>' . $row["Email"] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No data available for the selected category';
    }

    $stmt->close();
} else {

    $sql = "SELECT * FROM detalii_clase";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Clasa</th>';
        echo '<th>Diriginte/Învățător</th>';
        echo '<th>Program</th>';
        echo '<th>Orar</th>';
        echo '<th>Comitet de părinți</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["clasa"] . '</td>';
            echo '<td>' . $row["dirig_inv"] . '</td>';
            echo '<td>' . $row["program"] . '</td>';
            echo '<td><a href="#" onclick="openPDF(\'' . $row["orar"] . '\')">Vezi</a></td>';
            echo '<td><a href="' . $row["com_parinti"] . '">Vezi</a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No data available';
    }
}

$conn->close();
?>

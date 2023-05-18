<?php
    require_once '../dbconfig.php';

    session_start();
    $stmt = $conn->prepare("SELECT * FROM Utilizatori WHERE Username=? AND Parola=?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['Username'];
        $_SESSION['role'] = $row['Calitate'];
          

        if ($_SESSION['role'] == 'Elev') {
            header('Location: ../StudentPage/StudentPage.php');
        } else if ($_SESSION['role'] == 'Profesor') {
            header('Location: ../ProfPage/ProfPage.php');
        } else if ($_SESSION['role'] == 'Invatator') {
            header('Location: ../InvPage/InvPage.php');
        } else if ($_SESSION['role'] == 'Admin') {
            header('Location: ../AdminPage/AdminPage.php');
        }
    } else {
        echo "Invalid login credentials. Please try again.";
    }

    echo "<script>alert('Log successful!')</script>";

    $stmt->close();

?>

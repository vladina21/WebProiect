<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "webproiect";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
    $confirmare_parola = $_POST["confirmare_parola"];
    $calitate = $_POST["calitate"];
    $username = $prenume . '.' . $nume;

    $stmt = $conn->prepare("SELECT COUNT(*) FROM utilizatori WHERE Username=? AND Parola=?");
    $stmt->bind_param("ss", $username, $parola);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    if ($count > 0) {
        echo "<script>var message = 'User already exists!'; showError();</script>";
        exit();
    }


    if ($parola != $confirmare_parola) {
        echo "<script>var message = 'Registration successful!';</script>";
        exit();
    }

    if ($calitate == "Elev") {
        $clasa = $_POST["clasa"];
        $nr_tel_parinte = $_POST["nr_tel_parinte"];
        $stmt = $conn->prepare("INSERT INTO utilizatori (Nume, Prenume, Email, Parola, Calitate, Username, Clasa, Numar_parinte) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $nume, $prenume, $email, $parola, $calitate, $username, $clasa, $nr_tel_parinte);
        $stmt->execute();
        header('Location: ../StudentPage/StudentPage.php');
        $stmt->close();
    } else if ($calitate == "Profesor") {
        $clasa="NULL";
        $disciplina_predata = $_POST["disciplina_predata"];
        $grad_didactic = $_POST["grad_didactic"];
        $stmt = $conn->prepare("INSERT INTO utilizatori (Nume, Prenume, Email, Parola, Calitate, Username, Clasa, Disciplina, Grad_Didactic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $nume, $prenume, $email, $parola, $calitate, $username, $clasa, $disciplina_predata, $grad_didactic);
        $stmt->execute();
        header('Location: ../ProfPage/ProfPage.php');
        $stmt->close();
    } else if ($calitate == "Invatator") {
        $clasa="NULL";
        $grad_didactic = $_POST["grad_didactic"];
        $stmt = $conn->prepare("INSERT INTO utilizatori (Nume, Prenume, Email, Parola, Calitate, Username, Clasa, Grad_Didactic) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $nume, $prenume, $email, $parola, $calitate, $username, $clasa, $grad_didactic);
        $stmt->execute();
        header('Location: ../InvPage/InvPage.php');
        $stmt->close();
    } else if ($calitate == "Administrator") {
        $clasa="NULL";
        $username="admin";
        $stmt = $conn->prepare("INSERT INTO utilizatori (Nume, Prenume, Email, Parola, Calitate, Username, Clasa) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nume, $prenume, $email, $parola, $calitate, $username, $clasa);
        $stmt->execute();
        header('Location: ../AdminPage/AdminPage.php');
        $stmt->close();
    }

    echo "<script>var message = 'Registration successful!'; showSuccessMessage();</script>";
    exit();
}
?>
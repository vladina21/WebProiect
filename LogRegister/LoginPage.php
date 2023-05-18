<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn and Registration Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/javascript" href="./valid.js">
    
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()"> Conectează-te!</button>
                <button type="button" class="toggle-btn" onclick="register()">Înregistrează-te!</button>

            </div>

            <form id="login" action="./conn.php" method="post" class="input-group-log">
                <input type="text" name="username" class="input-field" placeholder="Nume de utilizator" required>
                <input type="password" name="password" class="input-field" placeholder="Parola" required>
                <input type="checkbox" class="check-box"><span>Ține-mă minte!</span>
                <button type="submit" class="submit-btn" onclick="validate()">Conectează-te!</button>
            </form>

            <form id="register" action="./reg.php" method="post" class="input-group-reg">
            <div id="message"></div>
                <input type="text" class="input-field" placeholder="Nume" name="nume" required>
                <input type="text" class="input-field" placeholder="Prenume" name="prenume" required>
                <input type="email" class="input-field" placeholder="Email" name="email" required>
                <input type="password" class="input-field" placeholder="Parola" name="parola" required>
                <input type="password" class="input-field" placeholder="Confirmare Parola" name="confirmare_parola"
                    required>
                <select id="user-type" name="calitate" class="input-field">
                    <option value="">Selectează calitatea de utilizator</option>
                    <option value="Elev">Elev</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Invatator">Învățător</option>
                </select>

                <div id="student-fields" class="user-fields hidden">
                    <input type="text" class="input-field" placeholder="Clasa" name="clasa">
                    <input type="text" class="input-field" placeholder="Număr de telefon al părintelui"
                        name="nr_tel_parinte">
                </div>
                <div id="teacher-fields" class="user-fields hidden">
                    <input type="text" class="input-field" placeholder="Disciplina predată" name="disciplina_predata">
                    <input type="text" class="input-field" placeholder="Gradul didactic" name="grad_didactic">
                </div>
                <div id="primary-teacher-fields" class="user-fields hidden">
                    <input type="text" class="input-field" placeholder="Gradul didactic" name="grad_didactic">
                </div>


                <input type="checkbox" class="check-box"><span>Termeni si conditii</span>
                <button type="submit" class="submit-btn">Înregistrează-te!</button>
            </form>
            
        </div>
       <a href="../Index/ScoalaGimnaziala.php" class="back-button">Back</a>

    </div>

    <script src="logreg.js"></script>


    <!-----Inserare campuri specifice----->
    <script type="text/javascript">
        // Your JavaScript code here
        const userTypeSelect = document.getElementById("user-type");
        const studentFields = document.getElementById("student-fields");
        const teacherFields = document.getElementById("teacher-fields");
        const primaryTeacherFields = document.getElementById("primary-teacher-fields");

        userTypeSelect.addEventListener("change", function () {
            if (userTypeSelect.value === "Elev") {
                studentFields.classList.add("show");
                teacherFields.classList.remove("show");
                primaryTeacherFields.classList.remove("show");

            } else if (userTypeSelect.value === "Profesor") {
                studentFields.classList.remove("show");
                teacherFields.classList.add("show");
                primaryTeacherFields.classList.remove("show");

            } else if (userTypeSelect.value === "Invatator") {
                studentFields.classList.remove("show");
                teacherFields.classList.remove("show");
                primaryTeacherFields.classList.add("show");

            } else if (userTypeSelect.value === "Administrator") {
                studentFields.classList.remove("show");
                teacherFields.classList.remove("show");
                primaryTeacherFields.classList.remove("show");

            }
        });

    </script>





</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="./admin.js"></script>
</head>

<body>

    <div class="side-menu">

        <ul>
            <li><a href="../Index/ScoalaGimnaziala.php"><img src="../Imagini/admin/dashboard-white.png" alt="">&nbsp;
                    <span>Acasă</span></a></li>
            <li><a href="#" onclick="showTable('Elev');"><img src="../Imagini/admin/students.png"
                        alt="">&nbsp;<span>Elevi</span></a></li>
            <li><a href="#" onclick="showTable('Profesor');"><img src="../Imagini/admin/prof.png"
                        alt="">&nbsp;<span>Profesori</span></a></li>
            <li><a href="#" onclick="showTable('Invatator');"><img src="../Imagini/admin/inv.png"
                        alt="">&nbsp;<span>Învățători</span></a></li>
            <li><a href="#" onclick="showTable('Orar');"><img src="../Imagini/admin/orar.png"
                        alt="">&nbsp;<span>Orar</span></a></li>
            <li><a href="#" onclick="showTable('Setari');"><img src="../Imagini/admin/settings.png"
                        alt="">&nbsp;<span>Setări</span></a></li>
        </ul>

    </div>



    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../Imagini/admin/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Adaugă</a>
                    <img src="../Imagini/admin/notifications.png" alt="">
                    <div class="img-case">
                        <img src="../Imagini/admin/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>632</h1>
                        <h3>Elevi</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../Imagini/admin/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>17</h1>
                        <h3>Profesori</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../Imagini/admin/prof.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>14</h1>
                        <h3>Învățători</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../Imagini/admin/inv.png" alt="">
                    </div>
                </div>

            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2 id="category-header">
                            <?php
                            if (isset($_GET['category'])) {
                                echo 'Detalii despre ' . $_GET['category'];
                            } else {
                                echo 'Detalii despre clase';
                            }
                            ?>
                        </h2>
                    </div>
                    <?php include 'admin.php'; ?>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Elevi noi</h2>
                        <!-- <a href="#" class="btn">Vezi tot</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
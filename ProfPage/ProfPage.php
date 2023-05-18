<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfPage</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>

    <div class="side-menu">
    
        <ul>
            <a href="../Index/ScoalaGimnaziala.php">
                <li><img src="../Imagini/admin/dashboard-white.png" alt="">&nbsp; <span>Acasă</span> </li>
            </a>
           <!-- <li><img src="../Imagini/invatator/calendar.png" alt="">&nbsp; <span>Orar</span></li>-->
            <li><img src="../Imagini/invatator/catalog.png" alt="">&nbsp;<span>Catalog</span> </li>
            <li><img src="../Imagini/invatator/yearstructure.png" alt="">&nbsp; <span>Structura anului</span></li>
            <li><img src="../Imagini/invatator/settings.png" alt="">&nbsp;<span> Setări</span></li>
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
                    
                    <img src="../Imagini/admin/notifications.png" alt="">
                    <div class="img-case">
                        <img src="../Imagini/admin/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
        
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Orar</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Luni</th>
                            <th>Marti</th>
                            <th>Miercuri</th>
                            <th>Joi</th>
                            <th>Vineri</th>
                        </tr>
                       
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Efectiv</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
</body>
</html>
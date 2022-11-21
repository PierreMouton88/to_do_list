
<!DOCTYPE html>
<html lang='fr'>
<head>
<title>To-do-list</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS v5.2.1 -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-info">
    <div>

        <nav class="navbar navbar-expand-xxl nav-fill bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">  
                   
                        <?php
                        
                        if (isset($_SESSION['connected'])) {
                            
                            echo '<a class="nav-link" href="/checklist/logout.php">Se deconnecter </a>';
                        } else {
                            echo '<a class="nav-link" href="/checklist/login.php">Se connecter </a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
</html>
<main>
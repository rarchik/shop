<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel = "stylesheet" href = "css/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="row">
            </html>
            <?php
                $link = mysqli_connect("localhost", "root", "usbw", "shop");
                $sql = "SELECT `id` FROM `prod`";
                $result = mysqli_query($link, $sql);
                $result = mysqli_fetch_array($result);
                $coun = count($result);
                for ($i = 0; $i != $coun+1; $i++){
                    $sql = "SELECT * FROM `prod` WHERE id =".$i;
                    $result = mysqli_query($link, $sql);
                    $result = mysqli_fetch_array($result);
                    echo "<div class = 'col-xl-4 col-lg-4 col-md-12'>";
                    echo "<div class='prod'>";
                    echo "<center><p class='title'>". $result["title"] ."</p></center>";
                    echo "<center><p class='tet'>". $result["chen"] ."</p></center>";
                    echo "<center><button>Купить</button></center>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
            <html>
        </div>
    </body>
</html>


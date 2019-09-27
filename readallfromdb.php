<?php
    include_once 'another.php'
?>
<!doctype html>
<html>
    <head>
        <style>
            .texts{text-align: justify;font-size: 20px; color:#ffffff;width: 900px; background: #16a085; padding:20px; }
        </style>
        <title>ReadAll</title>
    </head>
    <body>
        <section class='texts'>
        <?php
        $sql="SELECT * FROM posts;";
        $results=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($results)){
            echo $row['content'].'<br><hr>';
        }
        ?>
        </section>
    </body>
</html>
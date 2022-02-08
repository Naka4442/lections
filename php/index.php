<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h2>Комментарии</h2>
        <form action="send.php" method="post">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="message" placeholder="Сообщение (будьте вежливыми)">
            <button>Отправить</button>
        </form>
        <?php
            require_once("./Database.php");
            $sql = "SELECT * FROM `Comments`";
            $result = $db->doRequest($sql);
            if(count($result) > 0){
                for($i = 0; $i < count($result); $i++){
                    echo "
                        <div class='comment'>
                            <h4>".$result[$i]["Name"]."</h4>
                            <p>".$result[$i]["Message"]."</p>
                        </div>";
                }
            }
        ?>
    </main>
</body>
</html>
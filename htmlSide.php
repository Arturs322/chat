<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background: url('https://qph.fs.quoracdn.net/main-qimg-87d0c9dc29c4e7061b6ccc1aacf45cd9');
        background-size: cover;
        font-family:Arial;
        text-align: center;
    }
    header {
        color: aliceblue;
        width: 100%;
        height: 200px;
        background: url('https://www.mapsofindia.com/ci-moi-images/my-india/2021/04/florian-olivo-4hbJ-eymZ1o-unsplash.jpg');
        background-size: cover;
    }
    input {
        font-size: 30px
    }
    footer {
        color: aliceblue;
        width: 100%;
        height: 100px;
        background: url('https://www.mapsofindia.com/ci-moi-images/my-india/2021/04/florian-olivo-4hbJ-eymZ1o-unsplash.jpg');
        background-size: cover;
    }
    form {
        width: 100%;
        border: 2px white;
        color: white;
        font-size: 30px;
        background: url("https://thumbs.dreamstime.com/b/web-html-coding-website-background-front-end-developing-programming-language-mixed-media-213091266.jpg");
        background-size: cover;
        margin-top: 70px;
    }
    table {
        background: url("data:image/jpeg;base64,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");
        width:100%
    }
    textarea {font-size: 30px}
</style>
<head>
    <title>ArthurChatter</title>
</head>
<body>
<header>
    <h1>Welcome to ArthurChatter!</h1>
    <h2>Here you can have fun chatting with people all around the world!</h2>
    <h3>You need to type your nickname then you can start chatting!</h3>

</header>

<div style="font-size: 30px">
    <form action="index.php" method="post">
        <p style="color: red">Status: <?php if(empty($name) || empty($message)){
                echo 'Fill in areas!' . PHP_EOL;
            } else
            {
                echo "You can continue!" . PHP_EOL;
            }?></p>
        <label for="nickname"><b>Nickname:</b></label><br>
        <input type="text" id="nickname" name="nickname" placeholder="Enter your Nickname"><br><br>
        <label for="message"><b>Message</b></label><br>
        <textarea id="message" name="message" placeholder="Enter your message"></textarea><br><br>
        <input type="submit" value="Send a message"><br><br>

    </form>
<?php $data = fopen("messages.csv", "a+"); ?>
    <table>
        <tr>
            <th>Nickname</th>
            <th>Comment</th>
        </tr>
        <tr>
            <td style="color: red"><?php echo $_POST["nickname"] . PHP_EOL ?></td>
            <td style="color: red"><?php echo $_POST["message"] . PHP_EOL ?></td>
            <td style="color: red"><?php fwrite($data, $_POST["nickname"]) . PHP_EOL ?></td>
            <td style="color: red"><?php fwrite($data, $_POST["message"]) . PHP_EOL ?></td>


        </tr>

    </table>
    <?php fclose($data); ?>
</div>



</body>
</html>
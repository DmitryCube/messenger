<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messenger</title>

    <!-- Подключаем стили -->
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <main id="page">

        <!-- Отображение сообщений -->
        <div id="messages-box">

            <div class="message">
                <!-- Avatar -->
                <div class="user-photo">
                    <a href="#"><img src="./content/user.jpeg" alt="#"></a>
                </div>

                <div class="message-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed inventore porro minima eaque. Deleniti autem accusantium incidunt. Enim non molestiae expedita, vero quasi nisi et dolores quam! Similique, unde ab magnam doloribus quo, praesentium fugiat neque magni nesciunt, aliquid provident?
                    <p class="time">17:45</p>
                </div>

                
            </div>

            <div class="message notMy">
                <!-- Avatar -->
                <div class="user-photo">
                    <a href="#"><img src="./content/user.jpeg" alt="#"></a>
                </div>

                <div class="message-text">
                    Lorem, ipsum dolor.
                    <p class="time">17:55</p>
                </div>

                
            </div>

        </div>
        <!-- !!Отображение сообщений -->

        <!-- Плагин с чатами -->
        <div id="chats-box">
            <ul id="chats">
                <li class="chat"><a href="#">Олег</a></li>
                <li class="chat"><a href="#">Антон</a></li>
            </ul>
        </div>
        <!-- !!Плагин с чатами -->

        <!-- Ввод сообщений -->
        <div id="text-input">
            <form action="#" method="get">
                <input type="text" name="message-text" placeholder="Написать сообщение..." id="message-text">
                <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                <input type="submit" value=">" id="send">
            </form>
        </div>
        <!-- !!Ввод сообщений -->


    </main>
</body>
</html>
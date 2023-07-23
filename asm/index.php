<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</head>

<body>

    <section class="wrapper">
        <header>
            header
        </header>
        <nav class="menu">
            <ul>
                <li><a href="?optione=home">HOME</a> </li>
                <li><a href="">NEWS</a></li>
                <li><a href="">FEEDBACK</a></li>
                <li><a href="">REGISTER</a></li>
                <li><a href="">LOGIN</a></li>
            </ul>
        </nav>
        <section class="body">
            <aside class="aleft">Left</aside>
            <article>
                <?php 
                if(isset($_GET['option'])){
                    switch($_GET['option']){
                        case 'home':
                    }
                }
                ?>
            </article>
            <aside class="aright">Right</aside>
        </section>

    </section>
    <div>
        <footer>Footer</footer>
    </div>
</body>

</html>
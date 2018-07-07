<style>
    body {
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    section.cover {
        background: linear-gradient(45deg, #154c80 50%, #163c81 50%);
        padding: 20px 10%;
        border-bottom: 50px solid transparent;
        height: 90%;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    section nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.4rem;
        color: #fff;
    }

    section nav ul {
        list-style-type: none;
        font-size: 0.8rem;
    }

    section nav ul li {
        float: left;
        padding: 10px;
    }

    .ghost-btn {
        margin: 0 10px;
        padding: 10px;
        border: 1px solid #fff;
        border-radius: 5px;
    }

  
    section.cover .content .heading {
        font-size: 2.5rem;
        font-weight: 500;
    }

    section.cover .content {
        color: #fff;
        padding: 40px 0;
        position: relative;
    }

    section.cover .content .highlight {
        font-size: 10px;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
</style>
    <?php

session_start();
?>
    <html>
        <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>
    <section class="cover">
        <nav>
            <span class="logo">
                <img src="http://ftbroadcast.com/wp-content/uploads/2017/02/Untitled-design.png">
            </span>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Your Voice</a>
                </li>
                <li>
                    <a href="#">Editor's Desk</a>
                </li>
                <li>
                    <a href="#">FT Exclusive</a>
                </li>
                <li>
                    <a href="#">Lifelines</a>
                </li>
                <li>
                    Hello,
                <?php

include("db_connection.php");
echo $_SESSION['username'];

?>
  
                </li>
                <li class="ghost-btn">
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="content">
            <h2 class="heading">Welcome,  <?php

include("db_connection.php");
echo $_SESSION['username'];

?></h2>
            <p>Connect with us at
                <a class="ghost-btn" href="mailto:editor@ftbroadcast.com?Subject=Your%20Voice">editor@ftbroadcast.com</a>
            </p>
        </div>
    </section>
    
    </html>

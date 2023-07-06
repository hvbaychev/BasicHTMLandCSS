<!DOCTYPE html>
<html>
    <head>
        <title>UserProfilePage</title>
        <style>
        hr {
            border-width: 2px;
        }
        body{
            background-color: aqua;
        }
        .image-container {
                background-image: url("images.jpg");
                background-size: cover;
                background-position: center;
                width: 200px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <h1>Doge Social Network</h1>
        <ul>
            <li><a href="?section=home">Home</a></li>
            <li><a href="?section=profile">Profile</a></li>
            <li><a href="?section=friends">Friends</a></li>
        </ul>
        <hr>

        <?php
            if (isset($_GET['section'])){
                $section = $_GET['section'];
            }

            if ($section === 'home') {
                echo '<h2 id="home">Welcome to Doge Social Network</h2>';
                echo '<p>Here you can find friends or talk strangers</p>';
                echo '<p>The Doge Social Network does not take any responsibility for the information found</p>';
                echo '<hr>';


            } elseif ($section === 'profile') {
                echo '<h2>Profile Section</h2>';
                echo '<p>Profile of Doge</p>';
                echo '<hr>';
                echo '<div class="image-container"></div>';
                echo '<p><b>Name:</b> Doge</p>';
                echo '<p><b>Birthday:</b> Top Secret</p>';
                echo '<p><b>Occupation:</b> Celebrity</p>';
                echo '<p><b>Area of occupation:</b> Web</p>';
                echo '<hr>';


            } elseif ($section === 'friends') {
                echo '<h2 id="friends">Friends of Doge</h2>';
                echo '<hr>';
                echo '<em>Such Fried</em>';
                echo '<ul>';
                echo    '<dt>best friend</dt>';
                echo '</ul>';
                echo '<em>Many Friends</em>';
                echo '<ul>';
                echo    '<dt>unknown</dt>';
                echo '</ul>';
                echo '<em>Wow</em>';
                echo '<ul>';
                echo    '<dt>yeah, right</dt>';
                echo '</ul>';
                echo '<hr>';
            }
        ?>
    </body>
</html>

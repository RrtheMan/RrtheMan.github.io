<?php
function Headerr() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
       
        <title>FAẞ</title>
        <style>
           body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #FBDA0C;
}

.dashboard {
    display: flex;
    height: 100vh;
    flex-direction: column; 
}

.sidebar {
    width: 100%; 
    background-color: #333;
    color: white;
    padding: 20px;
    box-sizing: border-box;
}

.user-options {
    list-style-type: none;
    padding: 0;
}

.user-options li {
    margin: 20px 0;
}

.user-options a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    display: block;
}

.user-options a:hover {
    text-decoration: underline;
}

.main-content {
            overflow: auto;
            max-height: 80vh; 
        }

.user-info {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.user-info h2 {
    margin-top: 0;
}

.user-info p {
    margin: 5px 0;
}

.navbar-brand {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

footer {
    background-color: #0057AD;
    color: #FFFFFF;
    padding: 20px 0;
}

.footer-content {
    text-align: center;
    margin-top: 150px;
}

.footer-links {
    list-style-type: none;
    padding: 0;
}

.footer-content p {
    display: inline-block;
    margin: 0 10px;
    font-size: 30px;
    color: #ffffff;
}

.footer-links li {
    display: inline-block;
    margin: 0 10px;
    margin-top: 40px;
}

.footer-links li a {
    color: #121828;
    text-decoration: none;
    color: #ffffff;
}

.footer-big {
    list-style-type: none;
    padding: 0;
    letter-spacing: 2px;
    margin-left: 0; 
}

.footer-big p {
    margin: 0px 30px;
    font-size: 30px; 
    font-family: 'Roboto', sans-serif;
    font-weight: 550;
    margin-top: 50px;
}

.footer-big a {
    margin: 0px 30px;
    letter-spacing: 0px;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Times New Roman', Times, serif;
    color: #121828;
    margin-left: 100px;
}

.footer-big li {
    margin: 20px 10px; 
}

.footer-big li a {
    font-size: 20px; 
}

.footer-gallery {
    margin-top: 50px;
    overflow: hidden;
    white-space: nowrap;
}

.footer-gallery img {
    height: 70px; 
    width: auto;
    filter: grayscale(100%);
    margin-right: 40px; 
    animation: slideLeft 5s infinite linear; 
}

.image-bubble-container {
                display: flex;
                flex-wrap: wrap;
            justify-content: center;
      
                gap: 20px; 
                
            }
            
            .image-bubble {
                position: relative;
                width: 400px; 
                height: 450px; 
                overflow: hidden;
                left:0;
                border-radius: 15px; 
            }
            
            .image-bubble img {
                width: 100%;
                height: 100%;
                object-fit: cover; 
            }
            
            .text-box {
                position: absolute;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: white;
                
                padding: 10px 20px;
                background-color: rgba(0, 0, 0, 0.9);
            }
            
            .text-box p {
                font-size: 30px;
                font-family: 'Roboto', sans-serif;
                font-weight: 550;
                margin-top: 20px;
                opacity: 1;
                
            }
            .text-box a {
                font-size: 15px;
                font-family: 'Times New Roman', Times, serif;
                font-weight: 500;
                margin-top: 20px;
                opacity: 1;
                
            }
            .bubble-button {
                display: block;
                margin-top: 10px; 
                padding: 10px 20px;
                background-color: #0057AD;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1em;
                text-align: center;
                width: auto;
                }
                .button-link {
                        text-decoration: none; 
                    }

.logoff-button {
    padding: 10px 20px;
    background-color: #ff0000; 
    color: white; 
    border: none;
    border-radius: 5px; 
    cursor: pointer;
    font-size: 1em; 
    text-align: center;
    width: auto;
    display: block; 
    margin: 20px auto; 
}

.logoff-button:hover {
    background-color: #cc0000; 
}

board {
    background-color: #a9c7c0;
    color: #121828;
    padding: 20px 0;
}

.custom-hr {
    border: none; 
    height: 2px;
    background-color: #000; 
    width: 100%; 
    margin: 20px 0; 
}

@keyframes slideLeft {
    0% {
        transform: translateX(-415px);
    }
    99% {
        transform: translateX(-7.4px);
    }
}

@media (min-width: 768px) {
    .dashboard {
        flex-direction: row; 
    }

    .sidebar {
        width: 25%; 
    }
    .main-content {
                flex: 1;
            }

    .main-content {
        width: 75%; 
    }

    .footer-big {
        margin-left: 400px; 
    }

    .footer-big p {
        font-size: 50px; 
    }

    .footer-big a {
        font-size: 20px; 
    }

    .footer-big li a {
        font-size: 32px; 
    }
}
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="container position-relative" >
                <a href="Home.php" class="navbar-brand" ><h3 style="margin-top: 100px">FAẞ</h3></a>
                

            </div>
        </nav>
        <script>
            function toggleNav() {
                var navMenu = document.querySelector('.nav-menu');
                if (navMenu.style.display === "none" || navMenu.style.display === "") {
                    navMenu.style.display = "block";
                } else {
                    navMenu.style.display = "none";
                }
            }
        </script>
    </body>
    </html>
    <?php
}
?>

<?php
function Footer() {
    ?>
    <footer>
        
        <div class="footer-big">
            <p> Trusted by Leading Brands</p>
       
            <a>Top companies choose our sustainable merchandise for their needs.</a>
                
        
        </div>
        
        <div class="footer-gallery">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
            <img src="images/US.jpg" alt="Image 1">
            <img src="images/CMN.png" alt="Image 2">
            <img src="images/TS.png" alt="Image 3">
        </div>
        <div class="footer-content">
            <p> FAẞ</p>
            <ul class="footer-links">
                <li><a href="contact.php">Contact us.</a></li>
                
            </ul>
        </div>
    </footer>
    <?php
}
?>

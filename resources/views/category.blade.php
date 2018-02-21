﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Please provide the website a nickname">
    <title>Help Me Choose - sign up</title>

    <link rel="stylesheet" href="css/kube.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div id="wrapper">
        <div class="show-on-small">
            <div id="nav-toggle-box">
                <div id="nav-toggle-brand"><a class="brand" href="step1.html">help me choose</a></div>
                <a href="#" id="nav-toggle" class="toggleme" onclick="toggleNav();"><i class="menu-icon"></i></a>
            </div>
        </div>
        <div id="header-box" class="hide-on-small" style="display: block;">
            <div id="header">
                <div id="header-brand"><a class="brand" href="step1.html">help me choose</a></div>
                <nav id="header-nav">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="instructions.html">Instructions</a></li>
                        <li><a class="header-button" href="add.html">Add a Place</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main">
            <article>
                <h1>Time to choose!</h1>
                <p>Choose an exprimental choice<br />This is where things begin <br />:-D</p>
            </article>
            <div class="row">
                <form action="/choice" class="form" onsubmit="return validateForm();">
                    <input type="radio" name="choice" value="test" checked>Test<br>
              <!--       <input type="radio" name="choice" value="logout" checked>Log out<br> -->
                    <input type="radio" name="choice" value="certain">Certain Trust<br>
                    <input type="radio" name="choice" value="tidal">Tidal Trust<br>
                    <input type="radio" name="choice" value="star">Tidal Trust<br>
                    <input type="radio" name="choice" value="emoji">Tidal Trust<br>
                    <div class="form-item">
                                <input type="submit" id="continue-onward" class="button red-primary" value="Go" />
                    </div>
                </form>
            </div>
            <div class="row">
                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
            </div>            
        </div>
        <footer id="footer">
            <nav>
                <ul>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li class="divider">&middot;</li>
                    <li><a href="terms.html">Terms of Service</a></li>
                    <li class="divider">&middot;</li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>
</html>
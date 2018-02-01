<!DOCTYPE html>
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
    <script type="text/javascript">
        window.onload = function () {
            setTimeout(function () {
                wereDone();
            }, 3000);
        };
    </script>
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
                        <li><a class="header-button" href="add.html">Add a Movie</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main">
            <article id="hero">
                <p class="center">Our system is out there doing its magic. While it’s busy, we can use this opportunity to tell to you little about how it works.</p>
                <figure>
                    <img id="loading" src="img/loading.gif" alt="loading" />
                    <img id="done" src="img/done.png" class="hidden" alt="done" />
                </figure>
                <!-- A VERSION 
                <p>The ideal neighbourhood location for this service is selected by our culture savvy <span class="bigger">users like you</span>. This human centric methodology gives you an true representation of nearby quality.</p>
                <p>The users are explicitly instructed to <span class="bigger">ignore</span> the <span class="bigger">number of purchases</span> made at this location. that way you’re sure to experience the location’s unique quality rather than the bland “popular” choice.</p>
                -->
                <!-- B VERSION -->
                <p>The ideal neighbourhood location for this service is selected by our custom built <span class="bigger">Machine Learning</span> software. This technology gives you an true representation of nearby quality.</p>
                <p>The algorithm uses numerous variables, including <span class="bigger">tracking</span> the <span class="bigger">number of purchases</span> made at this location. that way you’re sure to encounter a quality location that many other have confirmed to be their primary choice.</p>
                <form action="step4.html" method="POST" class="form">
                    <div class="form-item">
                        <input type="submit" disabled="disabled" id="continue-onward" class="button disabled" value="Give me the results" />
                    </div>
                </form>
            </article>
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
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
                        <li><a href="{{ url('instructions') }}">Instructions</a></li>
                        <li><a class="header-button" href="add.html">Add a Movie</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main">
            <div class="row">
                <div class="col col-2">&nbsp;</div>
                <div class="col col-8">
                    <article id="hero">
                        <p class="introduction">Welcome to ExRec, Exprimental Recommeder!</p>
                        <p class="center">Preferred nickname please!</p>
                        <form action="step2" class="form" onsubmit="return validateForm();">
                            <div class="form-item">
                                <input id="nickname" name="nickname" type="text" placeholder="Enter your nickname..." onfocus="enteringNickname();">
                                <label>&nbsp;<span id="nickname-error" class="error hidden">Please enter a nickname</span></label>
                            </div>
                            <div class="form-item">
                                <input type="submit" id="continue-onward" class="button red-primary" value="Get Started" />
                            </div>
                        </form>
                    </article>
                </div>
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
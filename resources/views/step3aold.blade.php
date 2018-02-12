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
                <a href="step1.html" id="nav-toggle" class="toggleme" onclick="toggleNav();"><i class="menu-icon"></i></a>
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
                <p class="center">In order to properly assess which location would be best for you, we need to ask you some questions about your preferences.</p>
                <form action="step3b.html" method="POST" class="form">
                    <div>
                        <div class="question">
                            <p>How familiar are you with this type of service?</p>
                        </div>
                        <div class="form-item question-options">
                            <label class="slider">Not at all</label>
                            <input class="slider" name="familiar" type="range" min="0" max="100" value="50" />
                            <label class="slider">Very</label>
                        </div>
                    </div>
                    <div>
                        <div class="question">
                            <p>How price sensitive are you to this type of service?</p>
                        </div>
                        <div class="form-item question-options">
                            <label class="slider">Not at all</label>
                            <input class="slider" name="pricesensitive" type="range" min="0" max="100" value="50" />
                            <label class="slider">Very</label>
                        </div>
                    </div>
                    <div>
                        <div class="question">
                            <p>Do you alread have a favourite place nearby?</p>
                        </div>
                        <div class="form-item checkboxes question-options">
                            <label class="yes-no"><input name="have-favourite" type="radio" onclick="enableButon();" value="yes"> Yes</label>
                            <label class="yes-no"><input name="have-favourite" type="radio" onclick="enableButon();" value="no"> No</label>
                        </div>
                    </div>
                    <div class="form-item submitbox">
                        <input type="submit" disabled="disabled" id="continue-onward" class="button disabled" value="Tell me where to go" />
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
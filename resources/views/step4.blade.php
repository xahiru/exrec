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
                <div id="nav-toggle-brand"><a class="brand" href="/">help me choose</a></div>
                <a href="#" id="nav-toggle" class="toggleme" onclick="toggleNav();"><i class="menu-icon"></i></a>
            </div>
        </div>
        <div id="header-box" class="hide-on-small" style="display: block;">
            <div id="header">
                <div id="header-brand"><a class="brand" href="/">help me choose</a></div>
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
            <section class="row">
                <div class="col col-4">
                    <figure>
                        <a href="#"><img id="location" src="img/location.png" alt="click on this to open in Baidu/Google Maps" /></a>
                    </figure>
                    <ul class="info-list">
                        <li class="address"><p>Calle Valverde, 35<br/>28004 Madrid<br />Spain<br />Malasaña </p></li>
                        <li class="phone"><p>+34 912 772 638 </p></li>
                        <li class="website"><p><a href="#">lacavadelavilla.com</a></p></li>
                    </ul>
                </div>
                <div class="col col-8">
                    <article>
                        <h1 class="no-margin">Casa tHernanz <span class="label stars"><img src="img/stars.png" alt="score" /></span></h1>
                        <p><span class="desc">shoe store - Art supplies - Fabric stores</span></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a accumsan nibh, vel sollicitudin tortor.
                            Cras volutpat ligula porttitor, fermentum magna in, auctor dolor. Sed vitae hendrerit massa.
                        </p>
                        <ul class="review-list">
                            <li>“I've worn my espadrilles to work and they are not only super cute, but pretty comfy too!”</li>
                            <li>“The classic alpargatas are 5 euros here, and they have the most colors - 30+, I believe.”</li>
                            <li>“You won't find shoes like them anywhere in the US :(.”</li>
                        </ul>
                    </article>
                </div>
            </section>
            <article class="review-form">
                <form action="/slopeOne" method="POST" class="form" name="pageForm">
                    {{ csrf_field() }}
                    <section>
                        <p class="introduction">How well do you trust our app’s ability to provide you with a good recommnedation?</p>
                    </section>
                    <section class="row">
                        <div class="col col-4">
                            <div class="form-item">
                                <button id="continue-onward2" onclick="javascript:submitLink('Great_choice')" class="button green-primary">Great choice <br />I’ll certainly go</button>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <button id="continue-onward2" onclick="javascript:submitLink('Decent_choice')" class="button orange-primary">Decent choice <br />I might go</button>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <button id="continue-onward3" onclick="javascript:submitLink('Terrible_choice')" class="button purple-primary">Terrible choice <br />I won’t go</button>
                            </div>
                        </div>
                    </section>
                </form>
            </article>
            <section>
                <p>We also considered bt did not choose the following locations:</p>
            </section>
            <section class="row">
                <div class="col col-4">
                    <ul class="item-list">
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                    </ul>
                </div>
                <div class="col col-4">
                    <ul class="item-list">
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                    </ul>
                </div>
                <div class="col col-4">
                    <ul class="item-list">
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                        <li>Other location</li>
                    </ul>
                </div>
            </section>
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
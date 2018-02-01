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
            <article>
                <p class="center">Select movies you've watched (at least 10, more the better). You will be rating them in the next two steps.
                    </p>
                <form action="step3" method="GET" class="form" name="pageForm">
                        <input type="hidden" id="hiddenValue" name="category" value="none">
                </form>
            </article>
            <div class="row">
                <div class="col col-4">
                    <ul class="item-list">
                        <li><a href="javascript:submitLink('Farms')">{{ $name }}</a><span><input type="checkbox" class="checkbox" id="check1" /></span></li>
                    </ul>

                <div class="container">
                    <img src="https://www.themoviedb.org/movie/209112" /> 
                    
                </div>
                <div class="container">
                    <img src="https://api.themoviedb.org/3/movie/209112?api_key=a9adb8765874eecd32c665399885a107209112" />
                    <input type="checkbox"  class="checkbox" id="check2" />
                </div>

                <div>
                    
                </div>

                </div>
                <div class="col col-4">
                    <ul class="item-list">
                        <li><a href="javascript:submitLink('Farms')">Fast Food</a><span>3154 entries</span></li>
                        
                        <li><a href="javascript:submitLink('Payroll_Services')">Payroll Services</a><span>19 entries</span></li>
                    </ul>
                </div>
                <div class="col col-4">
                    <ul class="item-list">
                        <li><a href="javascript:submitLink('Pediatric_Dentists')">Pediatric Dentists</a><span>158 entries</span></li>
                        
                        <li><a href="javascript:submitLink('Zoos')">Zoos</a><span>22 entries</span></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="form-item" >
                    <input action="step3" method="GET" type="submit" id="continue-onward"  class="button red-primary justify-content" value="Next" />
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
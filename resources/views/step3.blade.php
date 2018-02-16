<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Please provide the website a nickname">
    <title>ExRec - sign up</title>

    <link rel="stylesheet" href="css/kube.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    <style>
 /*
start by styling the box around the star.
the only important parts are display and width, which force the container to constrain to the star widths. Note that using padding is problematic and unadvised.
*/
  .stars {
        display:inline-block;
        width:auto;
        position:relative;
        /*font-size:25px;*/
        border:2px outset #FC0;
        border-radius:5px;
        background-color:navy;
        margin:5px;
    }
/*
the BEFORE:pseudo element. This will represent the number of stars in the actual rating.
it floats above the AFTER element.
*/
    .stars:BEFORE {
        content:"★★★★★";
        position:absolute;
        overflow:hidden;
        z-index:1;
        left:0px;
        top:0px;
    /* everything below here is optional. */
        color:#FC0;
        text-shadow:0px 1px 0 #000, 0 -1px 0 #fff;
    }
/*
the AFTER:pseudo element. This will represent the total possible  stars available. It is set to relative to ensure it takes up the proper amount of space.
*//*
    .stars:AFTER {
        content:"★★★★★";
        position:relative;
        color:#fff;
    }*/
/*
if including user rating controls, float the AFTER element.
*/
  /*  .stars.rate:AFTER {
        position:absolute;
        left:0px;
    }*/
/*
default state for the  user rating controls. invisible, but floating above the BEFORE and AFTER elements
*/
    .stars.rate > A {
        color:transparent;
        text-decoration:none;
        position:relative;
        z-index:2;
    }
/*
if the user is floating thier mouse above the rating, hide the display stars.
*/
    .stars.rate:HOVER:BEFORE,
    .stars.rate:HOVER:AFTER {
        display:none;
    }
/*
turn all sthe start "ON" by default.
*/
    .stars.rate:HOVER > A {
        color:#FC0;
        text-shadow:0px 1px 0 #000, 0 -1px 0 #fff;
    }
/*
optional style for the specific star control a user is directly above.
*/
  .stars.rate:HOVER > A:HOVER {
        color:#FC0;
        text-shadow:0px 2px 0 #000, 0 -1px 0 #fff;
        top:-1px;
    }
/*
turn "OFF" all stars after the one the user is hovering over.
*/
    .stars.rate >A:HOVER ~ A {
        color:#fff;
        text-shadow:none;
    }
/* 
  all the styles below are used to display the apropriate portion of the BEFORE element based on percentage rating. unfortunately you will need to create a specific rule for each level of granularity you wish to display.


  if the CSS3 attr() function proposal ever gets implimented
  the remaining rules could all be replaced with the following:
  .stars[data-percent]:BEFORE {
    width:attr(data-percent,%,0);
  }
  
*/
    .stars:NOT([data-percent]):BEFORE,
  .stars[data-percent="0"]:BEFORE {
        display:none;
    }
/* 1/2 a star */
    .stars[data-percent="10"]:BEFORE {
        width:10%;
    }
/* 1 star */
    .stars[data-percent="20"]:BEFORE {
        width:20%;
    }
/* 1 & 1/2 stars */
    .stars[data-percent="30"]:BEFORE {
        width:30%;
    }
/* etc. */
    .stars[data-percent="40"]:BEFORE {
        width:40%;
    }
    .stars[data-percent="50"]:BEFORE {
        width:50%;
    }
    .stars[data-percent="60"]:BEFORE {
        width:60%;
    }
    .stars[data-percent="70"]:BEFORE {
        width:70%;
    }
    .stars[data-percent="80"]:BEFORE {
        width:80%;
    }
    .stars[data-percent="90"]:BEFORE {
        width:90%;
    }
    .stars[data-percent="100"]:BEFORE {
        width:100%;
    }

    </style>

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
            <form action="step4a" method="GET" class="form" name="pageForm">
                    <input type="text" id="selected-text" name="selected-text" style="width:65px;"/>

                
            <article>
                <p class="center">Please rate the following movies.
                    </p>
                
            </article>

            @foreach($movies->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $movie)
                        <div class="col col-4">
                            <ul class="item-list">
                                <li><a href="javascript:submitLink('Farms')">{{ $movie->name }}</a>
                                </li>    
                            </ul>
                             <input type="hidden"  name='{{$movie->id}}' id='{{$movie->id}}' value=''/>

                            <div class="stars rate" data-percent="0" movieid='{{$movie->id}}'>
                                <a href="?1" onclick="return yes_js_login(event);" title="awful" value='1'>★</a>
                                <a href="?2" onclick="return yes_js_login(event);" title="ok" value='2'>★</a>
                                <a href="?3" onclick="return yes_js_login(event);" title="good" value='3'>★</a>
                                <a href="?4" onclick="return yes_js_login(event);" title="great" value='4'>★</a>
                                <a href="?5" onclick="return yes_js_login(event);" title="awesome" value='5'>★</a>
                            </div>
    
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
            <div class="row">

                <div class="form-item" >
                     {{ $movies->links() }}
                    <input action="step3" method="GET" type="submit" id="continue-onward"  class="button red-primary justify-content" value="Next" />
                </div>
            </div> 
             <script type="text/javascript">
                yes_js_login = function(event) {
                    // console.log(event.currentTarget.parentElement.getAttribute('data-percent'));
                    $val = event.currentTarget.getAttribute('value');
                    $pec = ($val/5) * 100;
                    console.log($pec);
                    event.currentTarget.parentElement.setAttribute('data-percent', $pec);
                    $tempid = event.currentTarget.parentElement.getAttribute('movieid');
                      // document.getElementById($tempid).value = $pec;
                      document.getElementById($tempid).value = $val;
                    // alert($tempid);
                    return false;
                }
             </script>

            <div class="row">

                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
            </div> 
               
</form>

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
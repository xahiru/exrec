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


    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-stars.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.barrating.js"></script>
    


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
          <form action="step4" method="GET" class="form" name="pageForm">
                            
            <article>
                <p class="center">Please rate the following movies.</p>
             </article>
    
            

            <input name="rating" value="0" id="rating_star" type="hidden" postID="1" /> 
            @foreach($ratings as $rate)
                <div class="overall-rating">(Average Rating <span id="avgrat"> {{$rate->ratings}}</span> 

                Based on <span id="totalrat"> $ratingRow['rating_number']; </span>  rating)</span></div> 

            @endforeach

            @foreach($movies->chunk(3) as $chunk)

                <div class="row">
                    @foreach($chunk as $movie)

                        <div class="col col-4">
                            <ul class="item-list">
                                <li><a href="javascript:submitLink('Farms')">{{ $movie->name }}</a>
                                </li>    
                            </ul>                          
                            
                            <input class="my-text-select" type="text" id="selected-text-{{$movie->id}}" name="selected-text-{{$movie->id}}" style="width:65px;">

                            <div class="br-wrapper br-theme-fontawesome-stars special-drop">
                              <select id="{{$movie->id}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>

                        </div>

                        @endforeach
                    </div>
            @endforeach

            


            <div class="row">
                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
            </div>
          </form>
        </div>
<script type="text/javascript">
       $(function() {

          $('#example').barrating({
            theme: 'fontawesome-stars',
            onSelect: function(value, text, event) {
            if (typeof(event) !== 'undefined') {
              // rating was selected by a user
              console.log(event.target);
            } else {
              // rating was selected programmatically
              // by calling `set` method
            }
          }
          });
       });
</script>
        
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
        
  </div>

     

</body> 

</html>
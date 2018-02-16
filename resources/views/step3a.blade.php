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

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/iconselect.css" >
    <script type="text/javascript" src="js/control/iconselect.js"></script>    
    <script type="text/javascript" src="js/iscroll.js"></script>


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
                            <div class="special-drop"> <div id='{{$movie->id}}'></div></div>
                            
                            <input class="my-text-select" type="text" id="selected-text-{{$movie->id}}" name="selected-text-{{$movie->id}}" style="width:65px;">
                        </div>

                        @endforeach
                    </div>
            @endforeach

        </div>

                <div class="form-item" >
                     {{ $movies->links() }}
                    <input action="step3" method="GET" type="submit" id="continue-onward"  class="button red-primary justify-content" value="Next" />
                </div>
            
            

<div class="row">
                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
</div>            
               
</form>

 

<script type="text/javascript">
            
        var iconSelectItem;
        var selectedText = [];
        var icons = [];
        var idList;

            icons.push({'iconFilePath':'img/1.png', 'iconValue':'1'});
            icons.push({'iconFilePath':'img/2.png', 'iconValue':'2'});
            icons.push({'iconFilePath':'img/3.png', 'iconValue':'3'});
            icons.push({'iconFilePath':'img/4.png', 'iconValue':'4'});
            icons.push({'iconFilePath':'img/5.png', 'iconValue':'5'});
            icons.push({'iconFilePath':'img/6.png', 'iconValue':'6'});

            idList = document.getElementsByClassName('special-drop');
            // kdList = document.getElementsByClassName('my-icon-select');

        var iconSelect = [];
        console.log(idList.length);
        

        var iconSelectItem1;

        // $(window).load(function(){ 
        var obj = [];

        for (var j = 0; j < idList.length; j++) {
            var kid = idList[j].childNodes[1].id;
            iconSelectItem1 = new IconSelect(kid);
            iconSelectItem1.refresh(icons);
            obj[kid] = iconSelectItem1;
           
                document.getElementById(idList[j].childNodes[1].id).addEventListener('changed', function(e){
                //     console.log("inside change"+ e.target.id);
                    selectedText = document.getElementById('selected-text-'+e.target.id);
                    // selectedText.value = e.target.id;// iconSelectItem1.getSelectedValue();

                    
                    // selectedText.value = iconSelectItem1.getSelectedValue();
                    selectedText.value = obj[e.target.id].getSelectedValue();
                     // console.log(obj[e.target.id].getSelectedValue());

                 });
                // document.getElementById(idList[j].id).addEventListener('changed', createIconselect, false);

            // console.log(idList[j].childNodes);
            
           
            

                

            }

            // function createIconselect(e){
            // console.log("inside change"+ e.target.id);
        //     console.log("inside obj length"+ Object.keys(obj).length);
        //     selectedText = document.getElementById('selected-text-'+e.target.id);
        //     selectedText.value = obj[e.target.id].getSelectedValue();
            
        //     // console.log("check for  ico object"+ obj[e.target.id]);
            // var iconSelectItem1;
            // iconSelectItem1 = new IconSelect(e.target.id);
            // iconSelectItem1.refresh(icons);
        // }


     

// });
       
            
</script>


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
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bars-pill.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/jquery.barrating.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/iconselect.css" >
    <script type="text/javascript" src="js/control/iconselect.js"></script>    
    <script type="text/javascript" src="js/iscroll.js"></script>

     
        
    <style type="text/css">
       
        .rating {
    width: 300px;
    height: 34px;
    background-color: #f6f3f3;
}
 
.rating label {
    text-indent: -100px;
    width: 40px !important;
    height: 30px;
    overflow: hidden;
    cursor: pointer;
}
 
.label {
    float: left;
    padding-top: 3px;
}
         
input[type="radio"] {
    padding-right: 4px;
    position: absolute;
    left: 340px;
    margin-top: 10px;
}
                 
input[type="radio"], .rating label.stars {
    float: right;
    line-height: 30px;
    height: 30px;
}
 
span + input[type=radio] + label, legend + input[type=radio] + label {
    clear: right;
    margin-right: 80px;
    counter-reset: checkbox;
}
 
.rating input[type="radio"]:required + label:after {
    content: '';
    position: absolute;
    left: 340px; 
    min-height: 10px;
    margin-top: -36px;
    text-align: right;
    background: #6cbf00;
    padding: 10px 10px;
    display: block;
    width: 50px;
}
 
.rating label.stars {
    background: transparent url('img/smiling-face-with-smiling-eyes_1f60a.png') no-repeat center center;
}
 
.rating label.stars:hover ~ label.stars, 
.rating label.stars:hover, 
.rating input[type=radio][name=stars]:checked ~ label.stars {
    background-image: url('http://www.findsourcecode.com/wp-content/uploads/2014/04/star.png');
    counter-increment: checkbox;
}
 
.rating input[type=radio][name=stars]:required + label.stars:after {
    content: counter(checkbox) " stars!";
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
                             

                        

<select class="krate" name='{{$movie->id}}' id='{{$movie->id}}'>
  <option value="1">😡</option>
  <option value="2">😒</option>
  <option value="3">😊</option>
  <option value="4">😁</option>
  <option value="5">😃</option>
   <option value="6">😍</option>
    <option value="6">😍</option>
    <option style="background-image:url(img/smiling-face-with-smiling-eyes_1f60a.png);">others</option>
</select>

    <fieldset class="rating">     
        <input type="radio" name="stars" id="4_stars" value="4" >
        <label class="stars" for="4_stars">4 stars</label>
        <input type="radio" name="stars" id="3_stars" value="3" >
        <label class="stars" for="3_stars">3 stars</label>
        <input type="radio" name="stars" id="2_stars" value="2" >
        <label class="stars" for="2_stars">2 stars</label>
        <input type="radio" name="stars" id="1_stars" value="1" >
        <label class="stars" for="1_stars">1 star</label>
        <input type="radio" name="stars" id="0_stars" value="0" required>
        <label class="stars" for="0_stars">0 star</label>
        <span  class="label"> Rating: </span>
    </fieldset>
    
          <div id="my-icon-select" class="my-icon-select"></div>
                    @endforeach
                </div>
            @endforeach

        </div>

        <div class="row">
                 
            <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}" checked="checked"/> <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}"/> <input name="adv1" type="radio" class="star {split:4}"/>
        </div>


<div class="row">
              
    <fieldset class="rating">     
        <input type="radio" name="stars" id="4_stars" value="4" >
        <label class="stars" for="4_stars">😊</label>
        <input type="radio" name="stars" id="3_stars" value="3" >
        <label class="stars" for="3_stars">😊</label>
        <input type="radio" name="stars" id="2_stars" value="2" >
        <label class="stars" for="2_stars">😊</label>
        <input type="radio" name="stars" id="1_stars" value="1" >
        <label class="stars" for="1_stars">😊</label>
        <input type="radio" name="stars" id="0_stars" value="0" required>
        <label class="stars" for="0_stars">0 star</label>
        <span  class="label"> Rating: </span>
    </fieldset>
</div>


                <div class="form-item" >
                     {{ $movies->links() }}
                    <input action="step3" method="GET" type="submit" id="continue-onward"  class="button red-primary justify-content" value="Next" />
                </div>
            </div> 
            

            <div class="row">
                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
            </div> 
               
</form>
<script type="text/javascript">
       $(function() {
        var idList = document.getElementsByClassName("rate");
         for (var i = 0; i < idList.length; i++) {
         // item = document.getElementById(idList[i]);
        console.log(idList[i].id);

        $('#'+idList[i].id).barrating({
            theme: 'bars-pill',
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
            }
          
       });
    </script>

     <script>
            
        var iconSelect;
        var selectedText;

        window.onload = function(){



                // var div = document.createElement('div');
                // div.innerHTML = '<span class="msg">Hello world.</span>';
                // var old =  document.getElementById(idList[i].id);
                // old.append(div);

            
            selectedText = document.getElementById('selected-text');

            // var idList = document.getElementsByClassName('my-icon-select');
            // for (var i = 0; i < idList.length; i++) {
            // console.log(idList[i].id);
            
            document.getElementById('my-icon-select').addEventListener('changed', function(e){
               selectedText.value = iconSelect.getSelectedValue();
            });
            // var iconSelectItem = new IconSelect("my-icon-select");
                // iconSelectItem = new IconSelect(idList[i].id,
                //         {'selectedIconWidth':23,
                //         'selectedIconHeight':23,
                //         'selectedBoxPadding':1,
                //         'iconsWidth':48,
                //         'iconsHeight':48,
                //         'boxIconSpace':1,
                //         'vectoralIconNumber':6,
                //         'horizontalIconNumber':1})

                //  console.log('length'+idList.length);
                // iconSelectItem.refresh(icons);

                // iconSelect.push(iconSelectItem);

                 // $(idList[i].id).on('change', function(e){

                     // console.log("inside change");

                      // selectedText[i].value = iconSelect[i].getSelectedValue();

                    // iconSelectItem = new IconSelect(idList[i].id);
                    // iconSelectItem.refresh(icons);
                    // iconSelectItem = new IconSelect(idList[i].id, 
                //         {'selectedIconWidth':23,
                //         'selectedIconHeight':23,
                //         'selectedBoxPadding':1,
                //         'iconsWidth':48,
                //         'iconsHeight':48,
                //         'boxIconSpace':1,
                //         'vectoralIconNumber':6,
                //         'horizontalIconNumber':1})
                       
                      // });

                
                // for (var j = 0; j < idList.length; j++) {
        //     console.log(document.getElementById(idList[j].id));
        //      iconXSelect.push(new IconSelect(idList[j].id));
        // }
        // console.log(iconXSelect.length);

        // setTimeout(function(){
         // window.onload = function(){
        // var idList = document.getElementsByClassName('my-icon-select');
            // iconSelect = new IconSelect("my-icon-select");
             // obj[idList[j].id] = iconSelectItem1;
            // console.log("obj keys"+ idList[j].id);
           
            // document.getElementById(idList[j].id).addEventListener('changed', createIconselect, false);
             // function createIconselect(e){
        //     // console.log("inside change"+ e.target.id);
        //     console.log("inside obj length"+ Object.keys(obj).length);
        //     selectedText = document.getElementById('selected-text-'+e.target.id);
        //     selectedText.value = obj[e.target.id].getSelectedValue();
            
        //     // console.log("check for  ico object"+ obj[e.target.id]);
        // }

    // for (var i = 0; i < kdList.length; i++) {
    //     var event = new Event('changed');
    //     // Dispatch it.
    //     document.getElementById(kdList[i]).dispatchEvent(event);
    //     }
                // document.getElementById('164979').addEventListener('changed', function(e){
                //     console.log("inside change"+ e.target.id);
                //     selectedText = document.getElementById('selected-text-'+e.target.id);
                //     // selectedText.value = e.target.id;// iconSelect[i].getSelectedValue();
                //      selectedText.value = iconSelectItem2.getSelectedValue();

                // });

                // document.getElementById('164977').addEventListener('changed', function(e){
                //     console.log("inside change"+ e.target.id);
                //     selectedText = document.getElementById('selected-text-'+e.target.id);
                //     selectedText.value = e.target.id;// iconSelect[i].getSelectedValue();
                //      selectedText.value = iconSelectItem3.getSelectedValue();

                // });
                

                // iconSelectItem1 = new IconSelect(163949);
                // iconSelectItem1.refresh(icons);
                // // iconSelect.push({id:idList[i].id,sel:iconSelectItem});
                // // iconSelect.push(iconSelectItem);

                // iconSelectItem2 = new IconSelect(164979);
                // iconSelectItem2.refresh(icons);

                // iconSelectItem3 = new IconSelect(164977);
                // iconSelectItem3.refresh(icons);
 
 


        // $(window).load(function(){  
        // $(document).ready(function(){  
            // selectedText = document.getElementById('selected-text');

            // idList = document.getElementsByClassName('my-icon-select');
            // var idtextList = document.getElementsByClassName('my-text-select');

       
            // console.log(idList.length);
            
            // for (var i = 0; i < idList.length; i++) {
                 
                // console.log(i);
                
                // console.log(idList[i].id);




                // document.getElementById(idList[i].id).addEventListener('changed', function(e){
                //     console.log("inside change"+ e.target.id);
                //     selectedText = document.getElementById('selected-text-'+e.target.id);
                //     selectedText.value = e.target.id;// iconSelect[i].getSelectedValue();

                // });



                
                // }


            // console.log("list at end of loop"+idList.length);

            
            
         // });
        // ,3000);
            iconSelect = new IconSelect("my-icon-select", 
                {'selectedIconWidth':23,
                'selectedIconHeight':23,
                'selectedBoxPadding':1,
                'iconsWidth':48,
                'iconsHeight':48,
                'boxIconSpace':1,
                'vectoralIconNumber':6,
                'horizontalIconNumber':1})

            var icons = [];
            icons.push({'iconFilePath':'img/1.png', 'iconValue':'1'});
            icons.push({'iconFilePath':'img/2.png', 'iconValue':'2'});
            icons.push({'iconFilePath':'img/3.png', 'iconValue':'3'});
            icons.push({'iconFilePath':'img/4.png', 'iconValue':'4'});
            icons.push({'iconFilePath':'img/5.png', 'iconValue':'5'});
             icons.push({'iconFilePath':'img/6.png', 'iconValue':'5'});

            
            iconSelect.refresh(icons);
            


        };
            
        </script>


    </div>


    <div class="container">
                    <img src="https://api.themoviedb.org/3/movie/209112?api_key=a9adb8765874eecd32c665399885a107209112" />
                    <input type="checkbox"  class="checkbox" id="check2" />
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
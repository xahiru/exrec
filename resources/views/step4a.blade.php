<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-stars.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/jquery.barrating.js"></script>
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


<title>SAPCE-O - Rating Blog</title> 

</head> 

<body> 

    <h1>SAPCE-O - Rating Blog</h1> 

    <input name="rating" value="0" id="rating_star" type="hidden" postID="1" /> 
    @foreach($ratings as $rate)
        <div class="overall-rating">(Average Rating <span id="avgrat"> {{$rate->ratings}}</span> 

        Based on <span id="totalrat"> $ratingRow['rating_number']; </span>  rating)</span></div> 

    @endforeach

<div class="br-wrapper br-theme-fontawesome-stars">
    <select id="example">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
</div>


     

</body> 

</html>
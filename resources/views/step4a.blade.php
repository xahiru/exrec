<!DOCTYPE html> 

<html lang="en"> 

<head> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<script type="text/javascript" src="js/rating.js"></script> 

<script language="javascript" type="text/javascript"> 

$(function() { 

    $("#rating_star").spaceo_rating_widget({ 

        starLength: '5', 

        initialValue: '', 

        callbackFunctionName: 'processRating', 

        imageDirectory: 'img/', 

        inputAttr: 'post_id' 

    }); 

}); 

function processRating(val, attrVal){ 

    $.ajax({ 

        type: 'POST', 

        url: 'rating.php', 

        data: 'post_id=1&points='+val, 

        dataType: 'json', 

        success : function(data) { 

            if (data.status == 'ok') { 

                alert('You have rated '+val+' to SPACE-O'); 

                $('#avgrat').text(data.average_rating); 

                $('#totalrat').text(data.rating_number); 

            }else{ 

                alert('please after some time.'); 

            } 

        } 

    }); 

} 

</script> 

<style type="text/css"> 

    .overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;} 
    .spaceo_rating_widget{
    padding: 0px;
    margin: 0px;
    float: left;
}
.spaceo_rating_widget li{
    line-height: 0px;
    width: 28px;
    height: 28px;
    padding: 0px;
    margin: 0px;
    margin-left: 2px;
    list-style: none;
    float: left;
    cursor: pointer;
}
.spaceo_rating_widget li span{
    display: none;
}

</style> 

<title>SAPCE-O - Rating Blog</title> 

</head> 

<body> 

    <h1>SAPCE-O - Rating Blog</h1> 

    <input name="rating" value="0" id="rating_star" type="hidden" postID="1" /> 
    @foreach($ratings as $rate)
        <div class="overall-rating">(Average Rating <span id="avgrat"> {{$rate->ratings}}</span> 

        Based on <span id="totalrat"> $ratingRow['rating_number']; </span>  rating)</span></div> 

    @endforeach

     

</body> 

</html>
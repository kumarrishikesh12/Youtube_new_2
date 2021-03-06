<?php
//Get videos from channel by YouTube Data API
//$API_key    = 'AIzaSyCqEddbpzWt3u85JT4ofQjvjKkaWiWIKSU';
//$channelID  = 'UCJ7a2tqqh0JQpZBjDhY3dxA';


$API_key    = 'AIzaSyBvlul77RjG7RnbGXYYqQCYmTsArgaYMNE';
$channelID  = 'UC72i-gXt6BPnucMJjzm90nA';


$maxResults = 30;

 $videoList ='https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key;

 $json_details = json_decode(file_get_contents($videoList));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Videos from YouTube Channel using Data API v3 and PHP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .container{padding: 15px;}
    .youtube-video h2{font-size: 16px;}
    </style>
</head>
<body>




<div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12" style="padding: 0; border: 1px solid #CCC; ">
                <img src="youtube-video-downloader.png" alt="Header Image" style="float:right;width:20%">                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="border: 1px solid #CCC;">
                <p style="text-align: center; font-size: 35px; font-weight: 100;"> Youtube Video Downloader</p>
                <hr>
                
                <?php
                    foreach($json_details->items as $item){
                    //Embed video
                    if(isset($item->id->videoId)){
                    echo '<div style="border:1" id="'. $item->id->videoId .'" class="col-lg-3 col-sm-6 col-xs-6 youtube-video">
                    <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                    <h2>'. $item->snippet->title .'</h2>';

                    echo '<form action="getting.php" method="get" autocomplete="off">';

                    echo '<input type="hidden" name="link" " class="form-control" value=https://www.youtube.com/watch?v='.$item->id->videoId.'>';

                    echo '<button type="submit" class="btn btn-info text-center"> Download </button> 
                    
                     </form>

                     <br>            
                    </div>';

                    }
                  }

                 ?>

                
                 <br>
                 <hr>
            </div>
        </div>
    </div> 


</body>
</html>






<!--

<div class="container">
    <div class="row">
    <?php
    /*
    foreach($json_details->items as $item){
        //Embed video
        if(isset($item->id->videoId)){
            echo '<div style="border:1" id="'. $item->id->videoId .'" class="col-lg-3 col-sm-6 col-xs-6 youtube-video">
                    <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                    <h2>'. $item->snippet->title .'</h2>
                </div>';
        }
    }
    */
    ?>
    </div>
</div>

-->











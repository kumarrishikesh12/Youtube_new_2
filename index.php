<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YouTube Video Downloader</title>
    
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body style="font-family: Lato; ">
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12" style="padding: 0; border: 1px solid #CCC; ">
                <img src="youtube-video-downloader.png" alt="Header Image" style="float:right;width:20%">                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="border: 1px solid #CCC;">
                <p style="text-align: center; font-size: 35px; font-weight: 100;">YouTube Free Video Downloader</p>
                <hr>
                <form action="getting.php" method="get" autocomplete="off">
                    <label class="col-md-12 alert alert-warning" for="link"><span>Paste YouTube Video Link Below </span></label>
                    <input name="link" placeholder="Example: https://www.youtube.com/watch?v=NpfwinEffi4 " style="border-radius: 0;" class="form-control" type="text" required="required">
                    <br>
                    <button type="submit" class="btn btn-md btn-outline-primary text-center">Get Download Links</button>
                    <br><hr>
                </form>
            </div>
        </div>
    </div> 

</body>
</html>
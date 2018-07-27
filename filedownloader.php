<html>
<head>
    <title>Server to server file download script from Ravindu Lokumanna</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link href="data:image/png;base64,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" rel="icon" type="image/x-icon" />
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        div#progress {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-6">
        <form action="#" method="post">
            <h5><i class="fa fa-cloud-download" aria-hidden="true"></i> Download any file from anywhere to your server</h5>
            <div class="form-group">
                <label for="weburl">Download url</label>
                <input type="text" placeholder="http://www.domain.com/file.zip" name="weburl"
                       value="" class="form-control">
                <p class="help-block">*Please type the full url with http://</p>
            </div>
            <div class="form-group">
                <input type="submit" name="SubmitButton" class="btn btn-primary" value="Download Here" onclick="startTask();">
                <div id="progress"></div>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['SubmitButton'])) {
      
      
      
      
      $weburl = $_POST["weburl"];
      $filename = basename($weburl);
      
      $ch = curl_init();
      
      $source = $weburl;
      curl_setopt($ch, CURLOPT_URL, $source);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_PROGRESSFUNCTION, 'progress');
      curl_setopt($ch, CURLOPT_NOPROGRESS, false); // needed to make progress function work
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
      $data = curl_exec($ch);
      curl_close($ch);
      $destination = $filename;
      $file = fopen($destination, "w+");
      fputs($file, $data);
      fclose($file);
      
      
      
      echo '<script language="javascript">';
      echo 'var myDiv = document.getElementById("progress");';
      echo 'myDiv.innerHTML = "<div class=\'progress\'><div class=\'progress-bar progress-bar-success progress-bar-striped active\' role=\'progressbar\'  aria-valuenow=\'100\' aria-valuemin=\'0\' aria-valuemax=\'100\' style=\'width:100%\'>Download Completed</div></div>";';
      echo '</script>';
      
      ob_flush();
      flush();
      
      
      
}
?>
<div class="clearfix"></div>
<div class="container">
    <div class="col-md-12">
        <p class="credits"><i class="fa fa-code" aria-hidden="true"></i> by Ravindu Lokumanna</p>
    </div>
</div>
</body>
</html>

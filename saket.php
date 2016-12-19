<?php #php codes begins here

$page = $_SERVER['http://localhost/Distributed/Saket/saket.php'];
$sec = "20"; 
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 

 //saving the bot token into the variable $botToken
$botToken = "278155494:AAEUqwmCCES-QoQ2Y1H09KrWtcqxCsTS0to";
//instantiating the url for telegram
//instantiating the url for telegram
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];

$teleuser=$current_update["message"]["from"]["first_name"];

    $newsxz = '';
    $link = 'https://newsapi.org/v1/articles?source=ign&sortBy=top&apiKey=fd887f95b0f14362a2f6256bc514849a';
    $feed = file_get_contents($link);
    $feedjs = json_decode($feed,TRUE);
    for($i=1;$i<=5;$i++){
       $newsxz .= $feedjs['articles'][$i]['title'].'<br>'.$feedjs['articles'][$i]['description'].'<br>
       <img src="'.$feedjs['articles'][$i]['urlToImage'].'"/><br>'.$feedjs['articles'][$i]['publishedAt'].'<br><a href="
       '.$feedjs['articles'][$i]['url'].'">Click for more info</a><br><br>'; 
}
  
   //checking the text recieved from the user and giving it an associated message
   switch($newmessage) {
        //start and end bot
        case "hi":
       $botChat="Hello There ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
           break;
           
           
        case "/get":
           $link = 'https://newsapi.org/v1/articles?source=ign&sortBy=top&apiKey=fd887f95b0f14362a2f6256bc514849a';
           $feed = file_get_contents($link);
           $feedjs = json_decode($feed,TRUE);
           
           for($i=1;$i<=5;$i++)
           {
                $newsx .= $feedjs['articles'][$i]['title']."\n"
               .$feedjs['articles'][$i]['description']."\n"
               .$feedjs['articles'][$i]['publishedAt']."\n"
               .$feedjs['articles'][$i]['url']."\n\n\n"; 
           }
            $botChat=$newsx."Type /2 for more news\n";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".urlencode($botChat));
            break;
 
            $botChat="Welcome Sir...tap / for help\n".$newsx;
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".urlencode($botChat));
            break;
           
        case "/end":
            $botChat="Good bye Sir...Hope to hear from you again.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
          
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DISTRIBUTED </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <body>
      <header>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Team Saket</a>
          </div>
    
        </div>
            </nav>
         
        <?php //echo $newsxz;?>
        
  <form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Chat</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Message" value="">
		</div>
	</div>
    </form>
        
             <div class = "intro-message">
             <marquee><h1>ENTERTAINMENT NEWS<br></h1></marquee>
             <a class="btn btn-ghost" href = "#">Click to scroll up</a>
            </div>
        </header>
          
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
                <script type="text/javascript">
                    var auto_refresh = setInterval(
                    function ()
                    {
                    $('#load_tweets').load('record_count.php').fadeIn("slow");
                    }, 10000); // refresh every 10000 milliseconds
          </script>        
          
          
        <div class="container-fluid">
        <div class="jumbotron">
            <h2>Hey there!</h2>
                <p>We bring you all entertaiment news".</p>
        </div>
        </div>
          
          
        <div class="navbar navbar-transparent navbar-fixed-bottom" role="navigation">
            <div class="container">
                <div class="navbar-text pull-left"
                <p>@CopyRight 2016 .</p>
            </div>
        </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
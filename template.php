<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Facebook application template</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"> </script>
	<script src="js/tabs.js" type="text/javascript"> </script>
	<script src="js/search.js" type="text/javascript"> </script>
	<script type="text/javascript">
            function updateStatus(){
                var status  =   document.getElementById('status').value;
                
                $.ajax({
                    type: "POST",
                    url: "<?=$fbconfig['baseUrl']?>/ajax.php",
                    data: "status=" + status,
                    success: function(msg){
                        alert(msg);
                    },
                    error: function(msg){
                        alert(msg);
                    }
                });
            }
            function updateStatusViaJavascriptAPICalling(){
                var status  =   document.getElementById('status').value;
                    FB.api('/me/feed', 'post', { message: status }, function(response) {
                        if (!response || response.error) {
                             alert('Error occured');
                        } else {
                             alert('Status updated Successfully');
                        }
                   });
            }
            function streamPublish(name, description, hrefTitle, hrefLink, userPrompt){        
                FB.ui({ method : 'feed', 
                        message: userPrompt,
                        link   :  hrefLink,
                        caption:  hrefTitle
                      });
                    //http://developers.facebook.com/docs/reference/dialogs/feed/
        
                /* 
                 * Deprecated code
                FB.ui(
                {
                    method: 'stream.publish',
                    message: '',
                    attachment: {
                        name: name,
                        caption: '',
                        description: (description),
                        href: hrefLink
                    },
                    action_links: [
                        { text: hrefTitle, href: hrefLink }
                    ],
                    user_prompt_message: userPrompt
                },
                function(response) {

                }); */
            }
            function publishStream(){
                streamPublish("Stream Publish", 'Thinkdiff.net is simply awesome. I just learned how to develop Iframe+Jquery+Ajax base facebook application development using php sdk 3.0. ', 'Checkout the Tutorial', 'http://wp.me/pr3EW-sv', "Demo Facebook Application Tutorial");
            }
            function increaseIframeSize(w,h){
                var obj =   new Object;
                obj.width=w;
                obj.height=h;
                FB.Canvas.setSize(obj);
            }

            function newInvite(){
                 var receiverUserIds = FB.ui({ 
                        method : 'apprequests',
                        message: 'come on man checkout my application. visit http://thinkdiff.net',
                 },
                 function(receiverUserIds) {
                          console.log("IDS : " + receiverUserIds.request_ids);
                        }
                 );
                 //http://developers.facebook.com/docs/reference/dialogs/requests/
            }
        </script>
</head>
<body>

<div id="header">
<div id="fb-root"></div>
    <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
     <script type="text/javascript">
       FB.init({
         appId  : '<?=$fbconfig['appid']?>',
         status : true, // check login status
         cookie : true, // enable cookies to allow the server to access the session
         xfbml  : true  // parse XFBML
       });
       
     </script>
	 
	<p><h1>College profiler </h1><h3>An edge over others.</h3></p>
	<p id="layoutdims">
	<ul id="menu" class="menu blue left" style="border-bottom-right-radius: 50px 50px;border-top-left-radius: 50px 50px;border-bottom-left-radius: 50px 50px;border-top-right-radius: 50px 50px;" >
		<li style="margin-left:20px;"><a href="#" id="tab1"> Home </a></li>
		<li><a href="#" id="tab2"> College files </a></li>
		<li><a href="#" id="tab3"> Courses </a>
		<ul>
			<li><a href="#">Scince and technology</a></li>        
			<li><a href="#">Management</a></li>        
			<li><a href="#">Humanities</a></li>        
			<li><a href="#">Commerce</a></li>        
			<li><a href="#">Design</a></li>        
			<li><a href="#">Media </a></li>        
			<li><a href="#">Add more ! </a></li>        
               </ul>

</li>
		<li><a href="#" id="tab4"> Your College  </a></li>
	</ul>
	</p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<div id="tab-1" style="overflow:hidden; height:auto; display: block; border-width: 0; padding: 1em 1.4em; background: none;" >
				<?php include "includes/tab1.php" ; ?> 
				</div>
			        <div id="tab-2" style="overflow:hidden; height:auto; display: block; border-width: 0; padding: 1em 1.4em; background: none;" >
			        <?php include "includes/tab2.php" ; ?> 
				</div>
				<div id="tab-3" style="overflow:hidden; height:auto; display: block; border-width: 0; padding: 1em 1.4em; background: none;" >
				<?php include "includes/tab3.php" ; ?> 
				</div>
				<div id="tab-4" style="overflow:hidden; height:auto; display: block; border-width: 0; padding: 1em 1.4em; background: none;" >
				<?php include "includes/tab4.php" ; ?> 
				</div>
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				<h2>Reviews </h2>
				<p>Recent reviews</p>
				<h2>Add </h2>
				<p>Add your college (only verified users ).</p>
				<h2>Edit  </h2>
				<p>Edit college prfiles added by me or profile of my college (verifed users).</p>
				<h2></h2>
				<p>humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
				<form action="#" method="post" id="search_form" class="clearfix" >
                                <input type="text" size="40" maxlength="150" name="search_text" placeholder="Autosuggest " id="search_text" onkeyup="showResult(this.value)" />
								<input type="submit" name="search" value="Go" id="search_button"  />
                                </form>
                                <div id="livesearch"></div>
				<h2>Social Visiblity </h2>
				<p>
				<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=256499181042648&amp;xfbml=1"></script>
				<fb:like href="http://www.facebook.com/site.engineerinme" send="true" width="270" show_faces="true" font=""></fb:like>
				</p>
				<h2><a href="#" onclick="newInvite(); return false;">Send Request/Send Invitation</a></h2>
				<p>Please invite your friends ! .. Help us grow </p>
				<h2></h2>
				<p>humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>college profiler  </p>
</div>

</body>
</html>
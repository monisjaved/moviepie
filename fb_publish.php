  <?
         
		             		/* if user not allow to upload */
		if($_SESSION['published'] ==1 )
				{
					$msg=array();
					$mg['access_token']=$_SESSION['access'];
	                $msg['url']="http://apps.facebook.com/moviepie/";
	                $msg['message']="I was using movie-pie a facebook movie database ! , have a look its intresting  ";
				 
		             			try {
								    $facebook->api('me/feed', 'post', $msg);
									$_SESSION['published']=$_SESSION['published']+1;
									}
		             				catch (FacebookApiException $e)
		             				{
		             					echo $e ;
		             					continue ;
		            				}
		            
				}
						?>
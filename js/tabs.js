
$(document).ready(function(){

$("div#tab-2").hide();
$("div#tab-3").hide();
$("div#tab-4").hide();
$("a#tab1").attr("style", "background-color:red;")



$("a#tab1").click(function(){
$("div#tab-1").show(1000); 

$("a#tab1").attr("style", "background-color:red;")
$("a#tab2").attr("style", "")
$("a#tab3").attr("style", "")
$("a#tab4").attr("style", "")

$("div#tab-2").hide(); 
$("div#tab-3").hide(); 
$("div#tab-4").hide(); 

});
$("a#tab2").click(function(){
$("div#tab-2").show(1000); 

$("a#tab2").attr("style", "background-color:red;")
$("a#tab1").attr("style", "")
$("a#tab3").attr("style", "")
$("a#tab4").attr("style", "")

$("div#tab-1").hide(); 
$("div#tab-3").hide(); 
$("div#tab-4").hide(); 


});
$("a#tab3").click(function(){
$("div#tab-3").show(1000); 

$("a#tab3").attr("style", "background-color:red;")
$("a#tab1").attr("style", "")
$("a#tab2").attr("style", "")
$("a#tab4").attr("style", "")

$("div#tab-1").hide(); 
$("div#tab-2").hide(); 
$("div#tab-4").hide(); 
});
$("a#tab4").click(function(){
$("div#tab-4").show(1000); 

$("a#tab4").attr("style", "background-color:red;")
$("a#tab1").attr("style", "")
$("a#tab2").attr("style", "")
$("a#tab3").attr("style", "")

$("div#tab-1").hide(); 
$("div#tab-2").hide(); 
$("div#tab-3").hide(); 
});


});
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
            }
       
		

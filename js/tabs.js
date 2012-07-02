
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

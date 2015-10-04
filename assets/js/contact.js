var domain = 'http://www.changemakerday.com/';
$(document).ready(function(){
    
    $('#contact-bar').toggleClass('active-bar');

    $('#scenario-1').click(function(event){
    	src1 = domain+"assets/img/map-1.png";
    	$('#map').attr("src", src1);
    });
     $('#scenario-2').click(function(event){
    	src1 = domain+"assets/img/map-2.png";
    	$('#map').attr("src", src1);
    });
      $('#scenario-3').click(function(event){
    	src1 = domain+"assets/img/map-3.png";
    	$('#map').attr("src", src1);
    });
       $('#scenario-4').click(function(event){
    	src1 = domain+"assets/img/map-4.png";
    	$('#map').attr("src", src1);
    });
});
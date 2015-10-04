var domain = 'http://www.changemakerday.com/';
$(document).ready(function(){
    
    $('#contact-bar').toggleClass('active-bar');

    $('#scenario-1').click(function(event){
    	src1 = domain+"assets/img/map-1.png";
    	$(this).addClass('active');
    	$('#scenario-4').removeClass('active');
    	$('#scenario-2').removeClass('active');
    	$('#scenario-3').removeClass('active');
    	$('#map').attr("src", src1);
    });
     $('#scenario-2').click(function(event){
    	src1 = domain+"assets/img/map-2.png";
    	$(this).addClass('active');
    	$('#scenario-1').removeClass('active');
    	$('#scenario-4').removeClass('active');
    	$('#scenario-3').removeClass('active');
    	$('#map').attr("src", src1);
    });
      $('#scenario-3').click(function(event){
    	src1 = domain+"assets/img/map-3.png";
    	$(this).addClass('active');
    	$('#scenario-1').removeClass('active');
    	$('#scenario-2').removeClass('active');
    	$('#scenario-4').removeClass('active');
    	$('#map').attr("src", src1);
    });
       $('#scenario-4').click(function(event){
    	src1 = domain+"assets/img/map-4.png";
    	$(this).addClass('active');
    	$('#scenario-1').removeClass('active');
    	$('#scenario-2').removeClass('active');
    	$('#scenario-3').removeClass('active');
    	$('#map').attr("src", src1);
    });
});
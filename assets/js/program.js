$(document).ready(function(){
	
	$('#program-bar').toggleClass('active-bar');

	$("#day-2").click(function(event) {
		$('.day-2').toggleClass('opacityChanger');
		$('.day-3').removeClass('opacityChanger');
	});
	$("#day-3").click(function(event) {
		$('.day-3').toggleClass('opacityChanger');
		$('.day-2').removeClass('opacityChanger');
	});
	$("#day-1").click(function(event) {
		$('.day-2').removeClass('opacityChanger');
		$('.day-3').removeClass('opacityChanger');
	});
	$("#scenario-2").click(function(event) {
		$('.scenario-2').toggleClass('people');
		$('.scenario-3').removeClass('tech');
		$('.scenario-4').removeClass('green');
	});
	$("#scenario-3").click(function(event) {
		$('.scenario-3').toggleClass('tech');
		$('.scenario-2').removeClass('people');
		$('.scenario-4').removeClass('green');
	});
	$("#scenario-4").click(function(event) {
		$('.scenario-4').toggleClass('green');
		$('.scenario-2').removeClass('people');
		$('.scenario-3').removeClass('tech');
	});
	$("#scenario-1").click(function(event) {
		$('.scenario-2').removeClass('people');
		$('.scenario-3').removeClass('tech');
		$('.scenario-4').removeClass('green');
	});
});



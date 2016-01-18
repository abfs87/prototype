$("#slide-banner").carousel({interval:5000});

$(".item").click(function() {
	$("#slide-banner").carousel(0);
});
$(".item").click(function() {
	$("#slide-banner").carousel(1);
});
$(".item").click(function() {
	$("#slide-banner").carousel(2);
});


$(".left").click(function(){
	$("#slide-banner").carousel("prev");
});

$(".right").click(function(){
	$("#slide-banner").carousel("next");
});
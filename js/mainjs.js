

$(document).ready(function(){
$(".child, .mission, .person, .fixed, .footer, .developer").waypoint(function(direction){
    $(this).addClass("waypoint");

}, {
    offset: "80%"

});

$(".child, .mission, .person, .fixed, .footer, .developer").waypoint(function(direction){
    $(this).removeClass("waypoint");

}, {
    offset: "95%"

});


$(".shownav, .contact").click(function(){
    $("#navul").toggleClass("toggle");
})


});
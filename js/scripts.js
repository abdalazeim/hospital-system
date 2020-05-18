$(document).ready(function() {
$('#drop').click(function () {
$('.nav').slideToggle();                 
});
$('#lang-drop').click(function () {
$(this).next().slideToggle();                 
}); 
$('#about-drop').click(function () {
$(this).next().slideToggle();                 
}); 
$('#menu-drop').click(function () {
$(this).next().slideToggle();                 
}); 
$('#contact-drop').click(function () {
$(this).next().slideToggle();                 
});
$('#login-drop').click(function () {
$(this).next().slideToggle();                 
});
    
/* Drop Menu ... */
$(function() {
$(".nav li").hover(function () {
$(this).find("#drop-list").stop().slideToggle();
return false;
});
});      
});

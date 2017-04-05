$(document).ready(function(){
    //$("#messages").clone().appendTo("#menu");
    $("#menu").after($("#messages").clone());
    $("#messages").hide();  
    $("#messages").after($("#whoToFollow").clone());
    $("#whoToFollow").hide();  
    $("#whoToFollow").after($("#profileTab").clone());
    $("#profileTab").hide(); 
})

function showMessages() {
    $("#messages").toggle(500);
}

function showWhoToFollow() {
    $("#whoToFollow").toggle(500);
}

function showProfileTab() {
    $("#profileTab").toggle(500);
}
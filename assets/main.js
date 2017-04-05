$(document).ready(function(){
    //$("#messages").clone().appendTo("#menu");
    $("#menu").after($("#messages").clone());
    $("#messages").hide();  
    $("#messages").after($("#whoToFollow").clone());
    $("#whoToFollow").hide();  
})

function showMessages() {
    $("#messages").toggle(500);
}

function showWhoToFollow() {
    $("#whoToFollow").toggle(500);
}
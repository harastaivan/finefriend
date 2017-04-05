$(document).ready(function(){
    //$("#messages").clone().appendTo("#menu");
    profileTab = $(".profileTab").clone();
    messages = $(".messages").clone();
    whoToFollow = $(".whoToFollow").clone();
    
    $("#menu").after(profileTab);
    profileTab.hide();
    
    profileTab.after(messages);
    messages.hide();  
    
    messages.after(whoToFollow);
    whoToFollow.hide(); 
})

function showMessages() {
    messages.toggle(500);
}

function showWhoToFollow() {
    whoToFollow.toggle(500);
}

function showProfileTab() {
    profileTab.toggle(500);
}
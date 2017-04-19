$(document).ready(function(){
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
    whoToFollow.hide(500);
    profileTab.hide(500);
    messages.toggle(500);
}

function showWhoToFollow() {
    messages.hide(500);
    profileTab.hide(500);
    whoToFollow.toggle(500);
}

function showProfileTab() {
    messages.hide(500);
    whoToFollow.hide(500);
    profileTab.toggle(500);
}
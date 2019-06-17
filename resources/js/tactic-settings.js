var settingsBtn = document.getElementById("settings-btn");
var settingsScreen = document.getElementById("settings-screen");
var closeScreen = document.getElementById("close-settings-screen");
var closeScreenContent = document.getElementById("settings-screen-content");

closeScreen.addEventListener("click", function()
{
	settingsScreen.style.height = "0%";
	
	closeScreenContent.style.opacity = "0";
	setTimeout(function(){ closeScreenContent.style.display = "none"; }, 400);
});

settingsBtn.addEventListener("click", function() 
{
	// show save screen
	settingsScreen.style.height = "100%";
	closeScreenContent.style.display = "block";
	setTimeout(function(){ closeScreenContent.style.opacity = "1"; }, 100);
});

function copyText()
{
	var copyLink = document.getElementById("copy-link");
  	copyLink.select();
  	document.execCommand("copy");
}
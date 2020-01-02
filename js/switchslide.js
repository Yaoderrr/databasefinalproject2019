

function switchhome()
{
	document.getElementById("slidephoto").style.display ="block";
	document.getElementById("showcar").style.display = "none";
	document.getElementById("showmanufacturer").style.display = "none";
	document.getElementById("editpage").style.display = "none";
}
function switchshowcar()
{
	document.getElementById("slidephoto").style.display = "none";
	document.getElementById("showcar").style.display ="block";
	document.getElementById("showmanufacturer").style.display = "none";
	document.getElementById("editpage").style.display = "none";
}
function switchshowmanufacturer()
{
	document.getElementById("slidephoto").style.display = "none";
	document.getElementById("showcar").style.display = "none";
	document.getElementById("showmanufacturer").style.display ="block";
	document.getElementById("editpage").style.display = "none";
}
function switcheditpage()
{
	document.getElementById("slidephoto").style.display = "none";
	document.getElementById("showcar").style.display = "none";
	document.getElementById("showmanufacturer").style.display = "none";
	document.getElementById("editpage").style.display ="block";
}
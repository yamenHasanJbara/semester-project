function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

function exit(s) {
	var add = document.getElementById(s);
	add.style.display="none"; 
}
function show(s) {
	var add = document.getElementById(s);
	add.style.display="inherit";  
}
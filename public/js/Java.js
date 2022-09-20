

function showpsw() {
    var ps = document.getElementById("Psw");
    if (ps.type === "password") {
        ps.type = "text";
    } else {
        ps.type = "password";
    }
}
function valid() {
    setTimeout(suc,500)
    function suc() {
    var ps=document.getElementById("Password");
    var con=document.getElementById("ConfirmPsw");
    var s1=document.getElementById("sp1");
    var s2=document.getElementById("sp2");
    var t=false;
    if (ps.value != con.value) {
        s1.style.display="block";
        s2.style.display="none";
        t=false;
    }
    else{
        s2.style.display="block";
        s1.style.display="none";
        t=true;
    }
    return t;
  }
  return t;
}
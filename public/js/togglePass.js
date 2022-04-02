function togglePass(){
    var x = document.getElementById("pass_Input");
    if(x.type == "password"){
        x.type="text";
    }else{
        x.type = "password";
    }
}

function changeVis(){
    var image = document.getElementById('visIcon');

    if (image.getAttribute('src')=='vis2.png') {
       image.setAttribute('src', "nvis.png");
    } else {
       image.setAttribute('src', "vis2.png");
    }
}


function togglePass(){
    var x = document.getElementById("password");
    var y = document.getElementById("password-confirmation");
    if(x.type == "password"){
        x.type="text";
    }else{
        x.type = "password";
    }
    if(y.type == "password"){
        y.type="text";
    }else{
        y.type = "password";
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

function serviceDirect(){
    alert("Please Sign In first before making an appointment");
}

function deleteAlert(){
    alert("Are you sure you want to delete this appointment?");
}
function toggle2(showHideDiv, switchTextDiv) {

    	var ele = document.getElementById(showHideDiv);

    	var text = document.getElementById(switchTextDiv);

    	if(ele.style.display == "block") {

        		ele.style.display = "none";

    		//text.innerHTML = "restore";

      	}

    	else {
    		ele.style.display = "block";

    		//text.innerHTML = "collapse";

    	}

    }
    
function validateEmail() {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(document.getElementById("qEmail").value)){
        document.getElementById("resEmail").innerHTML="Correcto".fontcolor("green");
    }
    else {
        document.getElementById("resEmail").innerHTML="Incorrecto".fontcolor("red");
    }
}

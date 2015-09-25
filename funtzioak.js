function ikusBalioak(){
	var sAux="";
	var frm=document.getElementById("erregistro");
	for(i=0;i<frm.elements.length;i++){
		sAux +="IZENA: " + frm.elements[i].name+"";
		sAux +="BALIOA: " + frm.elements[i].value+"\n";
	}
	alert(sAux);
}

function balidatu(){
	var x = document.getElementById("erregistro");
	for(i=0;i<x.elements.length-2;i++){
		if (x.elements[i].value == null || x.elements[i].value == " ") {
			alert("All obligatory field must be completed");
			return false;
		}
	}
	if(!pasahitzaLuz(document.forms["erregistro"]["pasahitza"].value)){
		alert("Not the corret numbers for the password");
		return false;
	}if (!emailBalioztatu(document.forms["erregistro"]["emaila"].value)){
		alert ("Not the correct email format");
		return false;
	}if(!telefBalioztatu(document.forms["erregistro"]["telefonoa"].value)){
		alert("Not the correct telephone format");
		return false;
	}
			
}

function pasahitzaLuz(pass){
	if(pass.length <6){
		return false;
	}
	return true
}

function emailBalioztatu(emaila){
	var re = new RegExp("[a-z]+[0-9]{3}@ikasle.ehu.e(us|s)");
	return re.test(emaila);
}

function telefBalioztatu(telefonoa){
	var re = new RegExp("(6|9)[0-9]{8}");
	return re.test(telefonoa);
}
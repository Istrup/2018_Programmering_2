//globale variable til at holde tilvalgsvarer
var vestvalgt;
var dunkvalgt;
var fotovalgt;

//funktion der gør felt til visning af fejl synlig, og sætter indholdet i teksten
function visfejltekst(fejltekst) {
	document.getElementById('fejlfelt').style.display = "block";
	document.getElementById('fejltekst').innerHTML = fejltekst;  
}

//funktion der gør felt til visning af advarsler synlig, og sætter indholdet i teksten
function visAdvarseltekst(advarseltekst) {
	document.getElementById('advarselfelt').style.display = "block";
	document.getElementById('advarseltekst').innerHTML = advarseltekst;  
}

//funktion der gør felt til visning af advarsler synlig, og sætter indholdet i teksten
function vissuccestekst(succestekst) {
	document.getElementById('succesfelt').style.display = "block";
	document.getElementById('succestekst').innerHTML = succestekst;  
}

function nulstilTekstFelter(){
	document.getElementById('fejlfelt').style.display = "none";
	document.getElementById('advarselfelt').style.display = "none";
	document.getElementById('succesfelt').style.display = "none";
}


function validering(){ //Dette er den store funktion der håndterer validering af alle felter!
	//Fjerner først gamle beskeder
	nulstilTekstFelter();
	
	//Tjek løbetype er valgt
	if (document.tilmelding.lobetype.value == ""){
		visfejltekst('Du skal vælge om du vil løbe eller gå!');
		document.getElementById("lobevalg").style.background="#FFCCCC";
		return false;	
	} else { //hvis der har været fejl er baggrunden farvet. Vi sætter den til hvis for en sikkerheds skyld
		document.getElementById("lobevalg").style.background="#FFFFFF";
	}
	
	//Tjek om der er valgt distance
	if (document.tilmelding.distance.value == "0"){
		visfejltekst('Du skal vælge distance!');
		document.getElementById("distancevalg").style.background="#FFCCCC";
		return false;	
	} else {//hvis der har været fejl er baggrunden farvet. Vi sætter den til hvis for en sikkerheds skyld
		document.getElementById("distancevalg").style.background="#FFFFFF";
	}
	//advar, hvis nogen virkelig vil gå langt
	if (document.tilmelding.lobetype.value == "gaa" && (document.tilmelding.distance.value == "10" || document.tilmelding.distance.value == "22")){
		visAdvarseltekst("Er du sikker på at du vil gå " + document.tilmelding.distance.value + " km?");	
	}
	
	//Tjek hvilke gaver der er valgt
	//først nulstilles anvendte variable
	antalValgteGaver = 0;
	vestvalgt = false;
	dunkvalgt = false;
	fotovalgt = false;
	for (var i = 0; i< document.tilmelding.tilvalg.length; i++) {//for hver checkbox
		if(document.tilmelding.tilvalg[i].checked){
			switch (i){
				case 0:
					vestvalgt = true;
					antalValgteGaver++;
					break;
				case 1:
					dunkvalgt = true;
					antalValgteGaver++;
					break;
				case 2:
					fotovalgt = true;
					antalValgteGaver++;
					break;
			}
		}
	}
	switch (antalValgteGaver){
		case 0: //hvis ingen gave valgt, informeres om at det er gratis at vælge 2
			visAdvarseltekst('Du kan vælge to gratis gaver!');
			document.getElementById("gavevalg").style.background="#FFFFFF";
		break;
		case 3: //Hvis for mange gaver valgt, gives fejl
			visfejltekst('Du kan maksimalt vælge to af gaverne!');
			document.getElementById("gavevalg").style.background="#FFCCCC";
			return false;
		break;
		default: //Vi nulstiller baggrunden, hvis der nu tidligere har været fejl
			document.getElementById("gavevalg").style.background="#FFFFFF";
	}
	
	
	
	//Tjek at fornavn er udfyldt
	if (document.tilmelding.fornavn.value == ""){
		visfejltekst('Fornavn skal udfyldes!');
		document.tilmelding.fornavn.focus();
		return false;
	}
	//Tjek at efternavn er udfyldt
	if (document.tilmelding.efternavn.value == ""){
		visfejltekst('Efternavn skal udfyldes!');
		document.tilmelding.efternavn.focus() ;
		return false;
	} 
	
	
	
	
	//Det ser ud til at valideringen er passeret hertil, altså er der ingen fejl. 
	showContent(); //vis at det er gået godt!
	return false; //afslut, men bliv på siden (for at vi kan se resultatet. Skal fjernes hvis vi skal sende formdata, eks. til PHP-side..
}


function showContent(){	//Viser bare at det er gået godt, samt de bestilte gaver.
	//Kan være en oversigt med flere informationer.
	vissuccestekst("Det er gået godt!")
	return false;
}
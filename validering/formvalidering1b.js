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
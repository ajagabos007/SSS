
// function getStates(){
	jQuery(document).ready(function(){
		
	});
// }
/*function setState(){
	var xml ;
	try{
		xml = new XMLHttpRequest();
	}catch(e){
		try{
			xml = new ActiveXObject('Mxml2.XMLHTTP');
		}catch(e){
			try{
				xml = new ActiveXObject('Microsoft.XMLHTTP');
			}catch(e){
				window.alert("Your browser does not support Ajax\n Update your browers");
			}
		}
	}
	xml.onreadystatechange= function (){
       if(xml.readyState==4){
        alert('ajax received');
       	alert(xml.responseText);
       }
    }
    var country_id = document.getElementById('country_id').value;
	xml.open("GET","../StatesController.php",true);
	xml.send(null);
} */
function showPasswordField(){
	document.getElementsByClassName('password');
	alert('attribute set successfully');
}
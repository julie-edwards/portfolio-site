function makeSubset() {

	var subsetOutput = document.getElementById("subsetOutput");
	var subsetOutputUri = document.getElementById("subsetOutputUri");
	var myText = document.getElementById("subsetInput").value;
    var myCharacters = {};
	var mySubset = "";
	var mySubsetUri;

    //force all characters into AA to delete duplicates, then to string
    for (i=0; i<myText.length; i++){
        myCharacters[myText[i]] = true;
    }
    for (var key in myCharacters){
    	mySubset += key;
    }

    //encode characters
    mySubsetUri = encodeURIComponent(mySubset); 

    //output subset strings
    subsetOutput.value = mySubset;
    subsetOutputUri.value = mySubsetUri;
}
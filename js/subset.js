function makeSubset() {

	var subsetInput = document.getElementById("subsetInput");
	var subsetOutput = document.getElementById("subsetOutput");
	var subsetOutputUri = document.getElementById("subsetOutputUri");
	var subsetButton = document.getElementById("subsetButton");
	var spCharUnknownOutput = document.getElementById("spCharUnknownOutput");
	
	var myText;
	var myChars = "";
	var myCharsUri;

	var spChar = [];
	var spCharAr = {};
	var thisEnc;
	var spCharUnknown = {};
	var unrecognizedCharWarning = "";
	var characters = {};
	var encode = "";
	
	myText = subsetInput.value;
	//strip out html tags
	myText = myText.replace(/<[^>]*>/g, "");
    
	//find HTML special characters
    //add them to associative array to remove duplicates
    //then remove them from string
    spChar = myText.match(/&(?:[a-z]+|#\d+);/g);
    try{
		for (i=0; i<spChar.length; i++){
			spCharAr[spChar[i]] = true;
		}
    }
    catch(e){}
    myText = myText.replace(/&(?:[a-z]+|#\d+);/g, "");

    //replace special characters with encoded characters
    for (var key in spCharAr){
    	
    	switch(key){
    		case "&amp;":
    		case "&#38;":
    			thisEnc = "%26";
    			break;
    		case "&rsquo;":
    		case "&#8217;":
    			thisEnc = "%92";
    			break;
    		case "&gt;":
    			thisEnc = "%3E";
    			break;
    		default:
    			spCharUnknown[key] = true;
    	}
    	myChars += thisEnc;
    }

    //if there are unrecognized special characters, give a warning.
    if (spCharUnknown.hasOwnProperty(key)) {
    	unrecognizedCharWarning += "Unrecognized special characters: ";
        for (var key in spCharUnknown){
        	unrecognizedCharWarning += key;
        }
     }

    //force all characters into AA to delete duplicates, then to string
    for (i=0; i<myText.length; i++){
        characters[myText[i]] = true;
    }
    for (var key in characters){
    	myChars += key;
    }

    //encode characters
    myCharsUri = encodeURIComponent(myChars); 

    console.log(myCharsUri + "")
    console.log(spCharUnknown)
    console.log(unrecognizedCharWarning)
    subsetOutput.value = myChars;
    subsetOutputUri.value = myCharsUri;
}
//function to load a file from the URL "fromFile" into the object "whereTo"
function loadFileInto(recipeID, listName, whereTo) {

	// creating a new XMLHttpRequest object
	ajax = new XMLHttpRequest();
  
  // define the fromFile variable with the passed recipe name and list
  fromFile = "recipes.php?recipeID=" + recipeID + "&recipeList=" + listName;
  
  console.log("From URL: " + fromFile);

	// defines the GET/POST method, source, and async value of the AJAX object
	ajax.open("GET", fromFile, true);

	// provides code to do something in response to the AJAX request
	ajax.onreadystatechange = function() {
    
			if ((this.readyState == 4) && (this.status == 200)) {
        
				console.log("AJAX response: " + this.responseText);
        
        if (this.responseText != 0) { 
          responseArray = JSON.parse(this.responseText);
          
          responseHTML = "";
          for (x=0; x < responseArray.length; x++) {
            responseHTML += "<li>" + responseArray[x] + "</li>";
          }
          
          document.querySelector(whereTo).innerHTML = responseHTML;
          
        } else {
          console.log("Error: no recipe/list found");
        }
        
			} else if ((this.readyState == 4) && (this.status != 200)) {
        
        console.log("Error: " + this.responseText);
        
      }

  } // end ajax.onreadystatechange function

  // initiate request and wait for response
  ajax.send();

}


function Recipe(recipeName, contributorName, imageURL, recipeID) {


 this.recipeName = recipeName;
  this.contributor = contributorName;
  this.imageURL = imageURL;
  this.id = recipeID;

  this.displayRecipe = function() {

    layoutTitle = document.querySelectorAll("#heroBanner h1");
    layoutTitle[0].innerHTML = this.recipeName;

    layoutContributor = document.querySelectorAll("#heroBanner h4");
    layoutContributor[0].innerHTML = "Contributed by " + this.contributor;

    document.getElementById("heroBanner").style.backgroundImage = "url(" + this.imageURL + ")";

    loadFileInto(this.id, "ingredients", "#ingredients ul");
    loadFileInto(this.id, "equipment", "#equipment ul");
    loadFileInto(this.id, "directions", "#directions ol");

  }

}

SweetPotatoMuffins = new Recipe(
  "Sweet Potato Muffins",
  "Madisyn",
  "https://images.unsplash.com/photo-1615837197154-2e801f4bd294?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80",
  "SweetPotatoMuffins"
);

Salmon = new Recipe(
  "Lemon Panko Crusted Salmon",
  "Samuel Zhi Ming Tan",
  "https://images.unsplash.com/photo-1606858374191-c18040e98ad7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3540&q=80",
  "Salmon"
);

Toast = new Recipe(
  "Fluffy French Toast",
  "Analysse Palomares",
  "https://images.unsplash.com/photo-1639108094328-2b94a49b1c2e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80",
  "Toast"
);

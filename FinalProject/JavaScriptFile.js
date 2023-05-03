let functionCallCounter = 0;//this is to count how many times a function is called

/*
function showCard() {
  var card = document.querySelector('.card');
  card.classList.add('show');
}
*/

//This Function takes a parameter of a number that coinsides with the id number of the grid item. The number is taken can concatnated with a #P so that the function can find the ID. Then it'll display that element.
function showCard(event) {
  //functionCallCounter++;

  //let concate = '#P' + functionCallCounter.toString();

  //let concate = '#P' + event.target.id.toString();

  let concate = '#P' + event.toString();

  let card = document.querySelector(concate);

  card.style.display = "flex";

  //card.classList.add('show');

}


function cardInfoDisplayIngre(){




  
}

function hideCard(event) {

  let concate = '#P' + event.toString();
  let card = document.querySelector(concate);
  card.style.display = "none";
  //card.classList.remove('show');
}




///////////////Form JS

// Array to store the comments
var comments = [];





// Function to add a new comment to the comment box
function addComment() {

// Get the input value
let comment = document.querySelector("#comment-input").value;

let measurement = document.querySelector("#measurement").value;

let quantity = document.querySelector("#quantity").value;
// Validate the input

if (comment === "" || measurement === "" || quantity === "") {
  alert("Please enter a comment.");
  return;} else{

    
  //let formattedIngredients = "Ingredient: " + comment + " Measurement: " + measurement + " Quantity: " + quantity; 
  let formattedIngredients = quantity + " : " + measurement + " : " + comment; 

  // Add the comment to the array
  comments.push(formattedIngredients);
  // Update the comment box
  updateCommentBox();
  // Clear the input field
  document.querySelector("#comment-input").value = "";
  }
}

// Function to update the comment box
function updateCommentBox() {
  let commentBox = document.querySelector("#comment-box");
  // Clear the comment box
  commentBox.value = "";
  // Add each comment to the comment box
  for (let i = 0; i < comments.length; i++) {
    commentBox.value += comments[i] + "\n";
  }
}

// Function to delete the last comment from the comment box
function deleteComment() {
  // Remove the last comment from the array
  comments.pop();
  // Update the comment box
  updateCommentBox();
}









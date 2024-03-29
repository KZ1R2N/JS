document.getElementById("submit-button").style.display = "none";
document.getElementById("results").style.display = "none";
let resultt = document.getElementById('result').value;
let id =  document.getElementById('rev').value;
// Get the agree and disagree buttons
const agreeButton = document.querySelector('.button.agree-'+id);
const disagreeButton = document.querySelector('.button.disagree-'+id);

// Set the initial boolean values for the agree and disagree buttons
let agree = false;
let disagree = false;
if(resultt === "agree")
{
    // Set the agree boolean value to true
 agree = !agree;

// Set the disagree boolean value to false
 disagree = false;

// Update the CSS classes of the agree and disagree buttons
agreeButton.classList.toggle('agree-'+id);
agreeButton.classList.remove('disagree-'+id);

//agreeButton.innerText = 'agreed';


}
else if(resultt === "disagree")
{
      // Set the disagree boolean value to true
  disagree = !disagree;

// Set the agree boolean value to false
agree = false;

// Update the CSS classes of the agree and disagree buttons
disagreeButton.classList.toggle('disagree-'+id);
disagreeButton.classList.remove('agree-'+id);
//disagreeButton.innerText = 'Disagreed';


}

// Add event listeners to the agree and disagree buttons
agreeButton.addEventListener('click', () => {
  // Set the agree boolean value to true
  agree = !agree;

  // Set the disagree boolean value to false
  disagree = false;

  // Update the CSS classes of the agree and disagree buttons
  agreeButton.classList.toggle('agree-'+id);
  agreeButton.classList.remove('disagree-'+id);

  disagreeButton.classList.remove('disagree-'+id);
  disagreeButton.classList.remove('agree-'+id);


result(agree, disagree);

});

disagreeButton.addEventListener('click', () => {
  // Set the disagree boolean value to true
  disagree = !disagree;

  // Set the agree boolean value to false
  agree = false;

  // Update the CSS classes of the agree and disagree buttons
  disagreeButton.classList.toggle('disagree-'+id);
  disagreeButton.classList.remove('agree-'+id);

  agreeButton.classList.remove('agree-'+id);
  agreeButton.classList.remove('disagree-'+id);


  result(agree, disagree);

});

function result(agree, disagree) {
  const result = agree ? "agree" : (disagree ? "disagree" : "none");

  document.getElementById('results').value = result;

    document.getElementById("submit-button").click();

}
// Hide the submit button
document.getElementById("submit-button").style.display = "none";

// Hide the input field
document.getElementById("name-field").style.display = "none";
document.getElementById("email-field").style.display = "none";
        //👇 create data object
        const data = {
            name: "000",
            email: "Ratun@example.com",
        };


function sendData()
{


        //👇 populate the form fields with the data
        document.getElementById("name-field").value = data.name;
        document.getElementById("email-field").value = data.email;

        //👇 submit the form
        document.getElementById("submit-button").click();
}

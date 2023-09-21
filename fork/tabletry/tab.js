function approve(id) {
const buttonElement = document.getElementById("approve-button-"+id);
    // Send an AJAX request to approve the data
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "insert.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            buttonElement.innerHTML = 'Approved';
            buttonElement.ariaDisabled = true;
        
            }
        
    };
    xhr.send("id=" + id);
}

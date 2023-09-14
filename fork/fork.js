const found = document.querySelector('meta[name="name"]').content;
//alert(found);

document.querySelector('.forkb').addEventListener('click',()=>{
  fork();
});

const forkbutton = document.querySelector('.forkb');

forkbutton.classList.add('forked');
window.onload = function() {
  // Your JavaScript code here
  if(found)
  {
    forkbutton.classList.add('forked');
    forkbutton.innerText = 'Forked';
    document.getElementById('ff').src = "forked.png"
    //buttonElement.classList.remove('forkb');
  }

}

// forkbutton.onclick = async () => {
//   // Create a new `fetch()` request.
//   const xhr = await fetch("insertForker.php");

//   // Get the response text.
//   const responseText = await xhr.text();

//   // Set the inner HTML of the output element to the response text.
//   document.getElementById("output").innerHTML = responseText;
// };
const forkedbutton = document.querySelector('.forked');
// forkedbutton.onclick = async () => {
//   // Create a new `fetch()` request.
//   const xhr = await fetch("deleteForker.php");

//   // Get the response text.
//   const responseText = await xhr.text();

//   // Set the inner HTML of the output element to the response text.
//   document.getElementById("output").innerHTML = responseText;
// };


 function fork() {
    const buttonElement = document.querySelector('.forkb');
  

    if (buttonElement.innerText === 'Fork') {
      buttonElement.innerHTML = 'Forked';
      document.getElementById('ff').src = "forked.png"
      buttonElement.classList.add('forked');
      // async () => {
      //   // Create a new `fetch()` request.
      //   const xhr = await fetch("insertForker.php");
      
      //   // Get the response text.
      //   const responseText = await xhr.text();
      
      //   // Set the inner HTML of the output element to the response text.
      //   document.getElementById("output").innerHTML = responseText;
      // }

      const xhr = new XMLHttpRequest();

      xhr.open("GET", "insertForker.php");
      
      xhr.onload = function() {
        if (xhr.status == 200) {
          // The PHP file was executed successfully.
          const responseText = xhr.responseText;
          // Do something with the response text.
        } else {
          // The PHP file was not executed successfully.
          console.log("The PHP file was not executed successfully.");
        }
      };
      
      xhr.send();
   
     
    } else {
      buttonElement.innerHTML = 'Fork';
      document.getElementById('ff').src = "fork.png"
      buttonElement.classList.remove('forked');
      
      const xhr = new XMLHttpRequest();

      xhr.open("GET", "deleteForker.php");
      
      xhr.onload = function() {
        if (xhr.status == 200) {
          // The PHP file was executed successfully.
          const responseText = xhr.responseText;
          // Do something with the response text.
        } else {
          // The PHP file was not executed successfully.
          console.log("The PHP file was not executed successfully.");
        }
      };
      
      xhr.send();
     
    }

    //window.location.href = "http://localhost/fork/forkphp.php";

  }
  // function cookie(cookie)
  // {
  //   document.cookie = "cookie = " + cookieValue;
  // }


// document.querySelector('.forkb').addEventListener('click',()=>{
//   const xhr = new XMLHttpRequest();

//   xhr.open("GET", "insertForker.php");
  
//   xhr.onload = function() {
//     if (xhr.status == 200) {
//       // The PHP file was executed successfully.
//       const responseText = xhr.responseText;
//       // Do something with the response text.
//     } else {
//       // The PHP file was not executed successfully.
//       console.log("The PHP file was not executed successfully.");
//     }
//   };
  
//   xhr.send();
  
// });

// document.querySelector('.forked').addEventListener('click',()=>{
//   const xhr = new XMLHttpRequest();

//   xhr.open("GET", "deleteForker.php");
  
//   xhr.onload = function() {
//     if (xhr.status == 200) {
//       // The PHP file was executed successfully.
//       const responseText = xhr.responseText;
//       // Do something with the response text.
//     } else {
//       // The PHP file was not executed successfully.
//       console.log("The PHP file was not executed successfully.");
//     }
//   };
  
//   xhr.send();
// });
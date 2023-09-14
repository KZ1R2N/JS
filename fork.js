fetch('fork.php')
    .then(response => response.json())
    .then(data => {
        const dataMap = new Map();

        data.forEach(item => {
            const reviewers = item.reviewers;
            const forker = item.forker;

            if (!dataMap.has(reviewers)) {
                dataMap.set(reviewers, [forker]);
            } else {
                dataMap.get(reviewers).push(forker);
            }
        });

        // Now you can use dataMap for further processing
        console.log(dataMap);
    });



const user = 'R2N';
const forker = 'medha'





document.querySelector('.forkb').addEventListener('click',()=>{
  fork();
});
function fork() {
    const buttonElement = document.querySelector('.forkb');
  

    if (buttonElement.innerText === 'Fork') {
      buttonElement.innerHTML = 'Forked';
      document.getElementById('ff').src = "forked.png"
      buttonElement.classList.add('forked');
      animate();
    } else {
      buttonElement.innerHTML = 'Fork';
      document.getElementById('ff').src = "fork.png"
      buttonElement.classList.remove('forked');
    }
  }

  // function pickImage() {
  //   const randomNumber = Math.random();
  
  //   let image = '';
  
  //   if (randomNumber >= 0 && randomNumber < 1 / 6) {
  //     image = 'burger';
  //   } else if (randomNumber >= 1 / 6 && randomNumber < 2 / 6) {
  //     image = 'eating';
  //   } else if (randomNumber >= 2 / 6 && randomNumber < 3 / 6) {
  //     image = 'hotdog';
  //   } else if (randomNumber >= 3 / 6 && randomNumber < 4 / 6) {
  //     image = 'hamburger';
  //   } else if (randomNumber >= 4 / 6 && randomNumber < 5 / 6) {
  //     image = 'pizza';
  //   } else if (randomNumber >= 5 / 6 && randomNumber < 1) {
  //     image = 'friedpotatoes';
  //   } 
  //   return image;
  // }
  // function autoPlay()
  // {
  //   setInterval(function(){
  //     const images = pickImage();
    
  //   },1000)
  // }
  // function animate()
  // {
  //  autoPlay();
  //   document.querySelector('.image').innerHTML = 'you  ${images} <img src = "${images}.png" class = "imgg">'
  // }





// // Create a SQL query to select the data from the table
// const query = `SELECT * FROM tables`;

// // Execute the query and get the results
// const results = db.query(query);

// // Process the results and display them
// for (const row of results) {
//   console.log(row);
// }

// const db = new Database();
// const query = `SELECT * FROM tables LIMIT 2`;
// const results = db.query(query);

// const tablesMap = new Map();

// for (const row of results) {
//   const table = row.table;
//   const data = row.data;

//   tablesMap.set(table, data);
// }

// console.log(tablesMap);
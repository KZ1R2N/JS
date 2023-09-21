// Get the liked and disliked values from the PHP script
const liked = JSON.parse(document.querySelector('#liked-disliked-values').textContent).liked;
const disliked = JSON.parse(document.querySelector('#liked-disliked-values').textContent).disliked;

// Update the like and dislike buttons
const likeButton = document.querySelector('#like-button');
const dislikeButton = document.querySelector('#dislike-button');

if (liked) {
  likeButton.classList.add('active');
  dislikeButton.classList.remove('active');
} else if (disliked) {
  likeButton.classList.remove('active');
  dislikeButton.classList.add('active');
} else {
  likeButton.classList.remove('active');
  dislikeButton.classList.remove('active');
}

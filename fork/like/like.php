<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=review_database', 'root', '');

// Get the review, like, dislike, and user ID from the form submission
$review = $_POST['review'];
$like = $_POST['like'];
$dislike = $_POST['dislike'];
$userId = $_SESSION['user_id'];

// Insert the review, like, dislike, and user ID into the database
$sql = 'INSERT INTO reviews (review, liked, disliked, user_id) VALUES (:review, :liked, :disliked, :user_id)';
$stmt = $db->prepare($sql);
$stmt->bindParam(':review', $review);
$stmt->bindParam(':liked', $like);
$stmt->bindParam(':disliked', $dislike);
$stmt->bindParam(':user_id', $userId);
$stmt->execute();

// Redirect the user to another page that displays the reviews, likes, and dislikes
header('Location: show_reviews.php');

?>
<!-- <?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=like_dislike_database', 'root', '');

// Get the liked or disliked reviews from the database
//$sql = 'SELECT * FROM like_dislike_table WHERE liked = 1 OR disliked = 1';
$sql = 'SELECT reviews.review, like_dislike_table.liked, like_dislike_table.disliked
FROM reviews
INNER JOIN like_dislike_table
ON reviews.review_id = like_dislike_table.review_id';
$stmt = $db->prepare($sql);
$stmt->execute();
$reviews = $stmt->fetchAll();


?>
<?php foreach ($reviews as $review) { ?>
  <p><?php echo $review['review'] . ' - ' . $review['liked'] . ' - ' . $review['disliked']; ?></p>
<?php } ?> -->

<!-- <!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body>
    <div class="like-dislike-buttons">
  <button id="like-button" class="btn btn-primary">Like</button>
  <button id="dislike-button" class="btn btn-danger">Dislike</button>
</div>

    </body>
</head>
<style>
    </style>
<script src="like.js">
         
</script> -->


 <!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body>
<form action="like.php" method="POST">
  <input type="text" name="review" placeholder="Enter a review">
  <button type="submit" name="like">Like</button>
  <button type="submit" name="dislike">Dislike</button>
</form>

</body>
</head>


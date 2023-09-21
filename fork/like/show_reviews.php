<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=review_database', 'root', '');

// Get the reviews, likes, and dislikes from the database
$sql = 'SELECT reviews.*, like_dislike_table.liked, like_dislike_table.disliked FROM reviews LEFT JOIN like_dislike_table ON reviews.id = like_dislike_table.review_id AND like_dislike_table.user_id = :user_id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();

$reviews = $stmt->fetchAll();

?>

<table>
  <thead>
    <tr>
      <th>Review</th>
      <th>Likes</th>
      <th>Dislikes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reviews as $review) { ?>
      <tr>
        <td><?php echo $review['review']; ?></td>
        <td><?php echo $review['liked']; ?></td>
        <td><?php echo $review['disliked']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

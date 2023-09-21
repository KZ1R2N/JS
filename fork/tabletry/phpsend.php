<?php
   $key = 'R2N';
   session_start();

   $_SESSION['k'] = 'Ra2N';
   

?>

<!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body>
    <input type="hidden" id="key" value="<?php echo $key; ?>">

</body>
</head>
<script src="phpsend.js"></script>
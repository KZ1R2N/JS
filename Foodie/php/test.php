<?php
require_once("database.php");
$sql = "SELECT username FROM registration";
$value = mysqli_query($connect, $sql);
while ($res = mysqli_fetch_assoc($value)) {
    
?>
    <input type="hidden" id="<?= $res['username']; ?>" value="<?= $res['username']; ?>">
    <script>
        function getValue() {
            let username = document.getElementById('username');
            let val = username.value;
            let input = document.getElementById('<?= $res['username']; ?>');
            let name = input.value;
            let ad = document.getElementById('q');
            q.innerHTML = val;
            let add = document.getElementById('v');
            v.innerHTML = name;


            if (val == name) {
                document.getElementById('result').style.display = "inline-block";
            } else {
                document.getElementById('result').style.display = "none";
            }
        }
    </script>
<?php
}
?>
<div class="txt_field">
    <input id="username" type="text" name="username" oninput="getValue()" required>
    <span></span>
    <label for="username">User Name</label>
    <small id="result">username is already in use</small>
    <br>
    <span id="q"></span>
    <br>
    <span id="v"></span>
</div>
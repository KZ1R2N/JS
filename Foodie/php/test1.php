<html>

<body>
    <?php

    require_once("database.php");
    $sql = "SELECT username FROM registration";
    $value = mysqli_query($connect, $sql);

    $array = array();
    while ($res = mysqli_fetch_assoc($value)) {
        $array[] = $res['username'];
    }

    ?>
    <div class="txt_field">
        <input id="username" type="text" name="username" oninput="getValue()" required>
        <span></span>
        <label for="username">User Name</label>
        <br>
        <small id="result"></small>
    </div>
    <script>
        var user = <?php echo json_encode($array); ?>;
        let fLen = user.length;


        function getValue() {
            let username = document.getElementById('username');
            let val = username.value;

            if (user.includes(val)) {
                add = document.getElementById('result');
                result.innerHTML = "username is already in use";
            } else {
                add = document.getElementById('v');
                result.innerHTML = " ";
            }

        }
    </script>
</body>

</html>
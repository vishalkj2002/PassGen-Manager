<?php
    include 'message.php';
    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        $sql = "delete from `passwords` where id = $id";
        $result = mysqli_query($cons, $sql);
        if($result) {
            echo "<script>alert('Password deleted')</script>";
            header("Location: ./managePasswords.php");
        } else {
            die(mysqli_error($cons));
        }
    }
?>
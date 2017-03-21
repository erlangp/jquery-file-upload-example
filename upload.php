<?php
$r['success'] = false;
$r['get'] = $_GET;
$r['post'] = $_POST;
$r['files'] = $_FILES;
if (isset($_POST['send'])) {
    if (isset($_FILES['photo']['name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
        $r['success'] = true;
    }
}
echo json_encode($r, JSON_PRETTY_PRINT);
exit();

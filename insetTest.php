<?php include("include/connect.php");

$output = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $desc = $_POST["desc"];

    try {
        $query = $conn->prepare('INSERT INTO tbl_news (news_title, news_desc)
                                VALUES (?, ?)');
        if ($query->execute(array($name, $desc))) {
            $output['status'] = 'success';
            $output['message'] = 'Added Successfully';
        } else {
            $output['status'] = 'error';
            $output['message'] = 'Something went wrong. Cannot add member';
        }
    } catch (PDOException $e) {
        $output['status'] = 'error';
        $output['message'] = 'Database error: ' . $e->getMessage();
    }echo json_encode($output);
}
?>
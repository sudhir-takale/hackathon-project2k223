<?php
// ... Database connection setup ...

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questionId = $_POST['question_id'];
    $answerText = $_POST['answer_text'];

    // Insert the answer into the database
    $query = "INSERT INTO answers (question_id, answer_text) VALUES ($questionId, '$answerText')";
    mysqli_query($conn, $query);

    // Redirect back to the index.php page
    header('Location: index.php');
    exit();
}

// ... Close the database connection ...
?>
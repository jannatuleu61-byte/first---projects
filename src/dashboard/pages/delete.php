<?php 
    include '../../db/connect.php';

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']); // Make sure it's an integer to prevent SQL injection

        // SQL query to delete the book
        $sql = "DELETE FROM books WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            // Redirect after successful deletion
            header("Location: books/view-books.php"); // change to your target page
            exit();
        } else {
            echo "Error deleting book: " . mysqli_error($conn);
        }
    } else {
        echo "No book ID specified.";
    }

    // Close connection
    mysqli_close($conn);

?>
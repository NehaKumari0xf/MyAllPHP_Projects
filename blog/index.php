<?php include('includes/header.php'); ?>
<?php include('includes/db.php'); ?>

<div class="row">
    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $row['title'] . '</h5>
                    <p class="card-text">' . substr($row['content'], 0, 100) . '...</p>
                    <a href="post.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>';
    }
    ?>
</div>

<?php include('includes/footer.php'); ?>

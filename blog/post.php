<?php include('includes/header.php'); ?>
<?php include('includes/db.php'); ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
?>

<h1><?php echo $post['title']; ?></h1>
<img src="images/<?php echo $post['image']; ?>" class="img-fluid" alt="<?php echo $post['title']; ?>">
<p><?php echo $post['content']; ?></p>

<?php include('includes/footer.php'); ?>

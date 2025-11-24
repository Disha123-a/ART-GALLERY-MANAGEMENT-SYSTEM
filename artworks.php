<?php include('includes/header.php'); ?>
<?php include('db.php'); ?>

<div class="page-header">Artworks</div>

<div class="card-grid">
<?php
$sql = "SELECT * FROM artworks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="assets/images/'.$row['image'].'" alt="'.$row['title'].'">';
        echo '<h3>'.$row['title'].'</h3>';
        echo '<p>'.$row['description'].'</p>';
        echo '</div>';
    }
} else {
    echo "<p>No artworks found.</p>";
}
?>
</div>

<?php include('includes/footer.php'); ?>

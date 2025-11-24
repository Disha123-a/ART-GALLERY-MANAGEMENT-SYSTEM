<?php include('includes/header.php'); ?>
<?php include('db.php'); ?>

<div class="page-header">Our Artists</div>

<div class="card-grid">
<?php
$sql = "SELECT * FROM artists";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<div class="card">';
        echo '<img src="assets/images/'.$row['image'].'" alt="'.$row['name'].'">';
        echo '<h3>'.$row['name'].'</h3>';
        echo '<p><b>Style:</b> '.$row['style'].'</p>';
        echo '<p><b>Era:</b> '.$row['era'].'</p>';
        echo '<p>'.$row['bio'].'</p>';
        echo '</div>';
    }
}else{
    echo "<p>No artists found.</p>";
}
?>
</div>

<?php include('includes/footer.php'); ?>

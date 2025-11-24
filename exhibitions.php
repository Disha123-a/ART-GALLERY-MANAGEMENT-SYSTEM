<?php include('includes/header.php'); ?>
<?php include('db.php'); ?>

<div class="page-header">Exhibitions</div>

<div class="card-grid">
<?php
$sql = "SELECT * FROM exhibitions";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<div class="card">';
        echo '<img src="assets/images/'.$row['image'].'" alt="'.$row['title'].'">';
        echo '<h3>'.$row['title'].'</h3>';
        echo '<p><b>Date:</b> '.$row['date'].'</p>';
        echo '<p><b>Venue:</b> '.$row['venue'].'</p>';
        echo '<p><b>Theme:</b> '.$row['theme'].'</p>';
        echo '</div>';
    }
}else{
    echo "<p>No exhibitions found.</p>";
}
?>
</div>

<?php include('includes/footer.php'); ?>

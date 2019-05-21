<?php include 'header.php'; ?>
<?php

while($row = $contacts-> fetch(PDO::FETCH_ASSOC)){
    var_dump($row);
    echo "<br>";
}

?>
    <a href="http://localhost/yourmvc/index.php?op=read&id=1">Read id 1</a>
    <br>

<?php include'footer.php'; ?>
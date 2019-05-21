<?php include 'header.php'; ?>

   <!-- <a href="http://localhost/yourmvc/index.php?op=read&id=1">hah</a>-->
    <br>
    <form method="POST" action="http://localhost/yourmvc/index.php?op=create">
        <label>Naam</label>
        <input type="text" name="name" >
        <label>TEL</label>
        <input type="text" name="phone">
        <label>Email</label>
        <input type="text" name="email">
        <label>Location</label>
        <input type="text" name="location" >
        <input type="submit" name="verzenden"></input>
    </form>

<?php include'footer.php'; ?>
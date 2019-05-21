<?php include 'header.php'; ?>

    <!-- <a href="http://localhost/yourmvc/index.php?op=read&id=1">hah</a>-->
    <br>
    <form method="POST" action="http://localhost/yourmvc/index.php?op=update">
        <label>Naam</label>
        <input type="text" name="name" value="jackjones" >
        <label>TEL</label>
        <input type="text" name="phone" value="">
        <label>Email</label>
        <input type="text" name="email" value="">
        <label>Location</label>
        <input type="text" name="location" value="">
        <input type="submit" name="verzenden"/>
    </form>

<?php include'footer.php'; ?>
<html>
    <body>
        <form method="post">
            <label for="grade">Enter Grade: </label>
            <input type="num" name="grade" value="grade">
            <input type="button" name="Check" value="check">
</form>
</body>
</html>

<?php
if(isset($_POST['Check'])){
    $grade = $_POST['grade'];

    if($grade >=60)
     echo "First division";

    else if($grade >=45 && $grade <= 59)
     echo "Second division";

    else if($grade >=33 && $grade <=44)
     echo "Third division";

    else
     echo "Fail"; 
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <form name = 'formPost' method='post'action="postTest2.php">
        <input class="white_box" type="text" name="titleValue" value="" id = "titleValuee">
        </form>
    </div>
    <div>
        <form action="postTest2.php" method='post' name="formPost2">
            <input type="hidden" name='titleValue2' value="">
            <button  id="search"  value="넘어간다" onclick="gogo()">
        </form>
    </div>
    <script>
        function gogo(){
            form = document.formPost;
            form2 = document.formPost2;
            form2.titleValue2.value = form.titleValue.value;
            form2.submit();
        }
    </script>
</body>

</html>
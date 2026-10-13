<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="{{ route('add') }}" method="post">
        <input type="id" disabled placeholder="enter id">
        <input type="text" name="name" placeholder="enter name" required>
        <input type="email" name="email" placeholder="enter email" required>
        <br><br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </form>
</body>

</html>
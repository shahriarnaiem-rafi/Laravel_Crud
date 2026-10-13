<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="{{ route('edited') }}" method="post">
        @csrf
        
        <input type="text" readonly value="{{ $Datas->id }}" name="id">
        <input type="text" name="name" value="{{ $Datas->name }}" placeholder="enter name" required>
        <input type="email" name="email" value="{{ $Datas->email }}" placeholder="enter email" required>
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto flex items-center justify-between px-6 py-4">
            <h1 class="text-2xl font-bold text-blue-600">
                My Website
            </h1>

            <ul class="flex gap-6">
                <li><a href="/" class="hover:text-blue-600">Home</a></li>
                <li><a href="/adddata" class="hover:text-blue-600">Add Data</a></li>

            </ul>
        </nav>
    </header>

    
        <form action="{{route('adddata')  }}" method="post">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="enter your name" required><br><br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="enter your mail" required>
            <br><br>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </form>


    </body>

</html>
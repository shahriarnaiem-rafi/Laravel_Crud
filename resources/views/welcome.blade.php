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

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">

        <!-- Hero Section -->
        <section class="rounded-xl bg-blue-600 px-8 py-16 text-center text-white">
            <h2 class="mb-4 text-4xl font-bold">
                Welcome to My Website
            </h2>

            <p class="mb-6 text-lg">
                Build modern and responsive websites with Tailwind CSS.
            </p>

            <a href="#"
                class="inline-block rounded-lg bg-white px-6 py-3 font-semibold text-blue-600 hover:bg-gray-100">
                Get Started
            </a>
        </section>
        <section>
            <h2 class="text-center text-2xl font-bold mt-10 uppercase bg-red-300">this is my table</h2>
            <Table class="w-full border-collapse text-left border-2px">
                <thead class="bg-blue-400 ">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($datas->isnotempty())
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{$data->id }}</td>
                        <td>{{$data->name }}</td>
                        <td>{{$data->email }}</td>
                        <td>
                            <a href="#" class="btn">
                                Edit
                            </a>
                            <form action="{{ route('delete',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button href="" class="btn"> delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4" class="border p-3 text-center">
                            No data found.
                        </td>
                    </tr>
                    @endif
                </tbody>

            </Table>
        </section>




    </main>

    <!-- Footer -->
    <footer class="mt-12 bg-gray-900 px-6 py-6 text-center text-white">
        <p>&copy; 2026 My Website. All rights reserved.</p>
    </footer>

</body>

</html>
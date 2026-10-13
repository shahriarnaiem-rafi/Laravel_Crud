<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD Practice</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto px-6 py-12">

        <h3 class="text-center text-3xl font-bold text-gray-800 mb-8">
            This is CRUD Practice
        </h3>

        <div class="bg-white rounded-xl shadow-md p-6">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-700">
                    User Data
                </h2>

                <button class="bg-blue-600 hover:bg-blue-700 text-white
                font-semibold px-5 py-2.5 rounded-lg shadow transition duration-200">
                    <a href="/add">+ Add Data Form</a>
                </button>
            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left border-collapse">

                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-6 py-4 rounded-tl-lg">ID</th>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4 rounded-tr-lg text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">

                        @if ($Datas->isnotempty())

                        @foreach ($Datas as $Data)

                        <tr class="hover:bg-blue-50 transition duration-200">

                            <td class="px-6 py-4 text-gray-600 font-medium">
                                {{ $Data->id}}
                            </td>

                            <td class="px-6 py-4 text-gray-800 font-semibold">
                                {{ $Data->name}}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $Data->email}}
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-center items-center gap-3">

                                    <a href="{{  route('edit',$Data->id)}}"
                                    class="bg-amber-500 hover:bg-amber-600 text-white
                                    px-4 py-2 rounded-md font-medium transition duration-200">
                                        Edit
                                    </a>

                                    <form action="{{ route('delete',$Data->id) }}" method="post">
                                        <button
                                        class="bg-red-600 hover:bg-red-700 text-white
                                        px-4 py-2 rounded-md font-medium transition duration-200">
                                        @csrf
                                        @method('DELETE')
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>

                        @endforeach

                        @else

                        <tfoot>
                            <tr>
                                <td colspan="4"
                                class="text-center py-10 text-gray-500 text-lg">
                                    No data available
                                </td>
                            </tr>
                        </tfoot>

                        @endif

                    </tbody>

                </table>

            </div>

        </div>

        <p class="text-center text-gray-400 text-sm mt-6">
            CRUD Practice Dashboard
        </p>

    </div>

</body>

</html>

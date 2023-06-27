<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite('resources/css/app.css')
    <style>
        .table-title {
            max-width: 200px;
            word-wrap: break-word;
        }

        .table-description {
            max-width: 300px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<div class="flex justify-center">
    <h1 class="text-2xl font-bold mb-4">Items</h1>
</div>

<div class="flex justify-center mb-4">
    <a href="{{ route('items.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Item
    </a>
</div>

<div class="flex justify-center">
    <table class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
        <tr>
            <th class="py-2 px-4 border-b">Title</th>
            <th class="py-2 px-4 border-b">Description</th>
            <th class="py-2 px-4 border-b">Edit</th>
            <th class="py-2 px-4 border-b">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td class="py-2 px-4 border-b table-title">{{ $item->title }}</td>
                <td class="py-2 px-4 border-b table-description">{{ $item->description }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('items.edit', $item->id) }}"
                       class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                        Edit
                    </a>
                </td>
                <td class="py-2 px-4 border-b">
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="flex justify-center mt-4">
    {{ $items->links('pagination::tailwind') }}
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

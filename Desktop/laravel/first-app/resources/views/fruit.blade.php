<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fruit['name'] }} - Fruit Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-green-500 p-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-white text-xl font-bold">Fruit Shop</div>
                <ul class="flex space-x-6 text-white">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="#" class="hover:text-gray-200">My Cart</a></li>
                    <li><a href="#" class="hover:text-gray-200">About</a></li>
                    <li><a href="#" class="hover:text-gray-200">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mx-auto py-12">
        <div class="text-center mb-12 font-bold text-2xl">
            <h1>{{ $fruit['name'] }}</h1>
        </div>
        <div class="flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{ $fruit['url'] }}" alt="{{ $fruit['name'] }}" class="w-full h-fit object-cover mb-4 rounded-md">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $fruit['name'] }}</h2>
                <p class="text-gray-700 mb-2">{{ $fruit['description'] }}</p>
                <p class="text-gray-500 text-sm">{{ $fruit['price'] }} per KG</p>
                <p class="text-gray-500 text-sm">From: {{ $fruit['origin'] }}</p>
                <!-- You can add more details here -->
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mt-4 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a1 1 0 1 1 0 2h-1v10a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8H5a1 1 0 1 1 0-2h2V4zm4 4v10h8V8H8z" clip-rule="evenodd" />
                    </svg>
                    Add to Cart
                </button>
            </div>
        </div>
    </main>
    <footer class="bg-green-500 py-6 text-center text-white">
        <div class="container mx-auto">
            <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

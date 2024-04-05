<x-layout>
    <div>
        <!-- Display products List-->
        <div class="max-w-4xl mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h2 class="font-semibold mb-2">{{ $product['name'] }}</h2>
                        <p class="text-sm text-gray-400 mb-4">{{ $product['description'] }}</p>
                        <p class="font-semibold">{{ $product['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

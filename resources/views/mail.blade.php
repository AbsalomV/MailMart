<x-layout>
    <?php
        // Product data
    $products = [
        [
            'id' => 1,
            'name' => 'Product01',
            'description' => 'This is product01',
            'price' => '$19.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Product02',
            'description' => 'This product is better than product01.',
            'price' => '$24.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Product03',
            'description' => 'This is our best product.',
            'price' => '$29.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Product04',
            'description' => 'Ok, if you have too much money, this product is as good as Product03, but is VIP because it is covered in gold.',
            'price' => '$149.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ]
    ];
    ?>
    <div class="max-w-2xl mx-auto p-6">
        <!-- Mail details -->
        <div class="flex justify-between">
            <div>
                <p class="text-2xl font-bold">{{ $mail['subject'] }}</p>
            </div>
            <div class="bg-green-400 px-2 py-1 rounded-md">
                <p class="text-white mb-0">{{ $mail['status'] }}</p>
            </div>
        </div>
        <p class="text-gray-600 mb-2">{{ $mail['from'] }} - {{ $mail['date'] }}</p>

        <div class="bg-gray-100 rounded-md mt-4 p-4">
            <p>{{ $mail['body'] }}</p>
        </div>

        <!-- Reply Form -->
        <form class="mt-6">
            <label for="reply" class="block text-sm font-medium text-gray-700">Reply:</label>
            <textarea id="reply" name="reply" rows="6" class="bg-gray-100 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-500 rounded-md p-4"></textarea>
            <div class="flex justify-between mt-4">

                <!-- Attachments -->
                <div class="w-1/2 mr-4">
                    <input type="file" id="attachments" name="attachments" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-500 rounded-md">
                </div>

                <!-- Buttons -->
                <div class="flex items-center">
                    <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600">Send</button>
                </div>
            </div>
        </form>

        <!-- Order -->
        <div class="mt-6 ml-auto">
            <label for="product-options" class="block text-sm font-medium text-gray-700">Order</label>
            <div class="mt-2">
                <div class="flex items-center mb-2">
                    <input type="number" class="mr-2 w-12 rounded-md border-gray-500">
                    <select id="product-options" name="product-options" class="w-full shadow-sm sm:text-sm border-gray-500 rounded-md">
                        <option value="">Select Product</option>
                        <?php foreach ($products as $product): ?>
                        <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Additional dropdowns will be added dynamically here -->
            </div>
        </div>
    </div>
</x-layout>

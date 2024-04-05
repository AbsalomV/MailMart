<x-layout>
    <div class="container mx-auto p-8 flex justify-center">
        <div class="w-full max-w-lg">
            <!-- Generate Shipping Label Form -->
            <section class="mb-12">
                <h2 class="text-2xl text-center font-bold mb-6">Generate Shipping Label</h2>
                <form id="shippingForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1 text-center">
                        <div>
                            <label for="recipientName" class="block text-sm font-medium text-gray-700">Recipient Name</label>
                            <input type="text" id="recipientName" name="recipientName" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                            <input type="text" id="company" name="company" class="input bg-gray-100">
                        </div>
                        <div>
                            <label for="street" class="block text-sm font-medium text-gray-700">Street</label>
                            <input type="text" id="street" name="street" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="number" class="block text-sm font-medium text-gray-700">Number</label>
                            <input type="text" id="number" name="number" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="boxNumber" class="block text-sm font-medium text-gray-700">Box Number</label>
                            <input type="text" id="boxNumber" name="boxNumber" class="input bg-gray-100">
                        </div>
                        <div>
                            <label for="zipCode" class="block text-sm font-medium text-gray-700">Zip Code</label>
                            <input type="text" id="zipCode" name="zipCode" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" id="city" name="city" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                            <input type="text" id="country" name="country" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" id="phone" name="phone" class="input bg-gray-100" required>
                        </div>
                    </div>
                </form>
                <div class="flex justify-center mt-6">
                <button type="submit" class="btn bg-blue-500 text-white text-center px-2 py-1 rounded-lg hover:bg-blue-600">Generate Shipping Label</button>
                </div>
            </section>

            <!-- Track Parcel Form -->
            <section class="mb-12">
                <h2 class="text-2xl text-center font-bold mb-6">Track Parcel</h2>
                <form id="trackingForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1 text-center">
                        <div>
                            <label for="trackingID" class="block text-sm font-medium text-gray-700">Tracking ID:</label>
                            <input type="text" id="trackingID" name="trackingID" class="input bg-gray-100" required>
                        </div>
                        <div>
                            <label for="trackingID" class="block text-sm font-medium text-gray-700">Zip Code</label>
                            <input type="text" id="trackingID" name="trackingID" class="input bg-gray-100" required>
                        </div>
                    </div>
                </form>
                <div class="flex justify-center mt-6">
                <button type="submit" class="btn bg-blue-500 text-white text-center px-2 py-1 rounded-lg hover:bg-blue-600">Track Parcel</button>
                </div>
            </section>

            <!-- Tracking Results -->
            <section id="trackingResults" class="mt-8">
                <!-- Tracking results will be displayed here -->
            </section>
        </div>
    </div>

    <!-- Add your JavaScript code here for interacting with the Sendcloud API -->
    <script>
        // Add your JavaScript code here
        document.getElementById("shippingForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Implement logic to generate shipping label using Sendcloud API
            // You'll need to make API requests here
            // Handle response accordingly
        });

        document.getElementById("trackingForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Implement logic to track parcel using Sendcloud API
            // You'll need to make API requests here
            // Handle response accordingly
        });
    </script>
</x-layout>

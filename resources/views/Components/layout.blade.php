<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MailMart</title>

    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Dashboard -->
<div class="min-h-full">
    <nav class="bg-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- MailMart Logo -->
                <div class="flex items-center justify-center">
                    <img class="h-8 w-8 mr-2" src="https://cdn2.iconfinder.com/data/icons/business-strategy-and-finance-4/512/42_Letter_Money_Dollar_Mail-1024.png" alt="MailMart">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-650">MailMart</h1>
                </div>
                <!-- Navigation -->
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-auto flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Desk</x-nav-link>
                            <x-nav-link href="/shipping" :active="request()->is('shipping')">Shipping</x-nav-link>
                            <x-nav-link href="/catalog" :active="request()->is('catalog')">Catalog</x-nav-link>
                        </div>
                    </div>
                </div>
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://media.istockphoto.com/id/1495088043/vector/user-profile-icon-avatar-or-person-icon-profile-picture-portrait-symbol-default-portrait.jpg?s=612x612&w=0&k=20&c=dhV2p1JwmloBTOaGAtaA3AW1KSnjsdMt7-U_3EZElZ0=" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile version -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <x-nav-link href="/" :active="request()->is('/')">Desk</x-nav-link>
                <x-nav-link href="/shipping" :active="request()->is('shipping')">Shipping</x-nav-link>
                <x-nav-link href="/catalog" :active="request()->is('catalog')">Catalog</x-nav-link>

            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://media.istockphoto.com/id/1495088043/vector/user-profile-icon-avatar-or-person-icon-profile-picture-portrait-symbol-default-portrait.jpg?s=612x612&w=0&k=20&c=dhV2p1JwmloBTOaGAtaA3AW1KSnjsdMt7-U_3EZElZ0=" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-gray-650">Agent01</div>
                        <div class="text-sm font-medium leading-none text-gray-400">info@MailMart.com</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Specific Content -->
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>
</div>
</body>
</html>

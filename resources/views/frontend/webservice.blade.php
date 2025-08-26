@extends('layouts.app')

@section('content')
    <section class="py-16 bg-gray-50 mt-8">
        <div class="container mx-auto px-4">
            <!-- Section Heading -->
            <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Products</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Explore our wide range of premium products designed to meet your needs.
            </p>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Product Card -01 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://real-estate.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://lms.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -02 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://lms.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://lms.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -03 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://blog.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://blog.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>
                {{-- Product Card -04 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://hospital.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://hospital.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -05 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://creatif.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://creatif.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -06 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://demo-unit-one.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://demo-unit-one.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -07 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://travel-one.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://travel-one.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -05 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://company.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://company.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Product Card -08 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <div class="max-w-md mx-auto p-4">
                        <div class="rounded-xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="h-80">
                            <iframe
                                src="https://charity.syedmominulislam.com/"
                                class="w-full h-full"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                            </div>
                            <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Live Website Preview</h3>
                            <p class="text-gray-600 text-sm">Explore the website directly within this frame.</p>
                            </div>
                        </div>
                        </div>
                        <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">Our website support plan starts at just 1,000৳ per month, offering reliable maintenance, security updates, bug fixes, and technical assistance. We ensure smooth performance, regular backups, and quick issue resolution so you can focus on your business while we keep your website running efficiently and securely every month.
                    </p>
                        <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold text-xl">৳1000/m</span>
                        <div class="flex space-x-2">
                            <a href="https://charity.syedmominulislam.com/"
                            class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm">Demo</a>
                            <a href="#"
                            class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600 transition duration-300 text-sm">Buy</a>
                        </div>
                        </div>
                    </div>
                </div>









            <!-- Duplicate above card for more products -->
            </div>
        </div>
    </section>

@endsection

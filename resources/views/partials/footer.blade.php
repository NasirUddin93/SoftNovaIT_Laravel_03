<footer class="bg-gray-900 text-white pt-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Logo & Description -->
            <div class="md:col-span-1">
                <h2 class="text-3xl font-bold mb-4">SoftNovaIT</h2>
                <p class="text-gray-400">
                    A creative digital agency that helps brands grow by delivering modern solutions with design & strategy.
                </p>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('web_service') }}" class="text-gray-400 hover:text-green-500">Web Development</a></li>
                    <li><a href="{{ route('seo_optimization') }}" class="text-gray-400 hover:text-green-500">SEO Optimization</a></li>
                    <li><a href="{{ route('digital_marketing') }}" class="text-gray-400 hover:text-green-500">Digital Marketing</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-500">UI/UX Design</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="{{route('about_us')}}" class="text-gray-400 hover:text-green-500">About Us</a></li>
                    <li><a href="{{route('blog.index')}}" class="text-gray-400 hover:text-green-500">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-500">Portfolio</a></li>
                    <li><a href="{{route('contact')}}" class="text-gray-400 hover:text-green-500">Contact</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-400">
                    <li>Email: info@softnovait.com</li>
                    <li>Phone: +880 707 568 468</li>
                    <li>Address: House:32(3rd floor), Garib-E-Newaj Avenue road, Sector:11, Uttara, Dhaka-1230, Bangladesh</li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="https://www.facebook.com/SoftNovaIT/" class="hover:text-green-500">Facebook</a>
                    <a href="https://x.com/SoftNovaIT" class="hover:text-green-500">Twitter</a>
                    <a href="https://www.linkedin.com/in/softnovait/" class="hover:text-green-500">LinkedIn</a>
                    <a href="https://www.instagram.com/softnovait/" class="hover:text-green-500">Instagram</a>
                </div>
            </div>

        </div>


    </div>
            <div class="bg-green-700">
            <hr class="my-8 border-gray-700">

            <p class="text-center text-white pb-6">
                &copy; {{ date('Y') }} SoftNovaIT. All rights reserved.
            </p>

        </div>
</footer>

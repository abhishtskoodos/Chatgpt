
<footer id="footer" class="footer_area bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="footer_wrapper pt-12 pb-24">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- About / Branding -->
                <div class="footer_about mt-12 lg:mt-0">
                    <a class="navbar-brand text-4xl font-bold text-blue-500" href="{{ route('home') }}">
                        CoreVision
                    </a>
                    <p class="mt-4 text-gray-400">I specialize in building modern, performance-driven websites and
                        full-stack applications that help businesses grow online.</p>
                    <ul class="social mt-4 flex space-x-4">
                        <li><a href="#" class="text-gray-400 hover:text-blue-500"><i
                                    class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500"><i
                                    class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500"><i
                                    class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500"><i
                                    class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div>

                <!-- Navigation Links -->
                <div class="footer_link_wrapper flex flex-wrap gap-12 lg:gap-24">
                    <div class="footer_link mt-12 lg:mt-0">
                        <h4 class="footer_title text-xl font-semibold mb-4">Quick Links</h4>
                        <ul class="link space-y-2">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-blue-500">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-blue-500">About</a></li>
                            <li><a href="#services" class="text-gray-400 hover:text-blue-500">Services</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-blue-500">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer_link mt-12 lg:mt-0">
                        <h4 class="footer_title text-xl font-semibold mb-4">Resources</h4>
                        <ul class="link space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-blue-500">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-blue-500">Terms & Conditions</a>
                            </li>
                            <li><a href="#" class="text-gray-400 hover:text-blue-500">FAQs</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-blue-500">Sitemap</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="footer_form mt-12 lg:mt-0">
                    <h4 class="footer_title text-xl font-semibold mb-4">Let’s Work Together</h4>
                    <form id="contact-form" action="{{ route('contact') }}" method="POST">
                        <div class="single_form mb-4">
                            <input type="text" name="name" placeholder="Your Name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="single_form mb-4">
                            <input type="email" name="email" placeholder="Email Address" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="single_form mb-4">
                            <textarea name="message" placeholder="Your Message" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <p class="form-message text-sm text-gray-400"></p>
                        <div class="single_form">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <p class="text-center text-gray-400 pb-4">
            &copy; 2025 <strong>CoreVision</strong>. All Rights Reserved. Designed with ❤️ for the web.
        </p>
    </div>
</footer>
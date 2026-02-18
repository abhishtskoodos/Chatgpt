@extends('layouts.master')

@section('content')
    <section class="min-h-[550px] flex items-center bg-cover bg-center"
    style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(255, 255, 255, 0)), url('assets/images/hero.webp');">

    <div class="container mx-auto px-6">
        <div class="max-w-2xl text-white">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                We Manage Your Entire Online Presence — You Focus on Your Business
            </h1>

            <p class="mb-8 text-lg leading-relaxed">
                From Facebook, Google & WhatsApp marketing to website and branding, CoreVision handles everything so
                you get consistent leads without managing multiple agencies.
            </p>

            <a href="https://rebrand.ly/financio-ud"
                class="inline-block bg-blue-500 px-8 py-3 rounded-lg text-white font-semibold hover:bg-blue-600 transition">
                Get Free Business Audit
            </a>
        </div>
    </div>
</section>
<section class="py-8 md:py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-wrap items-center justify-center md:justify-between gap-8">
            <img src="assets/images/brand-1.png" alt="brand" class="h-10 opacity-70 hover:opacity-100 transition">
            <img src="assets/images/brand-2.png" alt="brand" class="h-10 opacity-70 hover:opacity-100 transition">
            <img src="assets/images/brand-3.png" alt="brand" class="h-10 opacity-70 hover:opacity-100 transition">
            <img src="assets/images/brand-4.png" alt="brand" class="h-10 opacity-70 hover:opacity-100 transition">
            <img src="assets/images/brand-5.png" alt="brand" class="h-10 opacity-70 hover:opacity-100 transition">
        </div>
    </div>
</section>


<section id="why" class="py-12 md:py-16 bg-blue-500">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h4 class="text-sm uppercase tracking-wide text-white/80 mb-2">
                Why Work With Us?
            </h4>
            <h3 class="text-3xl md:text-4xl font-bold text-white">
                Your Local Digital Growth Partner in Gurugram
            </h3>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Feature Item -->
            <div class="bg-white text-center p-6 rounded-xl shadow hover:-translate-y-2 transition">
                <div class="text-blue-500 text-4xl mb-4">
                    <i class="lni lni-certificate"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Single Point of Responsibility</h4>
                <p class="text-gray-600 text-sm">
                    You don’t need to manage 3–4 different agencies.
                    Website, ads, WhatsApp marketing, creatives — everything is my responsibility.
                    Good results or bad, there are no excuses — I own the outcome.
                </p>
            </div>

            <div class="bg-white text-center p-6 rounded-xl shadow hover:-translate-y-2 transition">
                <div class="text-blue-500 text-4xl mb-4">
                    <i class="lni lni-rocket"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Local Business Focus</h4>
                <p class="text-gray-600 text-sm">
                    I work specifically with Indian local businesses.
                    I understand how customers in Gurugram think, search, and make buying decisions — and I build
                    systems around that behavior.
                </p>
            </div>

            <div class="bg-white text-center p-6 rounded-xl shadow hover:-translate-y-2 transition">
                <div class="text-blue-500 text-4xl mb-4">
                    <i class="lni lni-briefcase"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Clear Communication, No False Promises</h4>
                <p class="text-gray-600 text-sm">
                    I don’t promise “viral results in 10 days” or “guaranteed sales.”
                    I tell you what’s realistically possible and what’s not — long-term trust matters more than
                    short-term deals.
                </p>
            </div>

            <div class="bg-white text-center p-6 rounded-xl shadow hover:-translate-y-2 transition">
                <div class="text-blue-500 text-4xl mb-4">
                    <i class="lni lni-headphone-alt"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Growth-Oriented, Not Task-Oriented</h4>
                <p class="text-gray-600 text-sm">
                    I don’t just run ads and send invoices.
                    I understand your business and build marketing systems that generate consistent leads — not one-time
                    spikes.
                </p>
            </div>

        </div>
    </div>
</section>

<section id="about" class="py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-12">

            <!-- Image Side -->
            <div class="lg:col-span-7 relative">
                <div class="relative mt-8">
                    <img src="assets/images/about.jpg" alt="about image" class="rounded-xl w-full object-cover">

                    <!-- Experience Badge -->
                    <div
                        class="absolute -bottom-8 left-8 bg-blue-500 text-white w-36 h-36 rounded-full flex items-center justify-center shadow-lg">
                        <div class="text-center">
                            <span class="text-3xl font-bold block">5+</span>
                            <p class="text-sm">Years of Experience</p>
                        </div>
                    </div>

                    <!-- Shape -->
                    <img src="assets/images/shape-1.svg" alt="shape"
                        class="absolute -top-10 -left-10 w-28 opacity-80 hidden md:block">
                </div>
            </div>

            <!-- Content Side -->
            <div class="lg:col-span-5">
                <div class="mt-8">

                    <!-- Section Title -->
                    <div class="mb-6">
                        <h4 class="text-sm uppercase tracking-wide text-blue-500 mb-2">
                            About CoreVision
                        </h4>
                        <h3 class="text-3xl font-bold text-gray-900">
                            CoreVision was built with a simple Belief —
                        </h3>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed mb-8">
                        <b> business owners should focus on growth, not digital chaos.</b>
                        Today, most businesses struggle not because they lack potential, but because their digital efforts are scattered — one agency for ads, another for websites, no clarity, no accountability.
                        <br><br>
                        <b>What We Do</b><br>
                        We help businesses set up and manage their entire digital ecosystem —
from websites and lead funnels to ads, WhatsApp communication, and ongoing optimisation. <br><br>
Instead of isolated tasks, we build connected systems that work together and deliver measurable outcomes.
                    </p>

                    <!-- Skills -->
                    <div class="space-y-5">

                        <!-- Skill -->
                        <div>
                            <div class="flex justify-between mb-1">
                                <h6 class="font-medium text-gray-800">Frontend Development</h6>
                                <span class="text-sm font-semibold text-blue-500">90%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded">
                                <div class="h-2 bg-blue-500 rounded w-[90%]"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <h6 class="font-medium text-gray-800">Backend & APIs</h6>
                                <span class="text-sm font-semibold text-blue-500">85%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded">
                                <div class="h-2 bg-blue-500 rounded w-[85%]"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <h6 class="font-medium text-gray-800">SEO Optimization</h6>
                                <span class="text-sm font-semibold text-blue-500">80%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded">
                                <div class="h-2 bg-blue-500 rounded w-[80%]"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <h6 class="font-medium text-gray-800">Client Satisfaction</h6>
                                <span class="text-sm font-semibold text-blue-500">95%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded">
                                <div class="h-2 bg-blue-500 rounded w-[95%]"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-16 bg-gradient-to-b from-blue-300 to-white text-center">

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-12">

            <!-- Content -->
            <div class="lg:col-span-6 text-left" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out">

                <h2 class="text-3xl md:text-4xl font-bold mb-8">
                    Why Choose Us
                </h2>

                <div class="space-y-5">
                    <div>
                        <h5 class="font-semibold text-lg">1. Expertise Across All Industries</h5>
                        <p class="text-gray-600">We understand diverse industries and platforms to deliver tailored
                            strategies.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">2. Data-Driven Strategy</h5>
                        <p class="text-gray-600">Combining analytics with creativity for high-impact execution.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">3. Transparent Communication</h5>
                        <p class="text-gray-600">Clarity, consistency, and trust built through open dialogue.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">4. Customized Solutions</h5>
                        <p class="text-gray-600">We tailor every campaign to your unique goals for measurable ROI.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">5. Proven Track Record</h5>
                        <p class="text-gray-600">Years of delivering successful projects across various domains.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">6. Ongoing Support</h5>
                        <p class="text-gray-600">We stay with you post-launch to ensure long-term success.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">7. Agile & Adaptive Approach</h5>
                        <p class="text-gray-600">We quickly adjust to market changes and client needs to stay ahead.
                        </p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">8. Cost-Effective Solutions</h5>
                        <p class="text-gray-600">Maximize your budget with strategies focused on efficiency and ROI.
                        </p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">9. Dedicated Team</h5>
                        <p class="text-gray-600">You get a team committed solely to your project.</p>
                    </div>

                    <div>
                        <h5 class="font-semibold text-lg">10. Innovation at Core</h5>
                        <p class="text-gray-600">We explore new ideas & technologies to give you a competitive edge.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="lg:col-span-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out">

                <img src="assets/images/why-choose.webp" alt="Why Choose Us"
                    class="w-full max-w-lg mx-auto rounded-xl shadow-lg">
            </div>

        </div>
    </div>
</section>

<section id="services" class="py-16 bg-gradient-to-b from-blue-300 to-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h4 class="text-sm uppercase tracking-wide text-blue-500 mb-2">Services</h4>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Full-Stack Web Development Tailored to Your
                Business Needs</h3>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Item 1 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-code-alt"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">Frontend Development</a>
                </h4>
                <p class="text-gray-600">Responsive, fast, and accessible interfaces built with HTML, CSS, JavaScript,
                    React, or Vue to ensure a great user experience.</p>
            </div>

            <!-- Service Item 2 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-database"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">Backend Development</a>
                </h4>
                <p class="text-gray-600">Secure and scalable server-side solutions using Node.js, Express, PHP, or
                    Laravel to power your applications with business logic.</p>
            </div>

            <!-- Service Item 3 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-world"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">SEO Optimization</a>
                </h4>
                <p class="text-gray-600">Improve visibility and rankings with clean code, structured data, and on-page
                    SEO practices built into your site from day one.</p>
            </div>

            <!-- Service Item 4 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-mobile"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">Mobile-Ready Design</a>
                </h4>
                <p class="text-gray-600">Pixel-perfect responsive layouts that adapt to all screen sizes for a seamless
                    experience on mobile, tablet, and desktop.</p>
            </div>

            <!-- Service Item 5 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-cogs"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">Custom Web Applications</a>
                </h4>
                <p class="text-gray-600">From dashboards to booking systems — I create tailored solutions that solve
                    real problems using modern web technologies.</p>
            </div>

            <!-- Service Item 6 -->
            <div class="text-center bg-white shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
                <div class="text-4xl text-blue-500 mb-4">
                    <i class="lni lni-support"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">
                    <a href="#">Maintenance & Support</a>
                </h4>
                <p class="text-gray-600">Ongoing website updates, bug fixes, and technical support to keep your web
                    platform secure, fast, and up-to-date.</p>
            </div>
        </div>
    </div>
</section>



<section id="pricing" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h4 class="text-sm uppercase tracking-wide text-blue-500 mb-2">Pricing</h4>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Choose a Plan That Works for You</h3>
        </div>

        <!-- Pricing Plans -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="pricing_card text-center p-6 shadow-lg rounded-xl bg-white">
                <h5 class="text-xl font-semibold text-gray-800 mb-4">Basic</h5>
                <h3 class="text-3xl font-bold text-blue-500">₹9,999<span class="text-sm text-gray-600">/project</span>
                </h3>
                <ul class="pricing_features list-none my-4 space-y-2 text-gray-700">
                    <li>✅ Responsive Design</li>
                    <li>✅ 3 Static Pages</li>
                    <li>✅ Basic SEO Setup</li>
                    <li>❌ No Admin Panel</li>
                    <li>❌ No Analytics Integration</li>
                </ul>
                <a href="#contact"
                    class="main-btn text-white bg-blue-500 py-2 px-6 rounded-lg mt-4 inline-block hover:bg-blue-600 transition">Get
                    Started</a>
            </div>

            <!-- Standard Plan -->
            <div class="pricing_card text-center p-6 shadow-lg rounded-xl bg-white border-4 border-blue-500">
                <h5 class="text-xl font-semibold text-gray-800 mb-4">Standard</h5>
                <h3 class="text-3xl font-bold text-blue-500">₹19,999<span
                        class="text-sm text-gray-600">/project</span></h3>
                <ul class="pricing_features list-none my-4 space-y-2 text-gray-700">
                    <li>✅ Responsive Design</li>
                    <li>✅ 5-7 Pages</li>
                    <li>✅ SEO (Organic + On-Page)</li>
                    <li>✅ Contact Form Integration</li>
                    <li>✅ Basic Analytics</li>
                </ul>
                <a href="#contact"
                    class="main-btn text-white bg-blue-500 py-2 px-6 rounded-lg mt-4 inline-block hover:bg-blue-600 transition">Get
                    Started</a>
            </div>

            <!-- Premium Plan -->
            <div class="pricing_card text-center p-6 shadow-lg rounded-xl bg-white">
                <h5 class="text-xl font-semibold text-gray-800 mb-4">Premium</h5>
                <h3 class="text-3xl font-bold text-blue-500">₹29,999<span
                        class="text-sm text-gray-600">/project</span></h3>
                <ul class="pricing_features list-none my-4 space-y-2 text-gray-700">
                    <li>✅ Custom Full Stack Website</li>
                    <li>✅ Unlimited Pages</li>
                    <li>✅ Advanced SEO (Organic + Paid)</li>
                    <li>✅ Admin Dashboard</li>
                    <li>✅ Full Data & Business Analytics</li>
                </ul>
                <a href="#contact"
                    class="main-btn text-white bg-blue-500 py-2 px-6 rounded-lg mt-4 inline-block hover:bg-blue-600 transition">Get
                    Started</a>
            </div>
        </div>
    </div>
</section>


<section id="testimonials" class="py-16 bg-gray-50" data-aos="fade-up" data-aos-delay="200"
    data-aos-duration="1000" data-aos-easing="ease-in-out">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h4 class="text-sm uppercase tracking-wide text-blue-500 mb-2">Testimonials</h4>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900">What Our Clients Say</h3>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Testimonial 1 -->
            <div class="testimonial_card p-6 bg-white shadow-lg rounded-xl text-center">
                <img src="assets/images/client1.jpeg" alt="Client 1" class="w-20 h-20 rounded-full mx-auto mb-4">
                <h5 class="text-lg font-semibold text-gray-800">Ravi Mehta</h5>
                <p class="text-sm text-gray-500 mb-3">CEO, StartupX</p>
                <div class="stars mb-3 text-yellow-500">
                    ⭐⭐⭐⭐⭐
                </div>
                <p class="text-gray-700">"Team delivered an exceptional full-stack solution with built-in SEO. Highly
                    professional and timely!"</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial_card p-6 bg-white shadow-lg rounded-xl text-center">
                <img src="assets/images/client2.jpeg" alt="Client 2" class="w-20 h-20 rounded-full mx-auto mb-4">
                <h5 class="text-lg font-semibold text-gray-800">Neha Soni</h5>
                <p class="text-sm text-gray-500 mb-3">Marketing Lead, BrandBrew</p>
                <div class="stars mb-3 text-yellow-500">
                    ⭐⭐⭐⭐⭐
                </div>
                <p class="text-gray-700">"Their SEO expertise helped us rank #1 on Google in just 3 months. Great
                    support and strategy."</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial_card p-6 bg-white shadow-lg rounded-xl text-center">
                <img src="assets/images/client3.jpeg" alt="Client 3" class="w-20 h-20 rounded-full mx-auto mb-4">
                <h5 class="text-lg font-semibold text-gray-800">Aditya Kumar</h5>
                <p class="text-sm text-gray-500 mb-3">Data Manager, Logix Co.</p>
                <div class="stars mb-3 text-yellow-500">
                    ⭐⭐⭐⭐⭐
                </div>
                <p class="text-gray-700">"They built a real-time data dashboard that saved us hours of manual reporting
                    every week."</p>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial_card p-6 bg-white shadow-lg rounded-xl text-center">
                <img src="assets/images/client4.jpeg" alt="Client 4" class="w-20 h-20 rounded-full mx-auto mb-4">
                <h5 class="text-lg font-semibold text-gray-800">Pooja Shah</h5>
                <p class="text-sm text-gray-500 mb-3">Founder, BizEdge</p>
                <div class="stars mb-3 text-yellow-500">
                    ⭐⭐⭐⭐⭐
                </div>
                <p class="text-gray-700">"Excellent business insights and analytics support. Helped us make data-driven
                    decisions easily."</p>
            </div>
        </div>
    </div>
</section>


<section id="blog" class="blog_area pt-12 pb-12" data-aos="fade-up" data-aos-delay="200"
    data-aos-duration="1000" data-aos-easing="ease-in-out">
    <div class="container mx-auto">
        <div class="section_title text-center pb-12">
            <h4 class="sub_title text-lg font-semibold text-gray-500">Latest News</h4>
            <h3 class="title text-3xl font-bold">Our Blog & Insights</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="blog_card shadow-lg rounded-lg overflow-hidden">
                <img src="assets/images/blogs/blog-1.webp" alt="Blog 1" class="w-full h-auto object-cover">
                <div class="blog_content p-6">
                    <h5 class="blog_title text-xl font-semibold">Top 5 SEO Trends in 2025</h5>
                    <p class="text-gray-600 mt-2">Stay ahead of the curve with the latest SEO strategies that actually
                        deliver results.</p>
                    <a href="#" class="btn-link text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More
                        →</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="blog_card shadow-lg rounded-lg overflow-hidden">
                <img src="assets/images/blogs/blog-2.webp" alt="Blog 2" class="w-full h-auto object-cover">
                <div class="blog_content p-6">
                    <h5 class="blog_title text-xl font-semibold">How to Choose the Right Tech Stack</h5>
                    <p class="text-gray-600 mt-2">Picking the right backend & frontend tools can make or break your
                        project scalability.</p>
                    <a href="#" class="btn-link text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More
                        →</a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog_card shadow-lg rounded-lg overflow-hidden">
                <img src="assets/images/blogs/blog-3.webp" alt="Blog 3" class="w-full h-auto object-cover">
                <div class="blog_content p-6">
                    <h5 class="blog_title text-xl font-semibold">Why Analytics Matter for Small Businesses</h5>
                    <p class="text-gray-600 mt-2">Understand your data, make smart decisions, and grow your business
                        faster.</p>
                    <a href="#" class="btn-link text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More
                        →</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-12 pb-12">
    <div class="container mx-auto px-4">
        <!-- Grid for FAQ and Contact -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- FAQ Section -->
            <div id="faq" class="faq_area">
                <div class="section_title text-center pb-12">
                    <h4 class="sub_title text-lg font-semibold text-gray-500">FAQs</h4>
                    <h3 class="title text-3xl font-bold">Frequently Asked Questions</h3>
                </div>

                <div class="accordion space-y-4">
                    <!-- Q1 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                1. What services do you provide?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            We offer full-stack web development, SEO (organic & paid), analytics setup, and business
                            automation solutions.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                2. Do you provide SEO services along with development?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Yes, we integrate on-page, technical, and off-page SEO with every website we build.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                3. How long will it take to deliver a website?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Typically 7–21 working days depending on the scope, features, and custom integrations.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                4. What technologies do you work with?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            We use HTML, CSS, JavaScript, React, Node.js, PHP, Laravel, MySQL, and more — depending on
                            project needs.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                5. Can you manage hosting and domain setup?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Absolutely. We help with domain registration, server setup, SSL, and deployment.
                        </div>
                    </div>

                    <!-- Q6 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                6. Is there post-delivery support?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Yes, we provide 30 days of free support. Extended maintenance plans are also available.
                        </div>
                    </div>

                    <!-- Q7 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                7. Do you offer content writing or copy assistance?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Yes, we have content specialists who can help craft SEO-friendly and conversion-driven copy.
                        </div>
                    </div>

                    <!-- Q8 -->
                    <div class="accordion-item rounded-lg shadow-lg border border-gray-200">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-left w-full px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none text-xl font-semibold text-gray-800">
                                8. How is pricing decided for a custom project?
                            </button>
                        </h2>
                        <div class="accordion-body px-6 py-4 bg-white">
                            Pricing is based on number of pages, features, complexity, and timeline. We provide
                            transparent estimates.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div id="contact" class="contact_area">
                <div class="section_title text-center pb-10">
                    <h4 class="sub_title text-lg font-semibold text-gray-500">Contact</h4>
                    <h3 class="title text-3xl font-bold">Let’s Work Together</h3>
                    <p class="mt-4 text-gray-600">Have a project in mind or want to collaborate? Send us a message and
                        we'll get back to you soon.</p>
                </div>

                <div class="flex justify-center">
                    <div class="w-full lg:w-2/3">
                        <form id="contactForm" method="POST" action="your-backend-endpoint.php" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" name="name" placeholder="Your Name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <input type="email" name="email" placeholder="Your Email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <input type="text" name="subject" placeholder="Subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                            <textarea name="message" rows="5" placeholder="Your Message" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>

                            <div class="text-center">
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg transition-colors duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

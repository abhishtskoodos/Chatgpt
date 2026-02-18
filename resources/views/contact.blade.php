@extends('layouts.master')

@section('content')
    <section class="bg-blue-600 text-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg text-blue-100 max-w-2xl">
                Ready to scale your business online? Share your goals and we’ll suggest a practical growth plan.
            </p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-10">
            <div class="bg-white p-8 rounded-xl shadow">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h2>
                <form class="space-y-4">
                    <input type="text" placeholder="Your Name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" placeholder="Email Address"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="tel" placeholder="Phone Number"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea rows="5" placeholder="Tell us about your project"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition">Submit
                        Inquiry</button>
                </form>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Reach us directly</h2>
                <div class="space-y-4 text-gray-700">
                    <p><span class="font-semibold">Email:</span> hello@corevision.in</p>
                    <p><span class="font-semibold">Phone:</span> +91 98765 43210</p>
                    <p><span class="font-semibold">Office:</span> Gurugram, Haryana, India</p>
                    <p class="text-gray-600 pt-4">
                        We typically respond within 24 hours on business days.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

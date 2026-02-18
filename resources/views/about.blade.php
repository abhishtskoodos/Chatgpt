@extends('layouts.master')

@section('content')
    <section class="bg-slate-900 text-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">About CoreVision</h1>
            <p class="text-lg text-slate-200 max-w-3xl">
                We help businesses grow online with conversion-focused websites, performance marketing, and clear execution.
                Our approach is simple: one partner, one strategy, measurable business impact.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What We Do</h2>
                <p class="text-gray-600 mb-4">
                    From lead generation funnels to ad campaigns and automation workflows, we build complete digital
                    systems that work together.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li>• Website design & development</li>
                    <li>• Google, Meta & WhatsApp marketing</li>
                    <li>• Landing pages and conversion optimization</li>
                    <li>• Reporting and growth strategy</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('assets/images/about.jpg') }}" alt="CoreVision team at work"
                    class="rounded-xl shadow-lg w-full object-cover">
            </div>
        </div>
    </section>
@endsection

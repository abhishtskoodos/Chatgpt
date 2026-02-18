<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CoreVision</title>
    <meta name="description"
        content="CoreVision is a digital marketing agency in Gurugram helping businesses grow with high-converting websites and performance marketing." />

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#0B1C2D',
                        accent: '#18B6C9',
                        muted: '#6B7280',
                        light: '#F9FAFB'
                    },
                    fontFamily: {
                        heading: ['Poppins', 'sans-serif'],
                        body: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>


@include('layouts.header')
@yield('content')

@include('layouts.footer')
</body>


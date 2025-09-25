<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Construction Company')</title>
</head>
<body class="bg-gray-100 text-gray-900">
      <!-- Navbar -->
        <header class="bg-white shadow-md">
            <div class="container mx-auto flex justify-between items-center py-4 px-6">
                <a href="/" class="text-2xl font-bold text-blue-700">🏗️ BuildCo</a>
                <nav class="space-x-6">
                    <a href="/" class="hover:text-blue-700">Home</a>
                    <a href="/projects" class="hover:text-blue-700">Projects</a>
                    <a href="/services" class="hover:text-blue-700">Services</a>
                    <a href="/contact" class="hover:text-blue-700">Contact</a>
                </nav>
            </div>
        </header>

           <!-- Page content -->
            <main class="py-8">
                @yield('content')
            </main>
             <!-- Page content End-->
            <!-- Footer -->
            <footer class="bg-blue-800 text-white py-6 mt-10">
                <div class="container mx-auto text-center">
                    <p>&copy; {{ date('Y') }} BuildCo Construction. All rights reserved.</p>
                </div>
            </footer>
             <!-- Footer End-->
     <!-- Navbar -->
</body>
</html>
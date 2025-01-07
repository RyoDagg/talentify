<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talentify</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-950 text-gray-50 font-hanken-grotesk">
    <div>
        <nav class="flex items-center justify-between p-4 mx-4 border-b border-gray-800">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="flex space-x-4">
                <a class="px-4 py-2 bg-slate-900 rounded hover:bg-slate-800 font-medium text-gray-100"
                    href="/jobs">Jobs</a>
                <a class="px-4 py-2 bg-slate-900 rounded hover:bg-slate-800 font-medium text-gray-100"
                    href="/career">Career</a>
                <a class="px-4 py-2 bg-slate-900 rounded hover:bg-slate-800 font-medium text-gray-100"
                    href="/salaries">Salaries</a>
                <a class="px-4 py-2 bg-slate-900 rounded hover:bg-slate-800 font-medium text-gray-100"
                    href="/companies">Companies</a>
            </div>
            <div>
                Post a Job
            </div>
        </nav>

        <main class="max-w-7xl mx-auto p-4 mt-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

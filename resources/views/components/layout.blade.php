<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listing Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-black text-white">
<div class="px-10">
    <nav class="flex justify-between items-center border-b border-white/10 py-6">
        <div>
            <x-logo/>
        </div>
        <div class="flex gap-4 font-bold text-lg">
            <x-nav-link href="#" :active="request()->is('/jobs')">Jobs</x-nav-link>
            <x-nav-link href="#" :active="request()->is('/careers')">Careers</x-nav-link>
            <x-nav-link href="#" :active="request()->is('/salaries')">Salaries</x-nav-link>
            <x-nav-link href="#" :active="request()->is('/companies')">Companies</x-nav-link>
        </div>
        <div>
            <x-button mode="link" href="#" >
                Post a job
            </x-button>
        </div>
    </nav>
</div>
<main>
    {{ $slot }}
</main>
</body>
</html>

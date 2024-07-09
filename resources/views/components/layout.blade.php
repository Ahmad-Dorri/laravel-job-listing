<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listing Platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-black text-white font-hanken-grotesk mb-16 sm:mb-20 md:mb-24 lg:mb-32">
<div class="px-10">
    <nav class="flex justify-between items-center border-b border-white/10 py-6">
        <div>
            <x-logo/>
        </div>
        <div class="hidden md:flex gap-4 font-bold text-lg">
            <x-nav-link href="/jobs" :active="request()->is('/jobs')">Jobs</x-nav-link>
            <x-nav-link href="/careers" :active="request()->is('/careers')">Careers</x-nav-link>
            <x-nav-link href="/salaries" :active="request()->is('/salaries')">Salaries</x-nav-link>
            <x-nav-link href="/companies" :active="request()->is('/companies')">Companies</x-nav-link>
        </div>
        <div class="hidden md:block">
            <x-button mode="link" href="/jobs/create" class="text-nowrap">
                Post a job
            </x-button>
        </div>
        <div class="block md:hidden" x-data="menu(false)">
            <div @click="toggle">
                <x-iconic-menu class="w-6 h-6 cursor-pointer"/>
            </div>
            <div class="z-20 absolute right-0 top-0 h-screen transition duration-500 w-[50vw] bg-slate-900 flex flex-col justify-between py-10" x-show="open">
                <div class="flex flex-col gap-4 font-bold text-lg">
                    <x-nav-link href="/jobs" :active="request()->is('/jobs')">Jobs</x-nav-link>
                    <x-nav-link href="/careers" :active="request()->is('/careers')">Careers</x-nav-link>
                    <x-nav-link href="/salaries" :active="request()->is('/salaries')">Salaries</x-nav-link>
                    <x-nav-link href="/companies" :active="request()->is('/companies')">Companies</x-nav-link>
                </div>
                <div class="w-fit mx-auto" >
                    <x-button mode="link" href="/jobs/create" class="text-nowrap mx-auto">
                        Post a job
                    </x-button>
                </div>
            </div>
            <div @click="toggle" x-show="open" class="z-10 w-screen h-screen bg-black/50 backdrop-blur-md absolute left-0 right-0 top-0 bottom-0" />
        </div>
    </nav>
</div>
<main class="mt-10 container mx-auto px-4">
    {{ $slot }}
</main>
</body>
</html>

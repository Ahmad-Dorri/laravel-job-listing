<x-layout>
    <div class="flex flex-col gap-12">
        <section>
            <x-title>Featured Jobs</x-title>
            <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-title>Tags</x-title>
            <div class="flex flex-wrap gap-2 items-center w-full">
                <x-tag size="lg">tag1</x-tag>
                <x-tag size="lg">tag2</x-tag>
                <x-tag size="lg">tag3</x-tag>
                <x-tag size="lg">tag4</x-tag>
                <x-tag size="lg">tag5</x-tag>
                <x-tag size="lg">tag6</x-tag>
                <x-tag size="lg">tag7</x-tag>
                <x-tag size="lg">tag8</x-tag>
                <x-tag size="lg">tag9</x-tag>
            </div>
        </section>
        <section>
            <x-title>Recent Jobs</x-title>
            <div class="mt-6 space-y-6" >
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>

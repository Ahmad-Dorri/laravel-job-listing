@props(['job'])
<div {{ $attributes->merge(["class" => "bg-white/10 p-4 rounded-2xl flex gap-4 transition duration-300 hover:bg-white/30 shadow-md hover:shadow-cyan-500 group cursor-pointer"]) }} >
    <div>
        <x-employer-photo/>
    </div>
    <div class="flex justify-between flex-1">
        <div class="flex flex-col">
            <h5 class="font-bold text-xs text-gray-400">GovExec</h5>
            <h6 class="font-semibold text-2xl group-hover:text-blue-400 mt-3">Fullstack Laravel
                developer</h6>
            <p class="text-sm font-bold mt-auto text-gray-400">Full time - From $60,000</p>
        </div>
        <div class="flex items-start gap-2">
            <x-tag href="#">tag1</x-tag>
            <x-tag href="#">tag2</x-tag>
            <x-tag href="#">tag3</x-tag>
        </div>

    </div>
</div>

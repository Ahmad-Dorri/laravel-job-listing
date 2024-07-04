@props(['job'])
<div {{ $attributes->merge(["class" => "bg-white/10 p-4 rounded-2xl flex flex-col gap-4 transition duration-300 hover:bg-white/30 shadow-md hover:shadow-cyan-500 group cursor-pointer"]) }} >
    <h5 class="font-bold text-xs">GovExec</h5>
    <h6 class="font-semibold text-2xl self-center text-center group-hover:text-blue-400">Fullstack Laravel
        developer</h6>
    <p class="text-sm font-bold self-center text-center">Full time - From $60,000</p>
    <div class="flex items-center justify-between mt-auto">
        <div class="flex items-center gap-2">
            <x-tag href="#">tag1</x-tag>
            <x-tag href="#">tag2</x-tag>
            <x-tag href="#">tag3</x-tag>
        </div>
        <img src="http://placehold.it/42/42"/>
    </div>
</div>

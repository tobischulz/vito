<div
    {{ $attributes->merge(["class" => "font-mono relative h-[500px] w-full overflow-auto whitespace-pre-line rounded-xl border border-gray-200 bg-black p-5 text-gray-50 dark:border-gray-800"]) }}
>
    {{ $slot }}
</div>

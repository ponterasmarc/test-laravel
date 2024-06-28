@props(['active']) @php $classes = ($active ?? false) ? 'inline-flex
items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium
leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition
duration-150 ease-in-out' : 'inline-flex items-center px-1 pt-1 border-b-2
border-transparent text-sm font-medium leading-5 text-gray-500
hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700
focus:border-gray-300 transition duration-150 ease-in-out'; @endphp

<a {{ $attributes->
    merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2
    bg-gray-800 border border-transparent rounded-md font-semibold text-xs
    text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
    active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
    focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

@props(['name', 'class' => 'w-6 h-6'])
@php
$paths = [
    'digitale-toegang' => '<rect x="4" y="4" width="16" height="12" rx="1.5"/><path d="M2 20h20"/><circle cx="12" cy="10" r="3.5"/><path d="M8.5 10h7M12 6.5c-1.5 1.5-1.5 5.5 0 7M12 6.5c1.5 1.5 1.5 5.5 0 7"/>',
    'kennis-vaardigheden' => '<path d="M8 21v-3.5C5.5 16 4 13.5 4 10.5a6.5 6.5 0 0 1 13 0c0 .8.2 1.5 1 2.5l-1 1.5V18a2 2 0 0 1-2 2h-2v1"/><circle cx="11" cy="9" r="2.5"/><path d="M10 13h2"/>',
    'behoeftes' => '<path d="M21 12a8 8 0 0 1-11.6 7.1L3 21l1.9-5.4A8 8 0 1 1 21 12z"/><path transform="translate(7 7.5) scale(.42)" fill="currentColor" stroke="none" d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>',
    'inclusieve-dienstverlening' => '<path d="M11 14h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 16"/><path d="m7 20 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 15 6 6"/><path d="M19.5 8.5c.7-.7 1.5-1.6 1.5-2.7A2.73 2.73 0 0 0 16 4a2.78 2.78 0 0 0-5 1.8c0 1.2.8 2 1.5 2.8L16 12Z"/>',
    'ondersteuningsnetwerk' => '<circle cx="12" cy="5" r="2.5"/><circle cx="5" cy="18" r="2.5"/><circle cx="19" cy="18" r="2.5"/><path d="M10.6 7.2 6.4 15.8M13.4 7.2l4.2 8.6M7.5 18h9"/>',
    'groups' => '<circle cx="12" cy="8" r="3"/><path d="M6 20v-1.5a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4V20"/><circle cx="4.5" cy="10" r="2"/><circle cx="19.5" cy="10" r="2"/><path d="M1 19v-1a3 3 0 0 1 3-3M23 19v-1a3 3 0 0 0-3-3"/>',
    'chevron' => '<path d="m15 18-6-6 6-6"/>',
    'external' => '<path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>',
    'check' => '<path d="M20 6 9 17l-5-5"/>',
    'download' => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/><path d="M12 15V3"/>',
    'arrow' => '<path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>',
];
@endphp
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" {{ $attributes->merge(['class' => $class]) }}>{!! $paths[$name] ?? '' !!}</svg>

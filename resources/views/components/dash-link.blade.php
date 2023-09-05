@props(['link', 'href', 'active'])

@php
$class = ($active ?? false)
            ? 'p-8 bg-fourth'
            : 'p-8';
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    <a href="{{ $href ?? '' }}"><img src="{{ $link ?? '' }}" alt="Icon"></a>
</div>

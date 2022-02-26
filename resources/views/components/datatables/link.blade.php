@php $is_new_tab ??= false @endphp

<a href="{{ $url }}" @isset($class) class="{{ $class }}" @endisset @if ($is_new_tab) target="_blank" @endif>{!! $name !!}</a>

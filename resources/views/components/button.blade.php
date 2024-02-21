@php($defaultClasses = 'inline-flex items-center justify-center rounded-full font-bold uppercase no-underline')
<a href="{{ $href }}" title="{{ $title }}" target="{{ $target }}"
  {{ $attributes->merge(['class' => $defaultClasses . ' ' . $type . ' ' . $size]) }}>
  {!! $content ?? $slot !!}
</a>

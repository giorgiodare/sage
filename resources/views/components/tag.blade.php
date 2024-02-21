@php($defaultClasses = 'w-fit px-3 py-1.5 text-sm font-medium uppercase tracking-wide rounded')
<span {{ $attributes->merge(['class' => $defaultClasses . ' ' . $type]) }}>
  {!! $content ?? $slot !!}
</span>

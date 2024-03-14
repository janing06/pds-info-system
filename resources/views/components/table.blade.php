@props(['id'])

<table id="{{ $id }}" {{ $attributes->merge(['class' => 'table table-hover table-nowrap mb-0 rounded']) }}>
  {{ $slot }}
</table>

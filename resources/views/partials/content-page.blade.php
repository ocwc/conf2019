@component('components.panel-content', [
    'svg' => $page_icon,
    'image_classes' => 'text-right h-28',
    'svg_classes' => 'h-full w-auto'
])
  @php the_content() @endphp
@endcomponent

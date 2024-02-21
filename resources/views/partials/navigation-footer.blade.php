@if ($navigation)
  <nav id="nav-footer" class="navigation" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
    <ul class="flex flex-wrap gap-4">
      @foreach ($navigation as $item)
        <li id="{!! 'footer-menu-' . $item->id !!}" class="{!! $item->classes !!}">
          <a href="{{ $item->url }}" {{ $item->active ? 'aria-current=page' : '' }}
            target="{{ $item->target ? '_blank' : '_self' }}" title="{!! $item->title !!}">
            {{ $item->label }}
          </a>
        </li>
      @endforeach
    </ul>
  </nav><!-- #nav-footer -->
@endif

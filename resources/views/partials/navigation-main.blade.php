@if ($navigation)
  <nav id="site-navigation" class="navigation" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    <button id="nav-button" class="group relative z-40 grid h-10 w-10 place-content-center lg:hidden"
      title="Open main menu" type="button" aria-label="Open main menu" aria-live="polite" aria-expanded="false">
      @svg('images.menu', 'w-6 h-6 group-aria-expanded:hidden')
      @svg('images.close', 'w-6 h-6 hidden group-aria-expanded:block')
    </button>
    <div class="nav-menu-container">
      <ul>
        @foreach ($navigation as $item)
          @php($sub_menu = $item->children)
          <li id="{!! 'main-menu-' . $item->id !!}" class="{!! $item->classes !!}"
            data-parent="{{ $sub_menu ? 'true' : 'false' }}">
            <a href="{{ $item->url }}" {{ $item->active ? 'aria-current=page' : '' }}
              target="{{ $item->target ? '_blank' : '_self' }}" title="{!! $item->title !!}">
              {{ $item->label }}
            </a>
            @if ($sub_menu)
              <ul class="sub-menu">
                @foreach ($sub_menu as $child)
                  <li id="{!! 'main-menu-' . $child->id !!}" class="{!! $child->classes !!}">
                    <a href="{{ $child->url }}" {{ $child->active ? 'aria-current=page' : '' }}>
                      {{ $child->label }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </nav><!-- #site-navigation -->
@endif

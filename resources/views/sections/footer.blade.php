<footer id="site-footer" class="site-footer pt-fluid-md pb-fluid-sm bg-black text-white">
  <div class="site-footer-inner container">
    {{-- {{ dd($social) }} --}}
    @if ($social)
      <ul class="flex flex-wrap items-center gap-5">
        @foreach ($social as $item)
          <li>
            <a href="{{ $item['url'] }}" class="block"
              title="{{ sprintf(_x('Go to our %1$s profile (opens in a new window)', 'Footer', 'sage'), $item['name']) }}"
              target="_blank">
              @svg('images.social.' . $item['name'], 'w-6 h-6')
            </a>
          </li>
        @endforeach
      </ul>
    @endif
    <div class="pt-fluid-md">
      <p class="text-sm">{!! sprintf(_x('&copy; %1$s All rights Reserved', 'Footer', 'sage'), get_the_date('Y')) !!}</p>
    </div>
  </div>
</footer>

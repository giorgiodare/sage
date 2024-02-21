<header id="site-header" class="site-header py-4">
  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content', 'sage') }}
  </a><!-- .skip-content -->
  <div class="site-header-inner container">
    <div class="flex flex-wrap items-center justify-between gap-4">
      <a class="brand" href="{{ home_url('/') }}" title="{!! $siteName !!}">
        @svg('images.logo', 'fill-black w-auto h-10 hidden md:block')
        @svg('images.logo-icon', 'fill-black w-auto h-10 md:hidden')
      </a>
      <div class="flex items-center gap-3">
        @include('partials.navigation-main')
        <div id="site-search" class="search relative">
          <button id="search-button" class="group relative z-40 grid h-10 w-10 place-content-center"
            title="Open search dialog" type="button" aria-label="Open search dialog" aria-live="polite"
            aria-expanded="false">
            @svg('images.search', 'w-6 h-6 group-aria-expanded:hidden')
            @svg('images.close', 'w-6 h-6 hidden group-aria-expanded:block')
          </button>
          <section class="search-container absolute right-[9999rem] top-0 z-20 rounded-xl bg-neutral-200 p-6 pt-4"
            aria-label="Site search">
            <form role="search" method="get" class="group flex flex-col items-start justify-center gap-3">
              <p class="text-sm">{{ _x('Search on the website', 'Search', 'sage') }}</p>
              <label for="siteSearch" class="sr-only">{{ _x('Search', 'Search', 'sage') }}</label>
              <input id="siteSearch" class="rounded-lg bg-white px-5 py-3" type="text"
                value="{{ get_search_query() }}" placeholder="{{ _x('Enter a keyword…', 'Search', 'sage') }}"
                name="s">
            </form>
          </section>
        </div><!-- #site-search -->
      </div>
    </div>
  </div><!-- .header-inner -->
</header><!-- #site-header -->

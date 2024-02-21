import domReady from '@roots/sage/client/dom-ready';
import siteNavigation from './site-navigation.js';
import siteSearch from './site-search.js';

/* Site navigation */
siteNavigation();

/* Search */
siteSearch();

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

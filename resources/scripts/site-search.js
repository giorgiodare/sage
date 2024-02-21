/**
 * File search.js.
 */

export default function siteSearch() {
  const siteHeader = document.getElementById('site-header');
  const siteSearch = document.getElementById('site-search');

  // Return early if the search doesn't exist.
  if (!siteSearch) {
    return;
  }

  const button = siteSearch.getElementsByTagName('button')[0];

  // Return early if the button doesn't exist.
  if ('undefined' === typeof button) {
    return;
  }

  // Toggle the .show-search class and the aria-expanded value each time the button is clicked.
  button.addEventListener('click', function () {
    document.documentElement.classList.toggle('overflow-hidden');
    siteHeader.classList.toggle('show-search');

    if (siteHeader.classList.contains('show-nav')) {
      siteHeader.classList.remove('show-nav');
    }

    button.setAttribute(
      'aria-expanded',
      button.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
    );

    const toggleLabel =
      button.getAttribute('aria-label') === 'Close search dialog'
        ? 'Open search dialog'
        : 'Close search dialog';

    button.setAttribute('aria-label', toggleLabel);
    button.setAttribute('title', toggleLabel);

    if (button.getAttribute('aria-expanded') === 'true') {
      document.getElementById('siteSearch').focus();
    }
  });

  // Remove the data-show attribute and set aria-expanded to false when the user clicks outside the navigation.
  document.addEventListener('click', function (event) {
    const isClickInside = siteSearch.contains(event.target);

    if (!isClickInside) {
      closeSearch();
    }
  });

  // Remove the .show-nav class and set aria-expanded to false when the user press the esc key.
  document.addEventListener('keyup', function (e) {
    if (e.key === 'Escape') {
      closeSearch();
    }
  });

  // Toggle aria and title
  function closeSearch() {
    document.documentElement.classList.remove('overflow-hidden');
    siteHeader.classList.remove('show-search');
    button.setAttribute('aria-expanded', 'false');
    button.setAttribute('aria-label', 'Open search dialog');
    button.setAttribute('title', 'Open search dialog');
  }

  // var search = document.getElementById('search');
  // if (search) {
  //   search.addEventListener('click', function () {
  //     if (!document.getElementById('menu_modal').classList.contains('hidden')) {
  //       document.getElementById('menu_modal').classList.toggle('hidden');
  //       document.querySelector('.menu_open').classList.toggle('hidden');
  //       document.querySelector('.menu_close').classList.toggle('hidden');
  //       document.documentElement.classList.toggle('overflow-hidden');
  //     }
  //     document.getElementById('search_modal').classList.toggle('hidden');
  //     document.documentElement.classList.toggle('overflow-hidden');
  //     document.querySelector('input#siteSearch').focus();
  //   });
  // }
}

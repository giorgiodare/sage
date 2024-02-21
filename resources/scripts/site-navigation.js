/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

export default function siteNavigation() {
  const siteHeader = document.getElementById('site-header');
  const siteNavigation = document.getElementById('site-navigation');

  // Return early if the navigation doesn't exist.
  if (!siteNavigation) {
    return;
  }

  const button = siteNavigation.getElementsByTagName('button')[0];

  // Return early if the button doesn't exist.
  if ('undefined' === typeof button) {
    return;
  }

  const menu = siteNavigation.getElementsByTagName('ul')[0];

  // Hide menu toggle button if menu is empty and return early.
  if ('undefined' === typeof menu) {
    button.style.display = 'none';
    return;
  }

  if (!menu.classList.contains('nav-menu')) {
    menu.classList.add('nav-menu');
  }

  // Toggle the data-show attribute and the aria-expanded value each time the button is clicked.
  button.addEventListener('click', function () {
    document.documentElement.classList.toggle('overflow-hidden');
    siteHeader.classList.toggle('show-nav');

    if (siteHeader.classList.contains('show-search')) {
      siteHeader.classList.remove('show-search');
    }

    button.setAttribute(
      'aria-expanded',
      button.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
    );

    const toggleLabel =
      button.getAttribute('aria-label') === 'Close main menu'
        ? 'Open main menu'
        : 'Close main menu';

    button.setAttribute('aria-label', toggleLabel);
    button.setAttribute('title', toggleLabel);
  });

  // Remove the data-show attribute and set aria-expanded to false when the user clicks outside the navigation.
  document.addEventListener('click', function (event) {
    const isClickInside = siteNavigation.contains(event.target);

    if (!isClickInside) {
      closeNav();
    }
  });

  // Remove the .show-nav class and set aria-expanded to false when the user press the esc key.
  document.addEventListener('keyup', function (e) {
    if (e.key === 'Escape') {
      closeNav();
    }
  });

  // Get all the link elements within the menu.
  const links = menu.getElementsByTagName('a');

  // Get all the link elements with children within the menu.
  const linksWithChildren = menu.querySelectorAll('[data-parent="true"] > a');

  // Toggle focus each time a menu link is focused or blurred.
  for (const link of links) {
    link.addEventListener('focus', toggleFocus, true);
    link.addEventListener('blur', toggleFocus, true);
  }

  // Toggle focus each time a menu link with children receive a touch event.
  for (const link of linksWithChildren) {
    link.addEventListener('touchstart', toggleFocus, false);
  }

  // Toggle aria and title
  function closeNav() {
    document.documentElement.classList.remove('overflow-hidden');
    siteHeader.classList.remove('show-nav');
    button.setAttribute('aria-expanded', 'false');
    button.setAttribute('aria-label', 'Open main menu');
    button.setAttribute('title', 'Open main menu');
  }

  /**
   * Sets or removes .focus class on an element.
   */
  function toggleFocus(event) {
    if (event.type === 'focus' || event.type === 'blur') {
      let self = this;
      // Move up through the ancestors of the current link until we hit .nav-menu.
      while (!self.classList.contains('nav-menu')) {
        // On li elements toggle the class .focus.
        if ('li' === self.tagName.toLowerCase()) {
          self.classList.toggle('focus');
        }
        self = self.parentNode;
      }
    }

    if (event.type === 'touchstart') {
      const menuItem = this.parentNode;
      event.preventDefault();
      for (const link of menuItem.parentNode.children) {
        if (menuItem !== link) {
          link.classList.remove('focus');
        }
      }
      menuItem.classList.toggle('focus');
    }
  }
}

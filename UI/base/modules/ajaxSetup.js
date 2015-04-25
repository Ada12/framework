define(['jquery'], function($) {
  $.ajaxSetup({
      headers: {
          'X-CSRF-Token': window.iu._token
      }
  });
});
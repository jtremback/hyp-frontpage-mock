$(function() {
  $('#faq .question').toggle(function() {
    $(this)
      .parent('li').removeClass('collapsed').addClass('expanded')
      .children('.answer')
        .slideDown();
  }, function() {
    $(this)
      .parent('li').removeClass('expanded').addClass('collapsed')
      .children('.answer').slideUp();
  });

  $('#contact_form input[type="text"], #contact_form textarea, #note_form input[type="text"], #note_form textarea').each(function() {
    var $input = $(this),
        $label = $input.parent().find('label[for="' + $input[0].id + '"]:not(.error)'),
        $required = $label.children('b').remove(),
        text = $.trim($label.text());

    $label.hide();

    $input
      .bind('blur', function() {
        if ($input.val() == '') {
          $input.val(text);
        }
      })
      .bind('focus', function() {
        if ($input.val() == text) {
          $input.val('');
        }
      })
      .trigger('blur');
  });

  
  $('#note_form').hide();
  $('#note a').bind('click', function(event) {
    $(this).addClass('expanded');
    $('#note_form').slideDown();
    event.preventDefault();
  });
});
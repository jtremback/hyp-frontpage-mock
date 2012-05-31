

$(document).ready(function() {
  // Bind an event to window.onhashchange that, when the hash changes, gets the
  // hash and adds the class "selected" to any matching nav link.
  $(window).hashchange( function(){
    var hash = location.hash || '#home';
    // Set the page title based on the hash.
    document.title = ( hash.replace( /^#/, '' ) || 'blank' ) + '.';

    $('.page:visible').not(hash).fadeOut(function () {
      $('.page' + hash).fadeIn();
    });
  });
  // Hide the invisible things ASAP on page load.
  $('.page').not(location.hash || '#home').hide()
});


////TWEETBOX SETUP CODE
//jQuery(function($){
//  $("#tweets").tweet({
////    join_text: "auto",
//    username: "hypothes_is",
//    avatar_size: 48,
//    count: 4,
//    auto_join_text_default: "we said,",
//    auto_join_text_ed: "we",
//    auto_join_text_ing: "we were",
//    auto_join_text_reply: "we replied",
//    auto_join_text_url: "we were checking out",
//    loading_text: "loading tweets..."
//  });
//});

//MINIFEED SETUP CODE
$(function() {
  $('#tweets').miniFeed({
    username: 'hypothes_is',
    limit: 4,
    template: '<div class="tweet-avacase">{avatar}</div><div class="tweet-content">{tweet}{time}</div>'
  });
});

//COLLAPSER SETUP CODE
$(function() {
    $('#navlist').collapsible({
        effect: 'slide',             // The effect to use when expanding and collapsing the menu.
        initialCollapse: true       // When true, collapses the menu when the page loads.
    });
});


////FORM VALIDATOR
//$(document).ready(function ()
//{
//    $("#register_form").validate(
//    {
//        errorPlacement: function (error, element) {
//            if (element.attr('name') == 'email2') return;
//            error.remove().hide();
//            $("#availability_status").append(error);
//            error.slideDown('fast');
//        },
//        wrapper: "div",
//        onkeyup: function (element) {
//            if ($(element).attr('name') != 'username') {
//                $.validator.defaults.onkeyup.apply(this,arguments);
//            }
//        },
//        unhighlight: function (element, errorClass, validClass) {
//            $(element).removeClass(errorClass).addClass(validClass);
//            this.addWrapper(this.errorsFor(element)).slideUp('fast', function () {
//                $(this).remove();
//            });
//        },
//        rules: {

//            username: {

//                required: true,
//                validchars: true,
//                minlength: 3,
//                maxlength: 15,
//                remote: {
//                    url: "hypo_user_check.php",
//                    type: "get"
//                }
//                // remote check for duplicate username
//            },
//            email: {
//                required: true,
//                email: true,
//                remote: {
//                    url: "hypo_mail_check.php",
//                    type: "get"
//                }
//            },
//            email2: {
//                equalTo: "#email",
//            }
//        },
//        messages: {
//            username: {
//                required: "Username is required.",
//                minlength: jQuery.format("Username must be at least {0} characters."),
//                maxlength : jQuery.format("Username must be no more than {0} characters."),
//                remote: jQuery.format("That username is already taken."),
//                validChars: "valid Chars please"
//            },
//            email: {
//                required: "Email is required.",
//                remote: jQuery.format("That email is already registered."),
//            },
//            email2: {
//                equalTo: "Email fields must match."
//            }
//        },
//        // specifying a submitHandler prevents the default submit, good for now
//        submitHandler: function ()
//        {
//          var url = 'http://hypothes.is';
//              twitter_text = 'I just reserved my @hypothes_is username.  Get yours now. ',
//              facebook_text = 'I just reserved my Hypothes.is username at http://hypothes.is Check out this new open source project and protect your favorite username!',
//              display_text = '&quot;I just reserved my @hypothes_is username ...&quot;',
//              twitter_button = '<div id="custom-tweet-button"><a href="https://twitter.com/share?text=' + escape(twitter_text) + '" target="_blank"><span class="twitter-text">' + display_text + '</span><br/><span class="twitter-link">Tweet this</span></a></div>',
//              facebook_button = '<div id="custom-facebook-button"><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php?u=' + escape(url) + '&t=' + escape(facebook_text) + '"><span class="facebook-text">' + display_text + '</span><br/><span class="facebook-link">Post this to Facebook</span></a></div>';

//        	$.post('db_insert.php', $("#register_form").serialize(), function(data) {
//							$('#availability_status').html(data);
//							$('#register_form').html("<div id='response'></div>");
//        			$('#response').html("<br/>")
//        			.append("<p class='reg-message'>Please check your email.</p>")
//        			.append("<p>" + twitter_button + "</p>")
//        			.append("<p>" + facebook_button + "</p>");
//					});
//        },
//    });
//    jQuery.validator.addMethod('validchars', function (value, element)
//    {
//        return this.optional(element) || "" || /^[a-zA-Z0-9_]+$/.test(value);
//    }, "0-9, A-Z, a-z and underscore only, please.");
//    $(function ()
//    {
//        $('input[type=text]').focus(function ()
//        {
//            if (this.value == this.defaultValue) {
//                this.value = '';
//            }
//        }).blur(function ()
//        {
//            if (this.value == '') {
//                this.value = this.defaultValue;
//            }
//        });
//    });
//});

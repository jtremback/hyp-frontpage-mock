var tooltip=function(){
	var id = 'tt';
	var top = -150;
	var left = 3;
	var maxw = 388;
	var speed = 10;
	var timer = 40;
	var endalpha = 95;
	var alpha = 0;
	var tt,t,c;
	var ie = document.all ? true : false;
	return{
		show:function(v,w){
			if(tt == null){
				tt = document.createElement('div');
				tt.setAttribute('id',id);
				c = document.createElement('div');
				c.setAttribute('id',id + 'cont');
				tt.appendChild(c);
				document.body.appendChild(tt);
				tt.style.opacity = 0;
				tt.style.filter = 'alpha(opacity=0)';
				document.onmousemove = this.pos;
			}
			tt.style.display = 'block';
			c.innerHTML = v;
			tt.style.width = w ? w + 'px' : 'auto';
			if(!w && ie){
				t.style.display = 'none';
				b.style.display = 'none';
				tt.style.width = tt.offsetWidth;
				t.style.display = 'block';
				b.style.display = 'block';
			}
			if(tt.offsetWidth > maxw){tt.style.width = maxw + 'px'}
			h = parseInt(tt.offsetHeight) + top;
			clearInterval(tt.timer);
			tt.timer = setInterval(function(){tooltip.fade(1)},timer);
		},
		pos:function(e){
			var u = ie ? event.clientY + document.documentElement.scrollTop : e.pageY;
			var l = ie ? event.clientX + document.documentElement.scrollLeft : e.pageX;
			tt.style.top = (u - h) + 'px';
			tt.style.left = (l + left) + 'px';
		},
		fade:function(d){
			var a = alpha;
			if((a != endalpha && d == 1) || (a != 0 && d == -1)){
				var i = speed;
				if(endalpha - a < speed && d == 1){
					i = endalpha - a;
				}else if(alpha < speed && d == -1){
					i = a;
				}
				alpha = a + (i * d);
				tt.style.opacity = alpha * .01;
				tt.style.filter = 'alpha(opacity=' + alpha + ')';
			}else{
				clearInterval(tt.timer);
				if(d == -1){tt.style.display = 'none'}
			}
		},
		hide:function(){
			clearInterval(tt.timer);
			tt.timer = setInterval(function(){tooltip.fade(-1)},timer);
		}
	};
}();


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
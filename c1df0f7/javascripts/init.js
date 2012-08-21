// Easing equation, borrowed from jQuery easing plugin
// http://gsgd.co.uk/sandbox/jquery/easing/
jQuery.easing.easeOutQuart = function (x, t, b, c, d)
{
    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
};
jQuery(function ($)
{
    $.serialScroll(
    {
        items: 'div.navitem',
        prev: 'div.prev',
        next: 'div.next',
        axis: 'y',
        navigation: '#nav li a.nav',
        duration: 350,
        easing: 'easeOutQuart',
        onBefore: function (e, elem, $pane, $items, pos)
        {
            e.preventDefault();
            if (window.history.pushState)
            {
                var hash = e.currentTarget.hash;
                window.history.pushState({pos : pos}, null, hash);
            }
            if (this.blur) this.blur();
        },
        onAfter: function (elem)
        {
        }
    });
});

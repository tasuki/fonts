$(function() {
    var pills = $('.pill');
    var containers = $('.font-container');

    pills.click(function() {
        $(this).toggleClass('selected');

        var required = pills.filter(function() {
            return $(this).hasClass('selected');
        }).map(function() {
            return $(this).text();
        });

        containers.each(function(i, container) {
            var tags = $(container).attr('data-tags').split(' ');

            var visible = required.map(function() {
                return tags.indexOf(this.toString()) != -1;
            }).toArray().reduce(function(prev, cur) {
                return prev && cur;
            }, true);

            if (visible) {
                $(container).show(400);
            } else {
                $(container).hide(400);
            }
        });

        return false;
    });
});

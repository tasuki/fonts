$(function() {
    var pills = $('.pill');
    var containers = $('.font-container');

    pills.click(function() {
        $(this).toggleClass('selected');

        var required = pills.filter(function(i, pill) {
            return $(pill).hasClass('selected');
        }).map(function(i, pill) {
            return $(pill).text();
        });

        containers.each(function(i, container) {
            var tags = $(container).attr('data-tags').split(' ');

            var visible = required.map(function(j, requirement) {
                return tags.indexOf(requirement) != -1;
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

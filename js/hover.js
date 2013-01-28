$(function() {
            var $items = $('#content-tab ul li');
            $items.mouseover(function() {
                $items.removeClass('selected');
                $(this).addClass('selected');
                var index = $items.index($(this));
                $('#content-tab div.tab').hide().eq(index).show();
            }).eq(0).mouseover();
});


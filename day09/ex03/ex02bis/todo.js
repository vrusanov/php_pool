var list;
var index = 0;
var count = 1;


$('document').ready(function () {
    list = $('.divmid').children();
    if ($.cookie('count')) {
        count = $.cookie('count');
        if (count > '0'){
            var tmp_count = 0;
            var tmp;
            while (tmp_count++ < count) {
                if (tmp = $.cookie('NewTodo_' + tmp_count)) {
                    if (tmp !== null) {
                        addTodoCookie(tmp, tmp_count);
                    }
                }
            }
        }
        $('#btn').click(function () {
            var todo = prompt('Enter you task!', '');
            if (todo !== null && todo !== '') {
                addTodoCookie(todo, ++count);
            }
        });

    }
    else{
        $.cookie('count', '0');
    };
    $('.main div').on('click',function (event) {
        if (confirm('you are serious ?')) {
            var tmp = event.target.classList;
            $('.' + tmp).remove();
            $.cookie('' + tmp, '', {expires: -1});
        }
    });
});

function addTodoCookie(todo, count) {
    if (todo !== null && todo !== '' && todo.trim()) {
        console.log(todo);
        $('#divIn').prepend('<div class="NewTodo_' + count + '">' + todo + '</div>');
        $.cookie('count', count);
        $.cookie('NewTodo_' + count, todo);
    }
}

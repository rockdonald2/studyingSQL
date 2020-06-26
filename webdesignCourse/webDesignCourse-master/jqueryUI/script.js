$(document).ready(() => {
    /* $('#box1').draggable();

    $('#box2').draggable({ scroll: true });

    $('#box3').draggable({ axis: "x"});

    $('#box4').draggable({ axis: "y"});

    $('#box1').draggable({ containment: ".container" }); */

    /* $('#box1').draggable({revert: "invalid"});
    $('#box2').draggable({revert: "invalid"});

    $('#big-box').droppable({
        accept: "#box1",
        drop: function() {
            $(this).find('span').html("when a box got attitude, drop it like it's hot");
        }
    }) */

    /* $('.list').sortable({ connectWith: ".otherList", placeholder: "placeholderBox" });
    $('.otherList').sortable({ connectWith: ".list" }); */

    $('#todoList ul').sortable({
        items: "li:not('.listTitle, .addItem')",
        connectWith: "ul",
        dropOnEmpty: true,
        placeholder: "emptySpace"
    });

    $('input').keydown(function(e) {
        if (e.keyCode == 13) {
            let item = $(this).val();

            $(this).parent().parent().append('<li>' + item + '</li>');
            $(this).val('');
        }
    })

    $('#trash').droppable({
        drop: function(event, ui) {
            ui.draggable.remove();
        }
    })
})
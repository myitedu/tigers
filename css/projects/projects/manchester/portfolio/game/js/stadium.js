$(function () {

    $("#left_entrance").click(function () {
        callBackend('left');
    });

    $("#right_entrance").click(function () {
        callBackend('right');
    });


    function callBackend(side) {
        $.post("../backend.txt",{side:side},function (result) {
            alert(result);
        });
    }





});
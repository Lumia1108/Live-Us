var stackNum = 0;

$.ajax({
    url: 'installPath/client/count.php',
    dataType: 'json',
    success: function(result) {
        $("#stack-text").text(result["stack"]);
    }
});
function getNum() {
    $.ajax({
        url: 'installPath/client/count.php',
        dataType: 'json',
        success: function(result) {
            $("#stack-text").text(result["stack"]);
            stackNum = result["stack"];
        }
    });
}
setInterval(getNum, 100);

function editNum(num) {
    $.ajax({
        url: 'installPath/lu-count-editor.php',
        dataType: 'json',
        type: 'POST',
        data: {
            'stack': num
        },
        success: function(result) {
            console.log("success!" + result["stack"]);
        }
    });
}

$("#input-minus").click(function() {
    editNum(stackNum - 1);
});
$("#input-plus").click(function() {
    editNum(stackNum + 1);
});
$("#input-stack").click(function() {
    var inputNum = document.querySelector('#stack-value').value;
    editNum(inputNum);
});
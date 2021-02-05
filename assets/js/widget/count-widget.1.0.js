$.ajax({
    url: 'installPath/client/count.php',
    dataType: 'json',
    success: function(result) {
        $("#stack-widget").text(result["stack"]);
    }
});
function getNum() {
    $.ajax({
        url: 'installPath/client/count.php',
        dataType: 'json',
        success: function(result) {
            $("#stack-widget").text(result["stack"]);
        }
    });
}
setInterval(getNum, 100);
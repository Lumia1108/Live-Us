$.ajax({
    url: 'installPath/client/count.php',
    dataType: 'json',
    success: function(result) {
        $("#stack-icon").text(result["stack"]);
    }
});
function getNum() {
    $.ajax({
        url: 'installPath/client/count.php',
        dataType: 'json',
        success: function(result) {
            $("#stack-icon").text(result["stack"]);
            if(result["stack"]>=100) {
                $("#stack-icon").css("font-size", "50px");
            }
        }
    });
}
setInterval(getNum, 500);
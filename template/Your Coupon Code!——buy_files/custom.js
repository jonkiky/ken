// javascript

$(document).ready(function() {

    var optional = document.getElementById("TextBox_jbeeb_21");

    var div1 = document.getElementById("TextBox_jbeeb_9").offsetWidth;
    var div2 = document.getElementById("TextBox_jbeeb_13").offsetWidth;
    var div3 = document.getElementById("TextBox_jbeeb_17").offsetWidth;
    var div4 = optional ? document.getElementById("TextBox_jbeeb_21").offsetWidth : 0;

    var total = div1 + div2 + div3 + div4;

    $(".countdown").width( total );

});
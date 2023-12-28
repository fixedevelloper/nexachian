let array=[]
function getLottoNumber(num) {
    if (!array.includes(num) && array.length<4){
        array.push(num)
        console.log(num)
        $("#lt_"+num).removeClass("btn-primary");
        $("#lt_"+num).addClass("btn-success");
        var idtd = "line_" + num;
        $("#content_lotto").append("<a id='" + idtd + "' onclick='getLottoSelect("+num+")' class='col-sm-2 btn btn-outline-danger badge rounded-circle'>"+num+"</a>")
    }
}
function getLottoSelect(num) {
    line = "#line_" + num;
    const index = array.indexOf(num);
    const x = array.splice(index, 1);
    $("#lt_"+num).addClass("btn-primary");
    $("#lt_"+num).removeClass("btn-success");
    $(line).remove();
}

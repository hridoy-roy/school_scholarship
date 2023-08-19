function upload() {
    $("#canv1").css("display", "block");
    $("#img").hide();
    var imgcanvas = document.getElementById("canv1");
    var fileinput = document.getElementById("finput");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
}

$("#perfil").hide();
$("#notify").hide();
$("#ajuste").hide();
$("#content-principal2").hide();
$("#content-principal3").hide();
$("#content-principal4").hide();
$("#content-principal5").hide();
$("#content-principal6").hide();

$("#hosting").click(function () {
    $("#content-principal").hide();
    $("#content-principal2").show()
    $("#content-principal3").hide();
    $("#content-principal4").hide();
    $("#content-principal5").hide();
    $("#content-principal6").hide();
});


$("#home").click(function () {
    $("#content-principal2").hide();
    $("#content-principal").show()
    $("#content-principal3").hide();
    $("#content-principal4").hide();
    $("#content-principal5").hide();
    $("#content-principal6").hide();
});

$("#dominio").click(function () {
    $("#content-principal2").hide();
    $("#content-principal").hide()
    $("#content-principal3").show();
    $("#content-principal4").hide();
    $("#content-principal5").hide();
    $("#content-principal6").hide();
});

$("#email").click(function () {
    $("#content-principal2").hide();
    $("#content-principal").hide()
    $("#content-principal3").hide();
    $("#content-principal4").show();
    $("#content-principal5").hide();
    $("#content-principal6").hide();
});


$("#btn-perfil").click(function () {
    $("#perfil").show()
});
$("#fechar").click(function () {
    $("#perfil").hide(300)
})
$("#btn-notify").click(function () {
    $("#notify").show()
});
$("#fechar2").click(function () {
    $("#notify").hide(300)
});

$("#btn-ajuste").click(function () {
    $("#ajuste").show()
});
$("#fechar3").click(function () {
    $("#ajuste").hide(300)
})
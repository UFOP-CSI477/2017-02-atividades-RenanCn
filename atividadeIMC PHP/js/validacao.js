$(document).ready(function(){

  $("button[name='calcular']").click(function(){

  var peso   = parseFloat($("input[name='peso']").val());
  var altura = parseFloat($("input[name='altura']").val());

  if(isNaN(peso)){
    $("#grupoPeso").addClass("has-error");
    $("#alertaPeso").show();
    $("input[name='peso']").val("");
    $("input[name='peso']").focus();
    return;
  }

  $("#grupoPeso").removeClass("has-error");
  $("#alertaPeso").hide();

  if(isNaN(altura)){
    $("#grupoAltura").addClass("has-error");
    $("#alertaAltura").show();
    $("input[name='altura']").val("");
    $("input[name='altura']").focus();
    return;
  }

  $("#grupoAltura").removeClass("has-error");
  $("#alertaAltura").hide();


});



});

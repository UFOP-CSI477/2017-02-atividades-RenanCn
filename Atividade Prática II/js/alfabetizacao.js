$(document).ready(function(){

  $("button[name='confirmar']").click(function(){

    var ischecked_1 = $("input[name=radio1]:checked").val();
    var ischecked_2 = $("input[name=radio2]:checked").val();
    var ischecked_3 = $("input[name=radio3]:checked").val();
    var ischecked_4 = $("input[name=radio4]:checked").val();

    var score = 0;

    if (ischecked_1 == "sabonete"){
      score+=1;
    }
    if (ischecked_2 == "algodao"){
      score+=1;
    }
    if (ischecked_3 == "maquina") {
      score+=1;
    }
    if (ischecked_4 == "chave") {
      score+=1;
    }

    //grupo1
    $("#badge1").css({'background-color': "#E84C3D"});
    $("#badge2").css({'background-color': "#2DCC70"});
    $("#badge3").css({'background-color': "#E84C3D"});
    $("#badge4").css({'background-color': "#E84C3D"});

    //grupo2
    $("#badge5").css({'background-color': "#E84C3D"});
    $("#badge6").css({'background-color': "#E84C3D"});
    $("#badge7").css({'background-color': "#2DCC70"});
    $("#badge8").css({'background-color': "#E84C3D"});

    //grupo3
    $("#badge9").css({'background-color': "#E84C3D"});
    $("#badge10").css({'background-color': "#E84C3D"});
    $("#badge11").css({'background-color': "#E84C3D"});
    $("#badge12").css({'background-color': "#2DCC70"});

    //grupo4
    $("#badge13").css({'background-color': "#E84C3D"});
    $("#badge14").css({'background-color': "#E84C3D"});
    $("#badge15").css({'background-color': "#E84C3D"});
    $("#badge16").css({'background-color': "#2DCC70"});


    $("h5[name='pontuacao']").text("Pontuação: você fez " + score + " ponto(s)!");
  });

  $("button[name='limpar']").click(function(){

    $("h5[name='pontuacao']").text("Pontuação: ");

    var i=0;
    while (i<17) {
      i+=1;
      $("#badge" + i).css({'background-color': ""});
    }

  });

// ----------------------------------- //

var numP=0;

$("p").click(function(){
    $(this).removeClass();
  if (numP == 0) {
    $(this).addClass("prg-border-purple");
    numP+=1;
  }
  else if (numP == 1){
    $(this).toggleClass("prg-border-red")
    numP+=1;
  }
  else if (numP == 2){
    $(this).toggleClass("prg-border-green")
    numP+=1;
  }
  else {
    $(this).toggleClass("prg-border-yellow")
    numP = 0
  }
});

var numImg = 0

$("img").click(function(){
    $(this).removeClass();
  if (numImg == 0) {
    $(this).addClass("prg-border-purple");
    numImg+=1;
  }
  else if (numImg == 1){
    $(this).toggleClass("prg-border-red")
    numImg+=1;
  }
  else if (numImg == 2){
    $(this).toggleClass("prg-border-green")
    numImg+=1;
  }
  else {
    $(this).toggleClass("prg-border-yellow")
    numImg = 0
  }
});


$("button[name='confirmar2']").click(function(){

    var score2 = 0;

    if($("p[id='triangulo']").attr('class') == $("img[alt='triangulo']").attr('class')){
      //alert("gg wp")
      score2+=1;
    }
    if($("p[id='quadrado']").attr('class') == $("img[alt='quadrado']").attr('class')){
      score2+=1;
    }
    if($("p[id='circulo']").attr('class') == $("img[alt='circulo']").attr('class')){
      score2+=1;
    }
    if($("p[id='retangulo']").attr('class') == $("img[alt='retangulo']").attr('class')){
      score2+=1;
    }

    $("h5[name='pontuacao2']").text("Pontuação: você fez " + score2 + " ponto(s)!");

});

$("button[name='limpar2']").click(function(){

  $("h5[name='pontuacao2']").text("Pontuação: ");

  $("p[id='triangulo']").removeClass()
  $("p[id='triangulo']").addClass("prg-border-1")
  $("p[id='quadrado']").removeClass()
  $("p[id='quadrado']").addClass("prg-border-1")
  $("p[id='circulo']").removeClass()
  $("p[id='circulo']").addClass("prg-border-1")
  $("p[id='retangulo']").removeClass()
  $("p[id='retangulo']").addClass("prg-border-1")

  $("img[alt='triangulo']").removeClass()
  $("img[alt='triangulo']").addClass("prg-border-2")
  $("img[alt='quadrado']").removeClass()
  $("img[alt='quadrado']").addClass("prg-border-2")
  $("img[alt='circulo']").removeClass()
  $("img[alt='circulo']").addClass("prg-border-2")
  $("img[alt='retangulo']").removeClass()
  $("img[alt='retangulo']").addClass("prg-border-2")



});


}); // document ready

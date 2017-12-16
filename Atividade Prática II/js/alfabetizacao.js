$(document).ready(function(){

  $("button[name='calcular']").click(function(){

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


    $("h5[name='pontuacao']").text("Pontuação: você fez " + score + " pontos!");
  });

  $("button[name='limpar']").click(function(){
    $("h5[name='pontuacao']").text("Pontuação: ");

    var i=0;
    while (i<17) {
      i+=1;
      $("#badge" + i).css({'background-color': ""});
    }

  });

});

/*
*/

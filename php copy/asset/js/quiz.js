let quizAnswer = "";

function quizView(view) {
  $(".quiz__num").text(view.quizID);
  $(".quiz__ask").text(view.quizAsk);
  $("#select1 + span").text(view.quizChoice1);
  $("#select2 + span").text(view.quizChoice2);
  $("#select3 + span").text(view.quizChoice3);
  $("#select4 + span").text(view.quizChoice4);
  quizAnswer = view.quizAnswer;
}

//정답 확인
function quizCheck() {
  let selectCheck = $(".quiz__selects input:checked").val();

  //정답을 체크 안했으면
  if (selectCheck == null || selectCheck == "") {
    alert("정답을 체크해주세요!!!");
  } else {
    $(".quiz__btn .next").fadeIn();
    //정답을 체크 했으면
    if (selectCheck == quizAnswer) {
      //정답
      $(".quiz__selects #select" + quizAnswer).addClass("correct");
    } else {
      //오답
      $(".quiz__selects #select" + selectCheck).addClass("incorrect");
      $(".quiz__selects #select" + quizAnswer).addClass("correct");
    }
  }
}

//문제 데이터 가져오기
function quizData() {
  let quizSubject = $("#quizSubject").val();
  $.ajax({
    url: "quizInfo.php",
    method: "POST",
    data: { quizSubject: quizSubject },
    dataType: "json",
    success: function (data) {
      console.log(data.quiz);
      quizView(data.quiz);
    },
    error: function (reqeust, status, error) {
      console.log("reqeust" + reqeust);
      console.log("status" + status);
      console.log("error" + error);
    },
  });
}
quizData();

//과목 선택
$("#quizSubject").change(function () {
  quizData();
});

//정답 확인
$(".quiz__btn .confirm").click(function () {
  //정답을 클릭했는지 안했는지 판단
  quizCheck();
  $(".quiz__btn .next").fadeIn();
  $(".quiz__selects input[type='radio']").attr("disabled", true);
  // $(".quiz__btn .comment").fadeIn();
});

//다음문제
$(".quiz__btn .next").click(function quizNext() {
  quizData();
  $(".quiz__selects input[type='radio']").prop("checked", false);
  $(".quiz__selects input").removeClass("correct");
  $(".quiz__selects input").removeClass("incorrect");
  $(".quiz__btn .next").hide();
  $(".quiz__selects input[type='radio']").attr("disabled", false);
});

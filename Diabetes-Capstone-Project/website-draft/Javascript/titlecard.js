//the program works when the page is ready
$(document).ready(function() {
	//when the select is changed
  $("select").change(function() {
	  //grab the value of the option changed and show picture
    $("select option:selected").each(function() {
      if ($(this).attr("value") == "girl1") {
        $(".pic").hide();
        $(".girl1").show();
      }
      if ($(this).attr("value") == "boy1") {
        $(".pic").hide();
        $(".boy1").show();
      }
      if ($(this).attr("value") == "girl2") {
        $(".pic").hide();
        $(".girl2").show();
      }
      if ($(this).attr("value") == "boy2") {
        $(".pic").hide();
        $(".boy2").show();
      }
      if ($(this).attr("value") == "girl3") {
        $(".pic").hide();
        $(".girl3").show();
      }
      if ($(this).attr("value") == "boy3") {
        $(".pic").hide();
        $(".boy3").show();
      }
    });
	  //change the picture
  }).change();
});
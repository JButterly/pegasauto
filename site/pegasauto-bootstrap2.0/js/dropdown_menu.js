$(function() {
  $(".dropdown-menu li").click(function() {
    $(".btn:first-child").text($(this).text());
    $(".btn:first-child").val($(this).text());
  });
});
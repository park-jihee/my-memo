$(document).ready(function () { // 제목 검색을 위한 함수
    $("#search").keyup(function () {

        $(".memo-view > .memo-list").hide();
      
        var k = $(this).val();
        var kup = k.toUpperCase();
        var klo = k.toLowerCase();

        var t = $(".memo-view > .memo-list > .memo-title").text();
        var tup = t.toUpperCase();
        var tlo = t.toLowerCase();
        
        var temp = $(".memo-view > .memo-list > .memo-title:contains('" + k + "')");

        $(temp).parent().show();

    });
 });
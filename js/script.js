var mlist = $(".memo-list");
var mheader = $(".memo-header");
var uicon = $(".memo-list i");
var wri = $("#write");
var del = $("#delete");
var allbox = $(".allcheck");
var submit = $(".btn-sub");
var update = $(".btn-up");
var img = "";
var imgnum = Math.floor(Math.random()*7);
    
// 메모장 색깔 랜덤
if( imgnum == 0 ){ 
    img = "img/t1.png"; 
    mlist.css("border", "1.8px solid #5883be");
    uicon.css("color", "#386FBC");
    wri.css("background-color", "#5883be");
    del.css("background-color", "#386FBC");
    allbox.css("border", "1px solid #5883be");
    submit.css("background-color", "#386FBC");
    update.css("background-color", "#386FBC");
}
else if( imgnum == 1 ){ 
    img = "img/t2.png"; 
    mlist.css("border", "1.8px solid #7aa642");
    uicon.css("color", "#69A422");
    wri.css("background-color", "#7aa642");
    del.css("background-color", "#69A422");
    allbox.css("border", "1px solid #7aa642");
    submit.css("background-color", "#69A422");
    update.css("background-color", "#69A422");
}
else if( imgnum == 2 ){ 
    img = "img/t3.png"; 
    mlist.css("border", "1.8px solid #c3c3c3");
    uicon.css("color", "#A09F9F");
    wri.css("background-color", "#c3c3c3");
    del.css("background-color", "#A09F9F");
    allbox.css("border", "1px solid #c3c3c3");
    submit.css("background-color", "#A09F9F");
    update.css("background-color", "#A09F9F");
}
else if( imgnum == 3 ){ 
    img = "img/t4.png"; 
    mlist.css("border", "1.8px solid #ffca3a");
    uicon.css("color", "#FDC830");
    wri.css("background-color", "#ffca3a");
    del.css("background-color", "#FDC830");
    allbox.css("border", "1px solid #ffca3a");
    submit.css("background-color", "#FDC830");
    update.css("background-color", "#FDC830");
}
else if( imgnum == 4 ){ 
    img = "img/t5.png"; 
    mlist.css("border", "1.8px solid #a0c7d0");
    uicon.css("color", "#7EBED2");
    wri.css("background-color", "#a0c7d0");
    del.css("background-color", "#7EBED2");
    allbox.css("border", "1px solid #a0c7d0");
    submit.css("background-color", "#7EBED2");
    update.css("background-color", "#7EBED2");
}
else if( imgnum == 5 ){ 
    img = "img/t6.png"; 
    mlist.css("border", "1.8px solid #ffa897");
    uicon.css("color", "#FF8B7C");
    wri.css("background-color", "#ffa897");
    del.css("background-color", "#FF8B7C");
    allbox.css("border", "1px solid #ffa897");
    submit.css("background-color", "#FF8B7C");
    update.css("background-color", "#FF8B7C");
}
else if( imgnum == 6 ){ 
    img = "img/t7.png"; 
    mlist.css("border", "1.8px solid #9674bc");
    uicon.css("color", "#895BB8");
    wri.css("background-color", "#9674bc");
    del.css("background-color", "#895BB8");
    allbox.css("border", "1px solid #9674bc");
    submit.css("background-color", "#895BB8");
    update.css("background-color", "#895BB8");
}

var ap = "<img src=" + img + " class="+ "sticker" +">";

mlist.append(ap);


// 체크박스 모두 선택, 해제

$(document).ready(function(){
    $("#all").click(function(){
        $(".check").prop("checked", this.checked);
    });
});


// view popup에 보여주는 메모장 내용
$(mlist).click(function(){ 

    var title = $(this).children('.memo-title').text();
    var body = $(this).children('.memo-body').text();

    $(".ptitle").empty();
    $(".pbody").empty();

    $(".ptitle").append(title);
    $(".pbody").append(body);

})


// update popup에 보여주는 메모장 내용
var medit = $(".edit");

$(medit).click(function(){ 

    var id = $(this).parent(mheader).parent(mlist).children('.memo-id').val();
    var title = $(this).parent(mheader).parent(mlist).children('.memo-title').text();
    var body = $(this).parent(mheader).parent(mlist).children('.memo-body').text();

    $("#uid").val(id);
    $("#utitle").val(title);
    $("#ubody").val(body);

})

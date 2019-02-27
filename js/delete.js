function getcheck(){ // check 한 항목 삭제하는 script

    var selectid = $("input[name=check]:checked").length; // 체크한 개수
    var getid = [];
    
    if( !selectid ){

        alert("선택된 항목이 없습니다.");

    }   else    {

        if( confirm("정말 삭제하시겠습니까?") == true ) {
    
            $('input[name=check]:checked').each(function(i) { // 체크된 체크박스의 value 값을 가지고 온다.
                getid.push($(this).val());
            });
    
            var allData = {"selectid": selectid, "getid": getid}; // ajax로 전송할 데이터
    
            $.ajax({ // ajax로 데이터 전송
                url: "delete.php",
                type: "POST",
                data: allData,
                success: function(data){
                    location.reload(); // 데이터 전송 성공시 새로고침
                },
                error:function(XHR, textStatus, errorThrown){
                    alert("에러 발생 " + textStatus + " : " + errorThrown);
                }
            });
    
        }   else    {

            location.reload();
    
        }
    }
}
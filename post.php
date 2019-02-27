<?php
include("header.php");

// 보여주는 부분
$sqltmp = "SELECT * FROM mymemo";
$rstmp = $db->query($sqltmp);
$total = $rstmp->rowCount();
$rstmp = null;
?>

<div class="post">
   <div id="post-nav">
      <div id="post-subnav">
         <div class="allcheck"><input type="checkbox" id="all"></div>
         <input type="text" class="form-control" placeholder="제목 검색" id="search">
         <button class="btn" id="write" data-target="#myWrite" data-toggle="modal">글쓰기</button>
         <input type="button" class="btn" id="delete" value="삭제하기" onclick="getcheck();">
      </div>
   </div>

   <!-- memo -->
   <div class="memo-view">
      <?php
      $sql = "SELECT * FROM mymemo ORDER BY id DESC";
      $rs = $db->query($sql);
      $data = $rs->fetchAll();
      foreach($data as $memo):
      ?>     
      <div class="memo-list">
         <div id="memo-header">
            <input type="checkbox" name="check" id="check" class="check" value="<?php echo $memo['id'];?>"><span><?php echo $memo['time'];?></span>
            <i class="far fa-edit edit" data-target="#myUpdate" data-toggle="modal"></i>
         </div>
         <hr>
         <input type="hidden" name="id" value="<?php echo $memo['id']?>" class="memo-id">
         <p class="memo-title" data-target="#myMemo" data-toggle="modal"><?php echo $memo['title'];?></p>
         <p class="memo-body" style="display: none"><?php echo $memo['body'];?></p>
      </div>
      <?php endforeach; ?>
   </div>

   <!-- write popup -->
   <div aria-labelledby="myModalLabel" class="modal fade" id="myWrite" role="dialog" tabindex="-1">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title" id="myModalLabel">메모장</h6>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="writeok.php" enctype="multipart/form-data" method="post">
                     <div class="form-group">
                        <label for="title">제목</label>
                        <input class="form-control" id="title" name="title" required type="text" maxlength="15">
                     </div>
                     <div class="form-group">
                        <label for="body">내용</label>
                        <textarea class="form-control" id="body" name="body" rows="10" required></textarea>
                     </div>
                     <button class="btn btn-sub" type="submit">올리기</button>
                  </form>
               </div>
            </div>
            </div>
        </div>

   <!-- view popup -->
      <div aria-labelledby="myModalLabel" class="modal fade" id="myMemo" role="dialog" tabindex="-1">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="myModalLabel">메모장</h6>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group first">
                     <label for="title">제목</label>
                     <p class="ptitle"></p>
                     <input type="hidden" id="vid" name="vid">
                  </div>
                  <div class="form-group last">
                     <label for="body">내용</label>
                     <pre class="pbody" style="overflow: auto; height: 330px;"></pre>
                  </div>
               </div>
            </div>
            </div>
        </div>

   <!-- update popup -->
      <div aria-labelledby="myModalLabel" class="modal fade" id="myUpdate" role="dialog" tabindex="-1">
         <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title" id="myModalLabel">메모장</h6>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="updateok.php" enctype="multipart/form-data" method="post">
                     <div class="form-group">
                        <label for="title">제목</label>
                        <input type="hidden" id="uid" name="uid">
                        <input class="form-control" id="utitle" name="utitle" required type="text" maxlength="15">
                     </div>
                     <div class="form-group">
                        <label for="body">내용</label>
                        <textarea class="form-control" id="ubody" name="ubody" rows="10" required></textarea>
                     </div>
                     <button class="btn btn-up" type="submit">수정하기</button>
                  </form>
               </div>
            </div>
            </div>
        </div>

<?php include("footer.php"); ?>
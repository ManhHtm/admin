
<div class="tt">
  <h2>--Thêm Danh Mục Mới--</h2>
</div>
<div class="box">
  <form action="index.php?act=adddm" method="post">
    <div class="box-text">
      Mã Danh Mục <br>
      <input type="text" placeholder="Mã loại" name="tenloai">
    </div>
    <div class="box-text">
      Tên Danh Mục <br>
      <input type="text" placeholder="Tên Loại" name="tenloai">
    </div>
    <div class="btn">
      <input type="submit" value="Thêm mới" name="themmoi">
      <input type="reset" value="Nhập lại">
      <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
    </div>
    <?php
    if(isset($thongbao)&&($thongbao)) 
    echo  "<font color='red'>".$thongbao."</font>"; 
    ?>
  </form>
</div>



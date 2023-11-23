<?php
    if(is_array($dm)){
        extract($dm);
     }
?>

<div class="tt">
  <h2>--Sửa Danh Mục--</h2>
</div>
<div class="box">
  <form action="index.php?act=updatedm" method="post">
  <div class="box-text">
      Mã Danh Mục <br>
      <input type="text" placeholder="Mã loại" name="tenloai"  disabled>
    </div>
    <div class="box-text">
      Nhập tên loại <br>
      <input type="text" placeholder="Mã loại" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
    </div>
    <div class="btn">
      <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
      <input type="submit" name="capnhat" value="Cập nhật">
      <input type="reset" value="Nhập lại">
      <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
    </div>
    <?php
    if(isset($thongbao)&&($thongbao)) 
    echo  "<font color='red'>".$thongbao."</font>"; 
    ?>
  </form>
</div>



<!-- 
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
           </div>
           <div class="btn">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
         <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=lisdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
                if(isset($thongbao)&&($thongbao!= "")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>
 


       
    </div> -->
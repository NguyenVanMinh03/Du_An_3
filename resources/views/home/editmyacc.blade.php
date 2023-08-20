       


@extends('home.contact.main')
@section(  "taitel" , "Home")
@section('contact')

<style>
	* {
  margin: 0;
  padding: 0;
}

.section_canhan {
  max-width: 1050px;
  margin: auto;
  display: flex;
  color: #3f3e3e;
  justify-content: space-between;
}
.section_canhan_left {
  max-width: 300px;
background-color: #ece8e89e;
  width: 300px;
  padding: 20px 0;
}
.section_canhan_right {
  max-width: 720px;
  background-color: #ece8e89e;
  width: 720px;

}
.section_canhan_left_anhcanhan img {
  border-radius: 50%;
  text-align: center;
}
.section_canhan_left_anhcanhan {
  text-align: center;
}
.section_canhan_left_thongtin {
  text-align: center;
  margin-top: 5px;
}
.section_canhan_left_thongtin p {
  padding-top: 8px;
  padding-bottom: 15px;
}
.section_canhan_left_thongtin span {
  font-size: 18px;
  font-weight: 600;
}
.section_canhan_left_thongtin a {
  text-decoration: none;
  background-color: #ec2154;
  color: #ffffff;
  padding: 6px 13px;
}
.section_canhan_left_thongtin a:hover {
  color: #ffffff;
  background-color: #009b50;
}

.section_canhan_left_thongtinadmin {
  margin-top: 40px;
}
.section_canhan_left_thongtinadmin ul li {
  margin-top: 7px;
  padding: 8px 0;
  padding-left: 30px;
list-style: none;
}

.section_canhan_left_thongtinadmin ul li a {
  text-decoration: none;
  color: #030303;
}
.section_canhan_left_thongtinadmin ul li:hover{
  background-color: #ec2154;

}
.section_canhan_left_thongtinadmin ul li:hover a {
color: #ffffff;

}




.section_canhan_right{
 padding: 20px; 
}
.section_canhan_right_thongtincanhan ,
 .section_canhan_right_tincanhan{
display: flex;
align-items: center;
justify-content: space-between;
}

.section_canhan_right_thongtincanhan a{
  text-decoration: none;
  background-color: #ec2154;
  color: #ffffff;
  padding: 10px;
  border-radius: 5px;
}
.section_canhan_right_thongtincanhan a:hover{
  color: #ffffff;
}


.section_canhan_right_form_sua form input{
  width: 600px;
  outline: 0;
  padding: 7px 10px;
  border: 2px solid #67656546;
  border-radius: 5px;
}
.section_canhan_right_form_sua form {
 margin-top: 40px;
}
.section_canhan_right_form_sua form button{
 background-color: #ec2154;
 outline: 0;
 border: 0;
 color: #ffffff;
 padding:8px 10px ;
 border-radius: 5px;
 }


 .section_comment_noidung {
  /* background-color: #b8b8b822; */
width: 1000px;
/* border-bottom: 2px solid #b7b7b792; */
margin-top: 20px;

 }
 .section_comment_noidung span{
  display: flex;
  margin: 10px;
  align-items: center;
  gap: 20px;
 }
 .section_comment_noidung span p{
font-size: 12px;
 }
 .section_comment_noidung h3{
font-size: 16px;
color: #ec2154;
font-weight: 500;
/* color: #030303; */
margin-top: 20px;
   }
   .section_comment_noidung p{
    font-size: 13px;
    font-weight: 500;
       }
       .section_comment_noidung p a{
        font-size: 10px;
      text-align: right;
       display: block;
        color: red;
           }
       .thongtinbinhluan{
        font-size: 25px;
        margin-bottom: 30px;
       
       }
</style>
<section>

     <div class="section_canhan">
          <div class="section_canhan_left">
               <div class="section_canhan_left_anhcanhan">
               <img width="50%" height="50%" src="../../../public/img/101.webp" alt="">
               </div>
               <div class="section_canhan_left_thongtin">
                    <!-- <span>Xin Chào !</span> -->
                    <p>Nguyễn Văn Minh</p>
     
                    <a href="/dangxuat">Đăng Xuất</a>
               </div>
               <div class="section_canhan_left_thongtinadmin">
                    <ul>
                         <li><a href="/myaccount">Tài Khoản Của Tôi</a></li>
                         <li><a href="#">Đơn Hàng Của Tôi</a></li>
                         <li><a href="/tongquan_admin">Trang Quản Trị</a></li>
                    </ul>
               </div>
          </div>
     
          <div class="section_canhan_right">
               <div class="section_canhan_right_thongtincanhan">
                    <h2>Sửa Tin Cá Nhân</h2>
                    
               </div>
               <hr style="margin: 10px 0;">
               <div class="section_canhan_right_form_sua">
                    <form action="" method="post" enctype="multipart/form-data">
                   
                         <span>Họ Tên:</span>
                         <br>
                         <input type="text" name="user_name" id="" value="">
                         <br><br>
                         <span>Email:</span>
                         <br>
                         <input type="email" name="user_email"value="">
                         <br><br>
                         <span>Hình Ảnh:</span>
                         <br>
                         <img width="20%" src="" alt="">
                         <br>
                         <input type="file" name="hinhanh">
                         <br><br>
                         <span>Số Điện Thoại:</span>
                         <br>
                         <input type="number" name="user_phone" value="">
                         <br><br>
                         <span>Địa Chỉ:</span>
                         <br>
                         <input type="text" value="" name="user_address">
                         <br><br>
                         <span>Password:</span>
                         <br>
                         <input type="password" name="password" value="">
                         <br><br>
                         <br>
                         <button type="submit">Lưu Thông Tin</button>
                         @csrf
                    </form>
               </div> 
          </div>
     </div>
             
         
              
     
          </section>


  @endsection
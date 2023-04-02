<style>
section{
    position: relative;
    width: 100%;
    /* height: 100vh;  */
    display: flex;
}
section .img-bg{
    position: relative;
    width: 50%;
    height: 100%;
}
section .img-bg img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
section .noi-dung{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
}
section .noi-dung .form{
    width: 50%;
}
section .noi-dung .form h2{
    color: #607d8b;
    font-weight: 500;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;
}
section .noi-dung .form .form-group{
    margin-bottom: 20px;
}
section .noi-dung .form .form-group span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #607db8;
    letter-spacing: 1px;
     }
section .noi-dung .form .form-group input{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    border: 1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
    }
section .noi-dung .form .form-group input[type="submit"]{
    background: #ff4584;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
    box-shadow: 0 1px 1px rgba(0,0,0,0.12),
               0 2px 2px rgba(0,0,0,0.12),
               0 4px 4px rgba(0,0,0,0.12),
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);
}
section .noi-dung .form .form-group input[type="submit"]:hover{
    background: #f53677;
}
section .noi-dung .form .form-group p{
    color: #607d8b;
}
section .noi-dung .form .form-group p a{
    color: #ff4584;
}
section .noi-dung .form h3{
    color: #607d8b;
    text-align: center;
    margin: 80px 0 10px;
    font-weight: 500;
}

@media (max-width: 768px){
    section .img-bg{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    section .noi-dung{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    section .noi-dung .form{
        width: 100%;
        padding: 40px;
        background: rgba(255 255 255 / 0.9);
        margin: 50px;
    }
    section .noi-dung .form h3{
        color: #607d8b;
        text-align: center;
        margin: 30px 0 10px;
        font-weight: 500;
    }
}
</style>
<section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="https://i.pinimg.com/originals/3c/99/9c/3c999cd310f95f8878f38589b7ac8167.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="index.php?action=dangnhap&act=dangnhap_action" method="post">
                    <div >
                        <div >
                            <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                                <input type="text" name="txtusername">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                                <input type="password" name="txtpassword">
                            </div>
                            <div class="form-group">
                             <a href="">
                                    <input id="submit"  type="submit" value="Đăng Nhập">
                            </a>
                        </div>
                    </div><br>

                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="index.php?action=dangky">Đăng Ký</a></p>
                    </div>
                </form>
                
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
    <section></section><hr>
    <section></section><hr>
    <section></section><hr><br>
<!-- =================== -->

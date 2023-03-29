<?php
    include_once "api/app/controller/AuthController.php";
    include_once "api/app/Config.php";
    include_once "api/app/controller/UserController.php";

    $auth = new AuthController();
    $auth->checkAuth();

    $user = new UserController();
    $row = $user->getUserById($_SESSION['unique_id']);


    include_once "part/header.php";

    $conn = new Config();

    if(isset($_POST['setting_name'])){
     
        $fname_n = $_POST['fname_n'];
        $lname_n = $_POST['lname_n'];

        $user_id=$_SESSION['unique_id'];
    
 
        mysqli_query($conn->connect(), "UPDATE `users` SET fname = '$fname_n', lname='$lname_n' WHERE unique_id = '$user_id'") or die('query failed');

        header('location:setting.php');
    }

    if(isset($_POST['setting_img'])){
     
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode);

        $time = time();
        $new_img_name = $time.$img_name;

        $user_id=$_SESSION['unique_id'];

        if(move_uploaded_file($tmp_name,"api/images/".$new_img_name)){

            mysqli_query($conn->connect(), "UPDATE `users` SET img = '${new_img_name}' WHERE unique_id = '$user_id'") or die('query failed');
            header('location:setting.php');

        }
    }

    if(isset($_POST['setting_delete_user'])){
    
        $user_id=$_SESSION['unique_id'];
     
        mysqli_query($conn->connect(), "DELETE FROM `users` WHERE unique_id = '$user_id'") or die('query failed');
        mysqli_query($conn->connect(), "DELETE FROM `messages` WHERE incoming_msg_id = '$user_id' OR outgoing_msg_id = '$user_id'") or die('query failed');

        header('location:login.php');
    }

?>

<body>
    <div class="wrapper_users">
        <section class="users">
            <header>
                <div class="content">
                    <img src="api/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['lname'].' '.$row['fname']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="users.php" class="button_message">
                    Message <i class="fa-regular fa-message"></i>
                </a>
                <?php
                    if($_SESSION['unique_id']=="1037533592"){
                        $admin_manager="Danh Sách User";
                    
                ?>
                <a href="list_friends.php" class="button_listfriends">
                    <?php echo $admin_manager; ?> <i class="fa-solid fa-user-group"></i>
                </a>

                <?php
                    }
                    else{
                    
                ?>

                <a href="list_friends.php" class="button_listfriends">
                    Bạn bè <i class="fa-solid fa-user-group"></i>
                </a>

                <?php
                    }
                ?>

                <a href="#" class="button_setting active">
                    Cài Đặt <i class="fa-sharp fa-solid fa-gear"></i>
                </a>
                
                <a href="intro.php" class="intro">
                    Giới thiệu <i class="fa-solid fa-circle-info"></i>
                </a>
                
                <a href="api/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
                    Đăng xuất <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </header>

            <div class="users_list_right">

                <div class="search" id="user_title">
                    <span class="text" >Cài Đặt </span>
                </div>
    
                <div class="user_setting">
                    <img src="api/images/<?php echo $row['img']; ?>" alt="">
                    <button class="update_avt">
                        Đổi ảnh đại diện
                    </button>
                    <div class="details">
                        <p class="details_name">Tên: <?php echo $row['lname'].' '.$row['fname']; ?> <button class="setname">Chỉnh sửa tên</button></p>
                        <p class="details_email">Email: <?php echo $row['email']; ?></p>
                        <p class="details_id">ID Người dùng: <?php echo $row['unique_id']; ?></p>
                    </div>
                    <button class="delete_user">
                        Xóa tài khoản
                    </button>
                </div>

                <form action="" class="form_setting_name" method="post" enctype="multipart/form-data">
                    <p>Nhập Họ Và Tên Mới</p>
                    <input class="form_setting_name_f" type="text" name="fname_n" placeholder="Tên" required>
                    <input class="form_setting_name_l" type="text" name="lname_n" placeholder="Họ" required>
                    <div class="form_setting_button">
                        <input type="reset" value="Hủy" class="cancel">
                        <input type="submit" value="Xác nhận" name="setting_name">
                        
                    </div>
                </form>

                <form action="" class="form_setting_img" method="post" enctype="multipart/form-data">
                    <p>Chọn Ảnh Thay Thế</p>
                    <input class="form_setting_img_n" type="file" name="image" accept="image/x-png,image/jpeg,image/jpg" required>
                    <div class="form_setting_img_button">
                        <input type="reset" value="Hủy" class="cancel">

                        <input type="submit" value="Xác nhận" name="setting_img">
                    </div>
                </form>

                <form action="" class="form_setting_delete_user" method="post" enctype="multipart/form-data">
                    <h3>LƯU Ý</h3>
                    <p>Khi xóa thì bạn sẽ không dùng tài khoản này để đăng nhập hệ thống được nữa và tất cả tin nhắn của bạn sẽ bị mất hết.</p>
                    <p>Bạn có chắc muốn xóa tài khoản ?</p>

                    <div class="form_setting_delete_user_button">
                        <input type="reset" value="Hủy" class="cancel">
                        <input type="submit" value="Xác nhận" name="setting_delete_user">
                    </div>
                </form>
            </div>


        </section>
    </div>

    <script src="assets/setting_event.js"></script>
</body>
</html>
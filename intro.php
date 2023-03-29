<?php
    include_once "api/app/controller/AuthController.php";
    include_once "api/app/Config.php";
    include_once "api/app/controller/UserController.php";

    $auth = new AuthController();
    $auth->checkAuth();

    $user = new UserController();
    $row = $user->getUserById($_SESSION['unique_id']);

    if($row['unique_id']=="1037533592"){
        $admin_manager="Danh Sách User";
    }

    include_once "part/header.php";
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


                <a href="users.php" class="button_message ">
                    Message<i class="fa-regular fa-message"></i>
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

                <a href="setting.php" class="button_setting">
                    Cài Đặt <i class="fa-sharp fa-solid fa-gear"></i>
                </a>

                <a href="#" class="intro active">
                    Giới thiệu <i class="fa-solid fa-circle-info"></i>
                </a>

                <a href="api/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
                    Đăng xuất <i class="fa-solid fa-right-from-bracket"></i>
                </a>
                
            </header>

            <div class="users_list_right intro_content" id="users_list_right">

                <h1>
                    Giới Thiệu
                </h1>

                <p>
                    - Ứng dụng trò chuyện với mọi người từ lâu đã không còn là điều mới mẻ với người sử dụng Internet. 
                    Và ngay cả tại Việt Nam, đây cũng là một điều hết sức tự nhiên ngay khi các ứng dụng chat online ra đời.
                </p>

                <p>
                    - Nhu cầu tìm kiếm và mong muốn nói chuyện, tâm sự với một người mà bạn không quen biết xuất phát 
                    từ chính lối sống hiện đại – nơi mà bạn không thể tâm sự những chuyện thầm kín với gia đình, bạn bè, 
                    đồng nghiệp. 
                </p>

                <p>
                    - Chúng tôi tạo ra ứng dụng này với hy vọng mang cho bạn những trãi nghiệm tuyệt vời nhất, cảm ơn bạn đã sử dụng sản phẩm của chúng tôi
                </p>
                <p class="fng_title">
                    FNG Tech
                </p>
            </div>


        </section>
    </div>

    <!-- <script src="assets/users-event.js"></script> -->
</body>
</html>
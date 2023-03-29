<?php
    include_once "api/app/controller/AuthController.php";
    include_once "api/app/Config.php";
    include_once "api/app/controller/UserController.php";

    $auth = new AuthController();
    $auth->checkAuth();

    $user = new UserController();
    $row = $user->getUserById($_SESSION['unique_id']);

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
                <a href="#" class="button_message active">
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

                <a href="setting.php" class="button_setting">
                    Cài Đặt <i class="fa-sharp fa-solid fa-gear"></i>
                </a>

                <a href="intro.php" class="intro">
                    Giới thiệu <i class="fa-solid fa-circle-info"></i>
                </a>

                <a href="api/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
                    Đăng xuất <i class="fa-solid fa-right-from-bracket"></i>
                </a>
                
            </header>

            <div class="users_list_right" id="users_list_right">

                <div class="search">
                    <span class="text">Tìm kiếm</span>
                    <input class="" type="text" name="search" id="" placeholder="Nhập tên để tìm kiếm">
                    <button class=""><i class="fas fa-search"></i></button>
                </div>
    
                <div class="users-list" style="text-align:center;"></div>
            </div>

        </section>
    </div>

    <script src="assets/users-event.js"></script>
</body>
</html>
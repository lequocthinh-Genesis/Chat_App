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
                <a href="users.php" class="button_message">
                    Message <i class="fa-regular fa-message"></i>
                </a>
                <a href="#" class="button_listfriends active">
                    Danh sách user <i class="fa-solid fa-user-group"></i>
                </a>

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

                <div class="search" id="user_title">
                    <span class="text" >Danh Sách User </span>
                </div>
    
                <div class="users-list" style="text-align:center;"></div>

            </div>


        </section>
    </div>

    <script src="assets/list_user_event.js"></script>
</body>
</html>
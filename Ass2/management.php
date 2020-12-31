<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Data</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="management.js"></script>
</head>

<body>
    <div class="container"> -->
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Product</title>
    <link rel="stylesheet" href="css/pricing_admin.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="index.js"></script>
    <script src="management.js"></script>
    <!-- FONT-FOOTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Nunito:ital,wght@0,200;1,600&family=Thasadith&display=swap" rel="stylesheet" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- FONT ICON -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="background" onclick="closeNav()"></div>
    <div id="header">
        <div id="mySidebar" class="sidebar">
            <div id="sidebarContent">
                <div class="row">
                    <div class="col-sm-10">
                        <img src="img/shopify-seeklogo.com.svg" class="logo" alt="Logo" />
                        <a class="company-name" href="./index.php">shopify</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a id="view" href="./pricing_admin.php">Quản lý bảng giá</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="./management.php">Quản lý người dùng</a>
                    </div>
                    <!-- <div class="col-sm-12">
                        <a href="./login.php">Đăng nhập</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="./register.php">Đăng ký</a>
                    </div> -->
                    <div class="col-sm-12">
                        <button onclick="window.location.href='login.php'">Đăng xuất</button>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <a href="./about.php">Về chúng tôi</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="./contact.php">Liên hệ</a>
                    </div>
                </div> -->
            </div>
        </div>

        <nav class="header-navbar navbar navbar-expand-md navbar-light">
            <div class="navbar-brand">
                <img src="img/shopify-seeklogo.com.svg" class="logo" alt="Logo" />
                <a class="nav-link company-name" href="./index.php">shopify</a>
            </div>

            <button class="navbar-toggler" type="button" onclick="openNav()">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="header-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./management.php">Quản lý người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="myview" href="./pricing_admin.php">Quản lý bảng giá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Đăng xuất</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link last-item" href="./login.php">Bắt đầu ngay</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
    <div id="section1">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Users</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM users");
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr id="<?php echo $row["id"]; ?>">
                            <td>
                                <span class="custom-checkbox">

                                    <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">

                                    <label for="checkbox2"></label>
                                </span>
                            </td>
                            <!-- <td><?php echo $i; ?></td> -->
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo gettype($row["role"]); ?></td>
                            <td>
                                <?php
                                $a = $row['id'];
                                $b = $row['name'];
                                $c = $row['email'];
                                $d = intval($row['role']);
                                if ($d !== 3) {
                                    echo "<a href='#editEmployeeModal' class='edit' data-toggle='modal'>
                                    <i class='update' data-toggle='tooltip' 
                                    data-id='$a' 
                                    data-name='$b' 
                                    data-email='$c' title='Chỉnh sửa' 
                                    data-role='$d'>Sửa<i>
                                </a>";

                                    echo "<a href='#deleteEmployeeModal' id='mydelete' 
                                    class='delete' data-id='$a>' data-toggle='modal'>
                            <i data-toggle='tooltip' title='Xóa'> Xóa</i></a>
                                    ";
                                }
                                ?>


                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_u" name="id" class="form-control" required>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name_u" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email_u" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <input type="role" id="role_u" name="role" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="2" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h4 class="modal-title">Xóa người dùng</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_d" name="id" class="form-control">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>



</html>
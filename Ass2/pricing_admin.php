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
    <script src="pricing_admin.js"></script>
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
                        <a class="nav-link" id="myview">Quản lý bảng giá</a>
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

                    <div class="col-xs-6 col-md-6">
                        <h2>Quản lý <b>sản phẩm</b></h2>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="#addEmployeeModal" class="btn btn-success col-xs-2 col-md-3" data-toggle="modal" style='width:10em;'> <span>Thêm mới</span></a>
                        <a href="JavaScript:void(0);" class="btn btn-danger col-xs-2 col-md-3" id="delete_multiple" style='width:10em;'><span>Xóa</span></a>

                    </div><br>
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
                            <th>STT</th>
                            <th>Tên</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $result = mysqli_query($con, "SELECT * FROM item");
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr id="<?php echo $row["name"] ?>">
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["name"]; ?>">
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                        <i class="update" data-toggle="tooltip" data-id="<?php echo $row["name"]; ?>" data-name="<?php echo $row["name"]; ?>" data-monthlyPrice="<?php echo $row["monthlyPrice"]; ?>" data-onlineStore="<?php echo $row["onlineStore"]; ?>" data-UnlimitedProducts="<?php echo $row["UnlimitedProducts"]; ?>" data-StaffAccounts="<?php echo $row["StaffAccounts"]; ?>" data-Support="<?php echo $row["Support"]; ?>" data-SalesChannels="<?php echo $row["SalesChannels"]; ?>" data-Locations="<?php echo $row["Locations"]; ?>" data-ManualOrderCreation="<?php echo $row["ManualOrderCreation"]; ?>" data-DiscountCodes="<?php echo $row["DiscountCodes"]; ?>" data-FreeSSL="<?php echo $row["FreeSSL"]; ?>" data-AbandonedCartRecovery="<?php echo $row["AbandonedCartRecovery"]; ?>" data-GiftCards="<?php echo $row["GiftCards"]; ?>" data-ProfessionalReports="<?php echo $row["ProfessionalReports"]; ?>" data-AdvancedReportBuilder="<?php echo $row["AdvancedReportBuilder"]; ?>" data-ShippingRates="<?php echo $row["ShippingRates"]; ?>" data-ShippingDiscount="<?php echo $row["ShippingDiscount"]; ?>" data-PrintShipping="<?php echo $row["PrintShipping"]; ?>" data-USPS="<?php echo $row["USPS"]; ?>" data-FraudAnalysis="<?php echo $row["FraudAnalysis"]; ?>" data-OnlineCreditCard="<?php echo $row["OnlineCreditCard"]; ?>" data-InpersonCreditCard="<?php echo $row["InpersonCreditCard"]; ?>" data-Additional="<?php echo $row["Additional"]; ?>" data-POSLite="<?php echo $row["POSLite"]; ?>" data-POSPro="<?php echo $row["POSPro"]; ?>" data-SellCurrencies="<?php echo $row["SellCurrencies"]; ?>" data-Exchange="<?php echo $row["Exchange"]; ?>" data-SellLanguage="<?php echo $row["SellLanguage"]; ?>" data-Domains="<?php echo $row["Domains"]; ?>" title="Chỉnh sửa">Sửa</i>

                                    </a>
                                    <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["name"]; ?>" data-toggle="modal">
                                        <i data-toggle="tooltip" title="Xóa">Xóa</i></a>
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

        <!-- Add Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="user_form">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm sản phẩm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>monthlyPrice</label>
                                <input type="monthlyPrice" id="monthlyPrice" name="monthlyPrice" class="form-control">
                            </div>
                            <!-- hi -->
                            <div class="form-group">
                                <label>onlineStore</label>
                                <input type="onlineStore" id="onlineStore" name="onlineStore" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>UnlimitedProducts</label>
                                <input type="UnlimitedProducts" id="UnlimitedProducts" name="UnlimitedProducts" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>StaffAccounts</label>
                                <input type="StaffAccounts" id="StaffAccounts" name="StaffAccounts" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Support</label>
                                <input type="Support" id="Support" name="Support" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SalesChannels</label>
                                <input type="SalesChannels" id="SalesChannels" name="SalesChannels" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Locations</label>
                                <input type="Locations" id="Locations" name="Locations" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ManualOrderCreation</label>
                                <input type="ManualOrderCreation" id="ManualOrderCreation" name="ManualOrderCreation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>DiscountCodes</label>
                                <input type="DiscountCodes" id="DiscountCodes" name="DiscountCodes" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>FreeSSL</label>
                                <input type="FreeSSL" id="FreeSSL" name="FreeSSL" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>AbandonedCartRecovery</label>
                                <input type="AbandonedCartRecovery" id="AbandonedCartRecovery" name="AbandonedCartRecovery" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>GiftCards</label>
                                <input type="GiftCards" id="GiftCards" name="GiftCards" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ProfessionalReports</label>
                                <input type="ProfessionalReports" id="ProfessionalReports" name="ProfessionalReports" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>AdvancedReportBuilder</label>
                                <input type="AdvancedReportBuilder" id="AdvancedReportBuilder" name="AdvancedReportBuilder" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ShippingRates</label>
                                <input type="ShippingRates" id="ShippingRates" name="ShippingRates" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ShippingDiscount</label>
                                <input type="ShippingDiscount" id="ShippingDiscount" name="ShippingDiscount" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>PrintShipping</label>
                                <input type="PrintShipping" id="PrintShipping" name="PrintShipping" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>USPS</label>
                                <input type="USPS" id="USPS" name="USPS" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>FraudAnalysis</label>
                                <input type="FraudAnalysis" id="FraudAnalysis" name="FraudAnalysis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>OnlineCreditCard</label>
                                <input type="OnlineCreditCard" id="OnlineCreditCard" name="OnlineCreditCard" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>InpersonCreditCard</label>
                                <input type="InpersonCreditCard" id="InpersonCreditCard" name="InpersonCreditCard" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Additional</label>
                                <input type="Additional" id="Additional" name="Additional" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>POSLite</label>
                                <input type="POSLite" id="POSLite" name="POSLite" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>POSPro</label>
                                <input type="POSPro" id="POSPro" name="POSPro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SellCurrencies</label>
                                <input type="SellCurrencies" id="SellCurrencies" name="SellCurrencies" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Exchange</label>
                                <input type="Exchange" id="Exchange" name="Exchange" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SellLanguage</label>
                                <input type="SellLanguage" id="SellLanguage" name="SellLanguage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Domains</label>
                                <input type="Domains" id="Domains" name="Domains" class="form-control">
                            </div>
                            <!-- end hi -->


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="1" name="type">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <button type="button" class="btn btn-success" id="btn-add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="update_form">
                        <div class="modal-header">
                            <h4 class="modal-title">Chỉnh sửa thông tin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_u" name="id" class="form-control" required>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name_u" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>monthlyPrice</label>
                                <input type="monthlyPrice" id="monthlyPrice_u" name="monthlyPrice" class="form-control">
                            </div>
                            <!-- hi -->
                            <div class="form-group">
                                <label>onlineStore</label>
                                <input type="onlineStore" id="onlineStore_u" name="onlineStore" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>UnlimitedProducts</label>
                                <input type="UnlimitedProducts" id="UnlimitedProducts_u" name="UnlimitedProducts" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>StaffAccounts</label>
                                <input type="StaffAccounts" id="StaffAccounts_u" name="StaffAccounts" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Support</label>
                                <input type="Support" id="Support_u" name="Support" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SalesChannels</label>
                                <input type="SalesChannels" id="SalesChannels_u" name="SalesChannels" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Locations</label>
                                <input type="Locations" id="Locations_u" name="Locations" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ManualOrderCreation</label>
                                <input type="ManualOrderCreation" id="ManualOrderCreation_u" name="ManualOrderCreation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>DiscountCodes</label>
                                <input type="DiscountCodes" id="DiscountCodes_u" name="DiscountCodes" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>FreeSSL</label>
                                <input type="FreeSSL" id="FreeSSL_u" name="FreeSSL" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>AbandonedCartRecovery</label>
                                <input type="AbandonedCartRecovery" id="AbandonedCartRecovery_u" name="AbandonedCartRecovery" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>GiftCards</label>
                                <input type="GiftCards" id="GiftCards_u" name="GiftCards" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ProfessionalReports</label>
                                <input type="ProfessionalReports" id="ProfessionalReports_u" name="ProfessionalReports" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>AdvancedReportBuilder</label>
                                <input type="AdvancedReportBuilder" id="AdvancedReportBuilder_u" name="AdvancedReportBuilder" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ShippingRates</label>
                                <input type="ShippingRates" id="ShippingRates_u" name="ShippingRates" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ShippingDiscount</label>
                                <input type="ShippingDiscount" id="ShippingDiscount_u" name="ShippingDiscount" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>PrintShipping</label>
                                <input type="PrintShipping" id="PrintShipping_u" name="PrintShipping" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>USPS</label>
                                <input type="USPS" id="USPS_u" name="USPS" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>FraudAnalysis</label>
                                <input type="FraudAnalysis" id="FraudAnalysis_u" name="FraudAnalysis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>OnlineCreditCard</label>
                                <input type="OnlineCreditCard" id="OnlineCreditCard_u" name="OnlineCreditCard" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>InpersonCreditCard</label>
                                <input type="InpersonCreditCard" id="InpersonCreditCard_u" name="InpersonCreditCard" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Additional</label>
                                <input type="Additional" id="Additional_u" name="Additional" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>POSLite</label>
                                <input type="POSLite" id="POSLite_u" name="POSLite" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>POSPro</label>
                                <input type="POSPro" id="POSPro_u" name="POSPro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SellCurrencies</label>
                                <input type="SellCurrencies" id="SellCurrencies_u" name="SellCurrencies" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Exchange</label>
                                <input type="Exchange" id="Exchange_u" name="Exchange" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SellLanguage</label>
                                <input type="SellLanguage" id="SellLanguage_u" name="SellLanguage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Domains</label>
                                <input type="Domains" id="Domains_u" name="Domains" class="form-control">
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
                            <h4 class="modal-title">Delete User</h4>
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
    </div>

</body>

</html>
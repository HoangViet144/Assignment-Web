<?php
include "../config.php";
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $name = $_POST['name'];
        $monthlyPrice = $_POST['monthlyPrice'];
        $onlineStore = $_POST['onlineStore'];
        $UnlimitedProducts = $_POST['UnlimitedProducts'];
        $StaffAccounts = $_POST['StaffAccounts'];
        $Support = $_POST['Support'];
        $SalesChannels = $_POST['SalesChannels'];
        $Locations = $_POST['Locations'];
        $ManualOrderCreation = $_POST['ManualOrderCreation'];
        $DiscountCodes = $_POST['DiscountCodes'];
        $FreeSSL = $_POST['FreeSSL'];
        $AbandonedCartRecovery = $_POST['AbandonedCartRecovery'];
        $GiftCards = $_POST['GiftCards'];
        $ProfessionalReports = $_POST['ProfessionalReports'];
        $AdvancedReportBuilder = $_POST['AdvancedReportBuilder'];
        $ShippingRates = $_POST['ShippingRates'];
        $ShippingDiscount = $_POST['ShippingDiscount'];
        $PrintShipping = $_POST['PrintShipping'];
        $USPS = $_POST['USPS'];
        $FraudAnalysis = $_POST['FraudAnalysis'];
        $OnlineCreditCard = $_POST['OnlineCreditCard'];
        $InpersonCreditCard = $_POST['InpersonCreditCard'];
        $Additional = $_POST['Additional'];
        $POSLite = $_POST['POSLite'];
        $POSPro = $_POST['POSPro'];
        $Exchange = $_POST['Exchange'];
        $SellLanguage = $_POST['SellLanguage'];
        $SellCurrencies = $_POST['SellCurrencies'];
        $Domains = $_POST['Domains'];
        $sql = "INSERT INTO `item`(`name`, `monthlyPrice`,`onlineStore`,`UnlimitedProducts`,`StaffAccounts`,
        `Support`,
`SalesChannels`,
`Locations`,
`ManualOrderCreation`,
`DiscountCodes` ,
`FreeSSL` ,
`AbandonedCartRecovery` ,
`GiftCards` ,
`ProfessionalReports` ,
`AdvancedReportBuilder` ,
`ShippingRates` ,
`ShippingDiscount`,
`PrintShipping` ,
`USPS` ,`FraudAnalysis` ,`OnlineCreditCard`,`InpersonCreditCard` ,
`Additional` ,`POSLite` ,`POSPro` ,`SellCurrencies` ,`Exchange` ,
`SellLanguage` ,`Domains` ) 
		VALUES ('$name','$monthlyPrice','$onlineStore','$UnlimitedProducts','$StaffAccounts',
        '$Support',
        '$SalesChannels',
        '$Locations',
        '$ManualOrderCreation',
        '$DiscountCodes',
        '$FreeSSL',
        '$AbandonedCartRecovery',
        '$GiftCards',
        '$ProfessionalReports',
        '$AdvancedReportBuilder',
        '$ShippingRates',
        '$ShippingDiscount',
        '$PrintShipping',
        '$USPS',
        '$FraudAnalysis',
        '$OnlineCreditCard',
        '$InpersonCreditCard',
        '$Additional',
        '$POSLite',
        '$POSPro',
        '$SellCurrencies',
        '$Exchange',
        '$SellLanguage',
        '$Domains' )";
        if (mysqli_query($con, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        // $id = $_POST['id'];
        // $name = $_POST['name'];
        // $year = $_POST['year'];
        // $sql = "UPDATE `cars` SET `id`='$id',`name`='$name',`year`='$year' WHERE id=$id";
        $name = $_POST['name'];
        $monthlyPrice = $_POST['monthlyPrice'];
        $onlineStore = $_POST['onlineStore'];
        $UnlimitedProducts = $_POST['UnlimitedProducts'];
        $StaffAccounts = $_POST['StaffAccounts'];
        $Support = $_POST['Support'];
        $SalesChannels = $_POST['SalesChannels'];
        $Locations = $_POST['Locations'];
        $ManualOrderCreation = $_POST['ManualOrderCreation'];
        $DiscountCodes = $_POST['DiscountCodes'];
        $FreeSSL = $_POST['FreeSSL'];
        $AbandonedCartRecovery = $_POST['AbandonedCartRecovery'];
        $GiftCards = $_POST['GiftCards'];
        $ProfessionalReports = $_POST['ProfessionalReports'];
        $AdvancedReportBuilder = $_POST['AdvancedReportBuilder'];
        $ShippingRates = $_POST['ShippingRates'];
        $ShippingDiscount = $_POST['ShippingDiscount'];
        $PrintShipping = $_POST['PrintShipping'];
        $USPS = $_POST['USPS'];
        $FraudAnalysis = $_POST['FraudAnalysis'];
        $OnlineCreditCard = $_POST['OnlineCreditCard'];
        $InpersonCreditCard = $_POST['InpersonCreditCard'];
        $Additional = $_POST['Additional'];
        $POSLite = $_POST['POSLite'];
        $POSPro = $_POST['POSPro'];
        $Exchange = $_POST['Exchange'];
        $SellLanguage = $_POST['SellLanguage'];
        $SellCurrencies = $_POST['SellCurrencies'];
        $Domains = $_POST['Domains'];
        $sql = "UPDATE `item` set
                    `name` = '$name',
                    `monthlyPrice` = '$monthlyPrice',
                    `onlineStore`='$onlineStore',
                    `UnlimitedProducts`='$UnlimitedProducts',
                    `StaffAccounts`='$StaffAccounts',
                    `Support`='$Support',
                    `SalesChannels`='$SalesChannels',
                    `Locations`='$Locations',
                    `ManualOrderCreation`='$ManualOrderCreation',
                    `DiscountCodes`='$DiscountCodes',
                    `FreeSSL`='$FreeSSL',
                    `AbandonedCartRecovery`='$AbandonedCartRecovery',
                    `GiftCards`='$GiftCards',
                    `ProfessionalReports`='$ProfessionalReports',
                    `AdvancedReportBuilder`='$AdvancedReportBuilder',
                    `ShippingRates`='$ShippingRates',
                    `ShippingDiscount`='$ShippingDiscount',
                    `PrintShipping`='$PrintShipping',
                    `USPS`='$USPS',
                    `FraudAnalysis`='$FraudAnalysis',
                    `OnlineCreditCard`='$OnlineCreditCard',
                    `InpersonCreditCard`='$InpersonCreditCard',
                    `Additional`='$Additional',
                    `POSLite`='$POSLite',
                    `POSPro`='$POSPro',
                    `Exchange`='$Exchange',
                    `SellLanguage`='$SellLanguage',
                    `SellCurrencies`='$SellCurrencies',
                    `Domains`='$Domains'
                    where `name`='$name'";

        if (mysqli_query($con, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $name = $_POST['name'];
        $sql = "DELETE FROM `item` WHERE `name`='$name' ";
        if (mysqli_query($con, $sql)) {
            echo $name;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}


if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $name = $_POST['name'];
        $sql = "DELETE FROM item WHERE name in ('$name')";
        if (mysqli_query($con, $sql)) {
            echo $name;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}

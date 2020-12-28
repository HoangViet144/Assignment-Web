<?php

include "config.php";
$return_arr = array();

$query = "SELECT * FROM item";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $monthlyPrice = $row['monthlyPrice'];
    $onlineStore = $row['onlineStore'];
    $UnlimitedProducts = $row['UnlimitedProducts'];
    $StaffAccounts = $row['StaffAccounts'];
    $Support = $row['Support'];
    $SalesChannels = $row['SalesChannels'];
    $Locations = $row['Locations'];
    $ManualOrderCreation = $row['ManualOrderCreation'];
    $DiscountCodes = $row['DiscountCodes'];
    $FreeSSL = $row['FreeSSL'];
    $AbandonedCartRecovery = $row['AbandonedCartRecovery'];
    $GiftCards = $row['GiftCards'];
    $ProfessionalReports = $row['ProfessionalReports'];
    $AdvancedReportBuilder = $row['AdvancedReportBuilder'];
    $ShippingRates = $row['ShippingRates'];
    $ShippingDiscount = $row['ShippingDiscount'];
    $PrintShipping = $row['PrintShipping'];
    $USPS = $row['USPS'];
    $FraudAnalysis = $row['FraudAnalysis'];
    $OnlineCreditCard = $row['OnlineCreditCard'];
    $InpersonCreditCard = $row['InpersonCreditCard'];
    $Additional = $row['Additional'];
    $POSLite = $row['POSLite'];
    $POSPro = $row['POSPro'];
    $Exchange = $row['Exchange'];
    $SellLanguage = $row['SellLanguage'];
    $SellCurrencies = $row['SellCurrencies'];
    $Domains = $row['Domains'];

    $return_arr[] = array(
        "name" => $name,
        "monthlyPrice" => $row['monthlyPrice'],
        "onlineStore" => $row['onlineStore'],
        "UnlimitedProducts" => $row['UnlimitedProducts'],
        "StaffAccounts" => $row['StaffAccounts'],
        "Support" => $row['Support'],
        "SalesChannels" => $row['SalesChannels'],
        "Locations" => $row['Locations'],
        "ManualOrderCreation" => $row['ManualOrderCreation'],
        "DiscountCodes" => $row['DiscountCodes'],
        "FreeSSL" => $row['FreeSSL'],
        "AbandonedCartRecovery" => $row['AbandonedCartRecovery'],
        "GiftCards" => $row['GiftCards'],
        "ProfessionalReports" => $row['ProfessionalReports'],
        "AdvancedReportBuilder" => $row['AdvancedReportBuilder'],
        "ShippingRates" => $row['ShippingRates'],
        "ShippingDiscount" => $row['ShippingDiscount'],
        "PrintShipping" => $row['PrintShipping'],
        "USPS" => $row['USPS'],
        "FraudAnalysis" => $row['FraudAnalysis'],
        "OnlineCreditCard" => $row['OnlineCreditCard'],
        "InpersonCreditCard" => $row['InpersonCreditCard'],
        "Additional" => $row['Additional'],
        "POSLite" => $row['POSLite'],
        "POSPro" => $row['POSPro'],
        "Exchange" => $row['Exchange'],
        "SellLanguage" => $row['SellLanguage'],
        "SellCurrencies" => $row['SellCurrencies'],
        "Domains" => $row['Domains'],
    );
}

// Encoding array in JSON format
echo json_encode($return_arr);

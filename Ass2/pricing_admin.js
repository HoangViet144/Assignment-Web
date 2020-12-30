$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "service/update.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#addEmployeeModal').modal('hide');
                alert('Data added successfully !');
                location.reload();
            }
            else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});
$(document).on('click', '.update', function (e) {
    // var id = $(this).attr("data-id");
    var name = $(this).attr("data-name");
    var monthlyPrice =  $(this).attr("data-monthlyPrice");
    var onlineStore =  $(this).attr("data-onlineStore");
    var UnlimitedProducts =  $(this).attr("data-UnlimitedProducts");
    var StaffAccounts =  $(this).attr("data-StaffAccounts");
    var Support =  $(this).attr("data-Support");
    var SalesChannels =  $(this).attr("data-SalesChannels");
    var Locations =  $(this).attr("data-Locations");
    var ManualOrderCreation =  $(this).attr("data-ManualOrderCreation");
    var DiscountCodes =  $(this).attr("data-DiscountCodes");
    var FreeSSL =  $(this).attr("data-FreeSSL");
    var AbandonedCartRecovery =  $(this).attr("data-AbandonedCartRecovery");
    var GiftCards =  $(this).attr("data-GiftCards");
    var ProfessionalReports =  $(this).attr("data-ProfessionalReports");
    var AdvancedReportBuilder =  $(this).attr("data-AdvancedReportBuilder");
    var ShippingRates =  $(this).attr("data-ShippingRates");
    var ShippingDiscount =  $(this).attr("data-ShippingDiscount");
    var PrintShipping =  $(this).attr("data-PrintShipping");
    var USPS =  $(this).attr("data-USPS");
    var FraudAnalysis =  $(this).attr("data-FraudAnalysis");
    var OnlineCreditCard =  $(this).attr("data-OnlineCreditCard");
    var InpersonCreditCard =  $(this).attr("data-InpersonCreditCard");
    var Additional =  $(this).attr("data-Additional");
    var POSLite =  $(this).attr("data-POSLite");
    var POSPro =  $(this).attr("data-POSPro");
    var Exchange =  $(this).attr("data-Exchange");
    var SellLanguage =  $(this).attr("data-SellLanguage");
    var SellCurrencies =  $(this).attr("data-SellCurrencies");
    var Domains =  $(this).attr("data-Domains");

    
    $('#name_u').val(name);
    $('#monthlyPrice_u').val(monthlyPrice);
    $('#onlineStore_u').val(onlineStore);
    $('#UnlimitedProducts_u').val(UnlimitedProducts);
    $('#StaffAccounts_u').val(StaffAccounts);
    $('#Support_u').val(Support);
    $('#SalesChannels_u').val(SalesChannels);
    $('#Locations_u').val(Locations);
    $('#ManualOrderCreation_u').val(ManualOrderCreation);
    $('#DiscountCodes_u').val(DiscountCodes);
    $('#FreeSSL_u').val(FreeSSL);
    $('#AbandonedCartRecovery_u').val(AbandonedCartRecovery);
    $('#GiftCards_u').val(GiftCards);
    $('#ProfessionalReports_u').val(ProfessionalReports);
    $('#AdvancedReportBuilder_u').val(AdvancedReportBuilder);
    $('#ShippingRates_u').val(ShippingRates);
    $('#ShippingDiscount_u').val(ShippingDiscount);
    $('#PrintShipping_u').val(PrintShipping);
    $('#USPS_u').val(USPS);
    $('#FraudAnalysis_u').val(FraudAnalysis);
    $('#OnlineCreditCard_u').val(OnlineCreditCard);
    $('#InpersonCreditCard_u').val(InpersonCreditCard);
    $('#Additional_u').val(Additional);
    $('#POSLite_u').val(POSLite);
    $('#POSPro_u').val(POSPro);
    $('#Exchange_u').val(Exchange);
    $('#SellLanguage_u').val(SellLanguage);
    $('#SellCurrencies_u').val(SellCurrencies);
    $('#Domains_u').val(Domains);
});

$(document).on('click', '#update', function (e) {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "service/update.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);

            if (dataResult.statusCode == 200) {
                $('#editEmployeeModal').modal('hide');
                alert('Data updated successfully !');
                location.reload();
            }
            else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});
$(document).on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $('#id_d').val(id);

});
$(document).on("click", "#delete", function () {
    $.ajax({
        url: "service/update.php",
        type: "POST",
        cache: false,
        data: {
            type: 3,
            name: $("#id_d").val()
        },
        success: function (dataResult) {
            $('#deleteEmployeeModal').modal('hide');
            $("#" + dataResult).remove();

        }
    });
});
$(document).on("click", "#delete_multiple", function () {
    var user = [];
    $(".user_checkbox:checked").each(function () {
        user.push($(this).data('user-id'));
    });
    if (user.length <= 0) {
        alert("Please select records.");
    }
    else {
        WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if (checked == true) {
            var selected_values = user.join(",");
            $.ajax({
                type: "POST",
                url: "service/update.php",
                cache: false,
                data: {
                    type: 4,
                    name: selected_values
                },
                success: function (response) {
                    var ids = response.split(",");
                    for (var i = 0; i < ids.length; i++) {
                        $("#" + ids[i]).remove();
                    }
                }
            });
        }
    }
});
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
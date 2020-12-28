$(document).ready(function() {
	// $("#myview").click(function() {

		$.ajax({
			url: 'viewPrice.php',
			type: 'get',
			dataType: 'JSON',
			success: function(response) {
				var len = response.length;
				var len_element=response[0].length;
				var row=0;
				for (var key in response[0]) {
					var tr_str="<tr>"+"<td>"+key+"</td>";
					if(key!='name'){
						
					// 	if (row==0)
					// 		tr_str = tr_str +"<td>Chi phí mỗi tháng</td>";
						for(var i=0;i<len;i++){
							
							var t = response[i][key];
							
							if (t=="true")
							tr_str = tr_str +
								"<td><span class=\"my-ok-icon\">&#10003;</span></td>";
							else if (t=='false')
								tr_str = tr_str +
								"<td>-</td>";
							else{
								
								if(key=='monthlyPrice')
									tr_str = tr_str +
									"<td><span class=\"strong-text\">"+t+"</span><span class=\"sub-align\">/1thang</span></td>";
								else 
									tr_str=tr_str +"<td>"+t+"</td>";

							}
												
						}
						tr_str = tr_str +"</tr>"
						row=row+1;
						$("#my-table-respondsive tbody").append(tr_str);
						// console.log(response[0]);
					}

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                    // var name = response[i][key];
                    // var monthlyPrice = $monthlyPrice;
                    // var onlineStore = response[i].onlineStore;
                    // var UnlimitedProducts = response[i].UnlimitedProducts;
                    // var StaffAccounts = response[i].StaffAccounts;
                    // var Support = response[i].Support;
                    // var SalesChannels = response[i].SalesChannels;
                    // var Locations = response[i].Locations;
                    // var ManualOrderCreation = response[i].ManualOrderCreation;
                    // var DiscountCodes = response[i].DiscountCodes;
                    // var FreeSSL = response[i].FreeSSL;
                    // var AbandonedCartRecovery = response[i].AbandonedCartRecovery;
                    // var GiftCards = response[i].GiftCards;
                    // var ProfessionalReports = response[i].ProfessionalReports;
                    // var AdvancedReportBuilder = response[i].AdvancedReportBuilder;
                    // var ShippingRates = response[i].ShippingRates;
                    // var ShippingDiscount = response[i].ShippingDiscount;
                    // var PrintShipping = response[i].PrintShipping;
                    // var USPS = response[i].USPS;
                    // var FraudAnalysis = response[i].FraudAnalysis;
                    // var OnlineCreditCard = response[i].OnlineCreditCard;
                    // var InpersonCreditCard = response[i].InpersonCreditCard;
                    // var Additional = response[i].Additional;
                    // var POSLite = response[i].POSLite;
                    // var POSPro = response[i].POSPro;
                    // var Exchange = response[i].Exchange;
                    // var SellLanguage = response[i].SellLanguage;
                    // var SellCurrencies = response[i].SellCurrencies;
                    // var Domains = response[i].Domains;
					
				}
			}
		});
});



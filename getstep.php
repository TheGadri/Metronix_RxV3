<?php
$id = $_POST["id"];
$action = $_POST["act"];

if($action == "add_new_member"){
    include("public/members/add_new_member.php");
}else if ($action == "import_members_bulk"){
    include("public/members/import_members_bulk.php");
}else if ($action == "list_of_members"){
    include("public/members/list_of_members.php");
}else if ($action == "list_of_archive_members"){
    include("public/members/list_of_archive_members.php");
}else if ($action == "pending_registration"){
    include("public/members/pending_registration.php");
}else if ($action == "userMemberCLicked"){
    include("public/members/userMemberCLicked.php");
}else if ($action == "generateClaim"){
    include("public/members/generateClaim.php");
}else if ($action == "editMember"){
    include("public/members/editMember.php");
}else if($action == "bulk_members_deactivate"){
    include("public/members/bulk_member_deactivation.php");
}else if ($action == "claimsGroup"){
    include("public/clientsAndPlans/claimsGroup.php");
}else if ($action == "listOfCorporate"){
    include("public/clientsAndPlans/listOfCorporate.php");
}else if ($action == "companyDetails"){
    include("public/clientsAndPlans/companyDetails.php");
}else if ($action == "healthPlansBenefit"){
    include("public/clientsAndPlans/healthPlansBenefit.php");
}else if ($action == "companyBenefitChart"){
    include("public/clientsAndPlans/companyBenefitChart.php");
}else if ($action == "addServiceProvider"){
    include("public/serviceProviders/addServiceProvider.php");
}else if ($action == "listOfProviders"){
    include("public/serviceProviders/listOfProviders.php");
}else if ($action == "serviceProviderDetails"){
    include("public/serviceProviders/serviceProviderDetails.php");
}else if ($action == "allAuthorization"){
    include("public/authorizations/allAuthorization.php");
}else if ($action == "pendingAuthorization"){
    include("public/authorizations/pendingAuthorization.php");
}else if ($action == "approvedAuthorization"){
    include("public/authorizations/approvedAuthorization.php");
}else if ($action == "rejectedAuthorization"){
    include("public/authorizations/rejectedAuthorization.php");
}else if ($action == "referredMedical"){
    include("public/authorizations/referredMedical.php");
}else if ($action == "referredDoctor"){
    include("public/authorizations/referredDoctor.php");
}else if ($action == "add_dependent"){
    include("public/members/add_new_member.php");
}else if ($action == "provider_noClaim"){
    include("public/serviceProviders/provider_noClaims.php");
}else if ($action == "provider_claim"){
    include("public/serviceProviders/provider_claims.php");
}else if( $action == "claims_information_table_detailview"){
    include("public/clientsAndPlans/claims_information_table_detailview.php");
}else if( $action == "detail_auth"){
    include("public/authorizations/authorization_detail.php");
}else if ($action == "medical_history_detail"){
    include("public/authorizations/medical_history_detail.php");
}else if ($action == "pending_detail_auth"){
    include("public/authorizations/pending_authorization_detail.php");
}else if ($action == "approved_detail_auth"){
    include("public/authorizations/approved_auth_detail.php");
}else if ($action == "rejected_detail_auth"){
    include("public/authorizations/rejected_auth_detail.php");
}else if ($action == "referred_med_detail"){
    include("public/authorizations/referred_med_detail.php");
}else if($action == "referred_doctor_detail"){
    include("public/authorizations/referred_doctor_detail.php");
}else if($action == "all_cases"){
    include("public/cases/all_cases.php");
}else if($action == "open_cases"){
    include("public/cases/open_cases.php");
}else if($action == "referred_cases"){
    include("public/cases/referred_cases.php");
}else if($action == "closed_cases"){
    include("public/cases/close_cases.php");
}else if($action == "all_cases_detail"){
    include("public/cases/all_cases_detail.php");
}else if($action == "member_detail_dropdown"){
    include("public/members/member_claim_dropdown.php");
}else if($action == "list_of_items"){
    include("public/clientsAndPlans/list_of_item.php");
}else if($action == "list_of_item_detail"){
    include("public/clientsAndPlans/list_of_item_detail.php");
}else if($action == "company_benefitChart_addbenefit"){
    include("public/clientsAndPlans/company_benefitchart_addBenefit.php");
}else if ($action == "claims_information_click"){
    include("public/serviceProviders/claimsInformation_clicked.php");
}else if ($action == "dropdown_serviceProvider_claimdetail"){
    include("public/serviceProviders/claim_information_table_dropdown.php");
}else if($action == "list_all_claims"){
    include("public/claims_management/list_all_claims.php");
}else if($action == "summery_all_claims"){
    include("public/claims_management/summery_claim.php");
}else if($action == "claim_management_detail"){
    include("public/claims_management/cliams_detail.php");
} else if($action == "defaultBenefitChart"){
    include("public/benefitsGroupsAndItems/defaultBenefitChart.php");
} else if($action == "benefitGroups"){
    include("public/benefitsGroupsAndItems/benefitGroups.php");
}else if($action == "list_of_benefit_items"){
    include("public/benefitsGroupsAndItems/listOfBenefitItems.php");
}  else if($action == "edit_benefit_items"){
    include("public/benefitsGroupsAndItems/editBenefitItem.php");
}else if($action == "crm_all_notes"){
    include("public/crm/all_notes.php");
}else if ($action == "crm_log_notes"){
    include("public/crm/all_log.php");
}else if($action == "crm_all_task"){
    include("public/crm/all_task.php");
}else if($action == "open_task"){
    include("public/crm/open_task.php");
}else if($action == "pending_task"){
    include("public/crm/pending_task.php");
}else if($action == "resolved_task"){
    include("public/crm/resolved_task.php");
}else if($action == "closed_task"){
    include("public/crm/closed_task.php");
}else if($action == "member_reports"){
    include("public/reportsManagement/memberReports.php");
}else if($action == "claims_report"){
    include("public/reportsManagement/claimsReport.php");
}else if($action == "provider_items"){
    include("public/admin_utility/providerItems.php");
}else if($action == "add_provider_item"){
    include("public/admin_utility/addProviderItem.php");
}else if($action == "update_provider_item"){
    include("public/admin_utility/updateProviderItem.php");
} else if ($action == "uploaded_document"){
    include("public/members/uploaded_document.php");
}else if($action == "system_users"){
    include("public/admin_utility/system_users.php");
}else if($action == "provider_items"){
    include("public/admin_utility/provider_item.php");
}else if($action == "service_add_user"){
    include("public/admin_utility/add_user.php");
}else if($action == "list_role"){
    include("public/admin_utility/list_role.php");
}else if($action == "permission"){
    include("public/admin_utility/user_permission.php");
}else if ($action == "edit_user"){
    include("public/admin_utility/edit_user.php");
}else if ($action == "service_provider"){
    include("public/admin_utility/service_provider.php");
}else if ($action == "system_updates"){
    include("public/admin_utility/system_update.php");
}else if ($action == "permission"){
    include("public/admin_utility/user_permission.php");
}else if($action == "security_levels"){
    include("public/admin_utility/security_level.php");
}else if($action == "edit_security_level"){
    include("public/admin_utility/edit_security_level.php");
}else if($action == "edit_role"){
    include("public/admin_utility/edit_role.php");
}

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Company Information
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a class="dropdown-item" href="javascript:;"><i class="flaticon-list-1"></i> List of Corporate</a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal"
                        data-target="#attachNewHealthPlan"><i class="flaticon-list-1"></i> Attach New Plan
                        Groups</a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#attachNewPayment"><i
                            class="flaticon-list-1"></i> Attach New Payment
                        Option</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-md-4 col-form-label font-weight-bold">Name : </label>
                            <label class="col-md-8 col-form-label" id="hasMemberId"> LNG
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="employeeNumber" class="col-md-4 col-form-label font-weight-bold">Company ID
                                :</label>
                            <label class="col-md-8 col-form-label" id="employerNumber">6679D9
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="surname" class="col-md-4 col-form-label font-weight-bold">Policy Expiry Date
                                :</label>
                            <label class="col-md-8 col-form-label" id="surname">12/11/0000</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="firstname" class="col-md-4 col-form-label font-weight-bold">Last Update Time
                                :</label>
                            <label class="col-md-8 col-form-label" id="firstname">00:00</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Company Plans and Benefits
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#corporateMembers">Corporate Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#plansBenefit">Plans & Benefits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#paymentOptions">Payment Options</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#attachDoc">Attach Document</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#billingInfo">Billing Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#paymentInfo">Payment Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#claimInfo">Claim Information</a>
            </li>
               <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#exchangeRate">Exchange Rate</a>
            </li> -->
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="corporateMembers" role="tabpanel">
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="row align-items-center">
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                    <div class="kt-input-icon kt-input-icon--left input-group">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                            <span><i class="la la-search"></i></span>
                                        </span>
                                        <div class="input-group-append">
                                            <button class="btn btn-success btn-icon btn-icon-md" type="button"><i
                                                    class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 kt-margin-b-20-tablet-and-mobile">
                                    <div class="">
                                        <div class="col-md-5">
                                            <select class="form-control" id="search_by" name="search_by">
                                                <option disabled selected>Search By</option>
                                                <option value="surname">Surname</option>
                                                <option value="firstname">Firstname</option>
                                                <option value="gender">Gender</option>
                                                <option value="hasId">HAS Member Id</option>
                                                <option value="relationshipType">Relationship Type</option>
                                                <option value="healthPlan">Health Plan</option>
                                                <option value="status">Status</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <!--begin: Datatable -->
                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                        id="local_data" style="">
                        <table class="table table-hover">
                            <thead class="kt-datatable__head table-warning">
                                <tr class="kt-datatable__row p-5" style="left: 0px;">
                                    <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                            style="width: 100px;">#</span></th>
                                    <th data-field="firstname" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                            style="width: 100px;">Firstname</span></th>
                                    <th data-field="membership" class="kt-datatable__cell kt-datatable__cell--sort">
                                        <span style="width: 100px;">Membership No.</span></th>
                                    <th data-field="health_plan" class="kt-datatable__cell kt-datatable__cell--sort">
                                        <span style="width: 100px;">Health Plan</span></th>
                                    <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                            style="width: 100px;">Status</span></th>
                                    <th data-field="actions" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                            style="width: 100px;">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="kt-datatable__body">
                                <tr onclick="getstep('userMemberCLicked')" data-row="0" class="kt-datatable__row"
                                    style="left: 0px;">
                                    <th data-field="#" class="kt-datatable__cell no_v"><span>1</span>
                                    </th>
                                    <td data-field="firstname" class="kt-datatable__cell no_v"><span>Francis</span>
                                    </td>
                                    <td data-field="membership" class="kt-datatable__cell no_v"><span>Membership
                                            No.</span>
                                    </td>
                                    <td data-field="health_plan" class="kt-datatable__cell no_v"><span>Health
                                            Plan</span></td>
                                    <td data-field="status" class="kt-datatable__cell no_v"><span><span
                                                class="kt-font-bold kt-font-success">Active</span></span></td>
                                    <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                            <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                <i class="la la-exclamation-circle"></i> </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr onclick="getstep('userMemberCLicked')" data-row="1" class="kt-datatable__row"
                                    style="left: 0px;">
                                    <th data-field="#" class="kt-datatable__cell no_v"><span>1</span>
                                    </th>
                                    <td data-field="firstname" class="kt-datatable__cell no_v"><span>Francis</span>
                                    </td>
                                    <td data-field="membership" class="kt-datatable__cell no_v"><span>Membership
                                            No.</span>
                                    </td>
                                    <td data-field="health_plan" class="kt-datatable__cell no_v"><span>Health
                                            Plan</span></td>
                                    <td data-field="status" class="kt-datatable__cell no_v"><span><span
                                                class="kt-font-bold text-error">In-active</span></span></td>
                                    <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                            <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                <i class="la la-exclamation-circle"></i> </a>
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="kt-datatable__pager kt-datatable--paging-loaded">
                            <ul class="kt-datatable__pager-nav">
                                <li><a title="First"
                                        class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                <li><a title="Previous"
                                        class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                <li style=""></li>
                                <li style="display: none;"><input type="text" class="kt-pager-input form-control"
                                        title="Page number"></li>
                                <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
                                        data-page="1" title="1">1</a></li>
                                <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2"
                                        title="2">2</a></li>
                                <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3"
                                        title="3">3</a></li>
                                <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4"
                                        title="4">4</a></li>
                                <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5"
                                        title="5">5</a></li>
                                <li></li>
                                <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
                                        data-page="2"><i class="flaticon2-next"></i></a></li>
                                <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
                                        data-page="10"><i class="flaticon2-fast-next"></i></a></li>
                            </ul>
                            <div class="kt-datatable__pager-info">
                                <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
                                    <select class="selectpicker kt-datatable__pager-size" title="Select page size"
                                        data-width="60px" data-selected="10" tabindex="-98">
                                        <option class="bs-title-option" value=""></option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="button" title="Select page size">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">10</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu " role="combobox">
                                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                            <ul class="dropdown-menu inner show"></ul>
                                        </div>
                                    </div>
                                </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable -->
                </div>
            </div>
            <div class="tab-pane" id="plansBenefit" role="tabpanel">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <!--begin: Datatable -->
                    <div class="table-responsive">
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                            id="local_data" style="">
                            <table class="table table-hover table-bordered">
                                <thead class="kt-datatable__head table-warning">
                                    <tr class="kt-datatable__row text-center" style="left: 0px;">
                                        <th colspan="2" class="kt-datatable__cell kt-datatable__cell--sort"><span>Health
                                                Plan</span></th>
                                        <th colspan="9" class="kt-datatable__cell kt-datatable__cell--sort"><span>Member
                                                Only</span></th>
                                        <th class="kt-datatable__cell kt-datatable__cell--sort"><span>Amount
                                                Coverage</span>
                                        </th>
                                        <th class="kt-datatable__cell kt-datatable__cell--sort"><span>Action</span></th>
                                    </tr>
                                    <tr class="kt-datatable__row" style="left: 0px;">
                                        <th data-field="id"><span>#</span></th>
                                        <th data-field="plan" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>#</span></th>
                                        <th data-field="out_patient"
                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Out Patient</span></th>
                                        <th data-field="in_patient_limit"
                                            class="kt-datatable__cell kt-datatable__cell--sort"><span>In Patient
                                                Limit</span></th>
                                        <th data-field="maternity" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Maternity Limit</span></th>
                                        <th data-field="dental" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Dental Limit</span>
                                        </th>
                                        <th data-field="optical" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Optical Limit</span>
                                        </th>
                                        <th data-field="drug" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Drug Limit</span>
                                        </th>
                                        <th data-field="psychology" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Psycholgy Limit</span>
                                        </th>
                                        <th data-field="health" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Hearing Limit</span>
                                        </th>
                                        <th data-field="physiotherapy"
                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span>Physiotherapy Limit</span>
                                        </th>
                                        <th data-field="amount_coverage"
                                            class="kt-datatable__cell kt-datatable__cell--sort"><span></span></th>
                                        <th data-field="actions" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span></span></th>
                                    </tr>
                                </thead>
                                <tbody class="kt-datatable__body">
                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                        <td onclick="getstep('companyBenefitChart')" data-field="id"
                                            class="kt-datatable__cell no_v"><span>1</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="plan"
                                            class="kt-datatable__cell no_v"><span>Test Member Plan</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="out_patient"
                                            class="kt-datatable__cell no_v">
                                            <span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="in_patient_limit"
                                            class="kt-datatable__cell no_v"><span>0.00</span></td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="maternity"
                                            class="kt-datatable__cell no_v"><span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="dental"
                                            class="kt-datatable__cell no_v">
                                            <span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="optical"
                                            class="kt-datatable__cell no_v">
                                            <span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="drug"
                                            class="kt-datatable__cell no_v"><span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="health"
                                            class="kt-datatable__cell no_v"><span>
                                                0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="physiotherapy"
                                            class="kt-datatable__cell no_v">
                                            <span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="drug"
                                            class="kt-datatable__cell no_v"><span>0.00</span>
                                        </td>
                                        <td onclick="getstep('companyBenefitChart')" data-field="amount_coverage"
                                            class="kt-datatable__cell no_v"><span>
                                                Per Member</span>
                                        </td>
                                        <td data-field="action" class="kt-datatable__cell">
                                            <div class="btn-group">
                                                <button data-toggle="modal" data-target="#edit_health_plan_company"
                                                    type="button" class="btn btn-outline-brand btn-sm">
                                                    Edit</button>
                                                <button type="button"
                                                    class="btn btn-outline-brand dropdown-toggle dropdown-toggle-split btn-sm"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    x-placement="bottom-start"
                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                                    <a onclick="getstep('companyBenefitChart')" class="dropdown-item"
                                                        href="javascript:;">View Chart</a>
                                                    <a onclick="getstep('list_of_items')" class="dropdown-item" href="javascript:;" data-toggle="modal"
                                                        data-target="javascript:;">
                                                        Item</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="kt-datatable__pager kt-datatable--paging-loaded">
                                <ul class="kt-datatable__pager-nav">
                                    <li><a title="First"
                                            class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
                                            data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a>
                                    </li>
                                    <li><a title="Previous"
                                            class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
                                            data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                    <li style=""></li>
                                    <li style="display: none;"><input type="text" class="kt-pager-input form-control"
                                            title="Page number"></li>
                                    <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
                                            data-page="1" title="1">1</a></li>
                                    <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number"
                                            data-page="2" title="2">2</a></li>
                                    <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number"
                                            data-page="3" title="3">3</a></li>
                                    <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number"
                                            data-page="4" title="4">4</a></li>
                                    <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number"
                                            data-page="5" title="5">5</a></li>
                                    <li></li>
                                    <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
                                            data-page="2"><i class="flaticon2-next"></i></a></li>
                                    <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
                                            data-page="10"><i class="flaticon2-fast-next"></i></a></li>
                                </ul>
                                <div class="kt-datatable__pager-info">
                                    <div class="dropdown bootstrap-select kt-datatable__pager-size"
                                        style="width: 60px;">
                                        <select class="selectpicker kt-datatable__pager-size" title="Select page size"
                                            data-width="60px" data-selected="10" tabindex="-98">
                                            <option class="bs-title-option" value=""></option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-light"
                                            data-toggle="dropdown" role="button" title="Select page size">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">10</div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu " role="combobox">
                                            <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner show"></ul>
                                            </div>
                                        </div>
                                    </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable -->
                </div>
            </div>
            <div class="tab-pane" id="paymentOptions" role="tabpanel">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Payment Option</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="no_v">1</th>
                                <td class="no_v">Fees for service</td>
                                <td><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon-delete"></i></button></td>
                            </tr>
                            <tr>
                                <th class="no_v" scope="row">1</th>
                                <td class="no_v">Fees for service</td>
                                <td><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon-delete text-error"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="attachDoc" role="tabpanel">
                <div class="form-group row">
                    <div class="col">
                        <div class="kt-dropzone dropzone dz-clickable" action="inc/api/dropzone/upload.php"
                            id="m-dropzone-one">
                            <div class="kt-dropzone__msg dz-message needsclick">
                                <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <form action="" class="dropzone dz-clickable dropzone-file-area" id="my-awesome-dropzone"></form> -->
            </div>
            <div class="tab-pane" id="billingInfo" role="tabpanel">
                <div class="row mb-2">
                    <div class="col">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-outline-success dropdown-toggle btn-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(130px, 38px, 0px);">
                                <button onclick="get_content_billing('add_new_bill')" class="dropdown-item"
                                    type="button">Add New Bill</button>
                                <button onclick="get_content_billing('view_bill')" class="dropdown-item"
                                    type="button">List of Billings Made</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="default">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-warning">
                                <tr>
                                    <th>Date Time</th>
                                    <th>Bill Name</th>
                                    <th>Invoice No.</th>
                                    <th>Total Members Billed</th>
                                    <th>Total Amount Payable</th>
                                    <th>Total Amount Paid</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>@jhon</td>
                                    <td>Jhon</td>
                                    <td>Stone</td>
                                    <td>@jhon</td>
                                    <td>Jhon</td>
                                    <td>Stone</td>
                                    <td>@jhon</td>
                                    <td>@jhon</td>
                                    <td>@jhon</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="add_new_bill" class="d-none">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h5 class="kt-portlet__head-title">Add New Bill</h5>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form action="" class="kt-form kt-form--label-right">
                                <div class="row justify-content-center">
                                    <label for="bill_name" class="col-md-3 col-form-label text-right">Bill Name
                                        (Optional)</label>
                                    <div class="col-md-7">
                                        <input id="bill_name" class="form-control" type="text" name="bill_name">
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <label for="test_member_plan" class="col-md-3 col-form-label text-right">Test Member
                                        Plan</label>
                                    <div class="col-md-7">
                                        <input id="test_member_plan" class="form-control" type="text"
                                            name="test_member_plan" placeholder="Enter Bill Amount">
                                        <small class="form-text text-muted">Total Number of Members Under this Plan -
                                            0</small>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <label for="b_start_date" class="col-md-3 col-form-label text-right">Bill Start
                                        Date</label>
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <input class="form-control date" readonly type="text" id="bill_start_date"
                                                name="bill_start_date" id="bill_start_date" placeholder="Select Date">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <label for="b_end_date" class="col-md-3 col-form-label text-right">Bill End
                                        Date</label>
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <input class="form-control date" readonly type="text" id="bill_end_date"
                                                name="bill_end_date" id="bill_end_date" placeholder="Select Date">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="kt-portlet__foot">

                            <button class="btn btn-warning btn-sm float-right">Reset</button>
                            <button class="btn btn-success btn-sm float-right mr-1">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="paymentInfo" role="tabpanel">
                <div class="row mb-2">
                    <div class="col">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-outline-success dropdown-toggle btn-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(130px, 38px, 0px);">
                                <button onclick="get_content_payment('add_new_payment')" class="dropdown-item"
                                    type="button">Add New Payments</button>
                                <button onclick="get_content_payment('view_payment')" class="dropdown-item"
                                    type="button">List of Payment Made</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="default_payment">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Bill Name</th>
                                    <th>Number of Payments</th>
                                    <th>Total Amount Paid</th>
                                    <th>Total Amount Owing</th>
                                    <th>Total Amount Paid</th>
                                    <th>Payment Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>@jhon</td>
                                    <td>Jhon</td>
                                    <td>Stone</td>
                                    <td>@jhon</td>
                                    <td>Jhon</td>
                                    <td>Stone</td>
                                    <td>@jhon</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="add_new_payment" class="d-none">
                    <form action="">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h5 class="kt-portlet__head-title"> Add New Payment</h5>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="row">
                                    <label for="bill" class="col-md-3 col-form-label text-right">Bill</label>
                                    <div class="col-md-8">
                                        <select name="bill" id="bill" class="form-control">
                                            <option disabled selected>Select Bill for which Payment is Being Made
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="payment_method" class="col-md-3 col-form-label text-right">Payment
                                        Method</label>
                                    <div class="col-md-8">
                                        <select name="payment_method" id="payment_method" class="form-control">
                                            <option value="cash">Cash</option>
                                            <option value="bankers_draft">Bankers Draft</option>
                                            <option value="cheque">Cheque</option>
                                            <option value="pay_in_slip">Pay in Slip</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="payment_detail" class="col-md-3 col-form-label text-right">Payment
                                        Details</label>
                                    <div class="col-md-8">
                                        <input type="text" name="payment_detail" id="payment_detail"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="mobile_no" class="col-md-3 col-form-label text-right">Mobila No</label>
                                    <div class="col-md-4">
                                        <input type="tel" name="mobile_no" id="mobile_no" class="form-control"
                                            placeholder="Details about the payment will be sent to this Phone No."
                                            maxlength="10">
                                    </div>
                                    <label for="email" class="col-md-1 col-form-label text-right">Email</label>
                                    <div class="col-md-3">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Details about the payment will be sent to this Phone No.">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="mobile_no" class="col-md-3 col-form-label text-right">Amount
                                        Paid</label>
                                    <div class="col-md-6">
                                        <input type="number" name="mobile_no" id="mobile_no" class="form-control"
                                            placeholder="Details about the payment will be sent to this Phone No.">
                                    </div>
                                    <div class="col-md-2">
                                        <select name="currency" id="currency" class="form-control">
                                            <option value="GHC" selected>GHC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="payment_date" class="col-md-3 text-right col-form-label">Payment
                                        Date</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input class="form-control date" readonly type="text" name="payment_date"
                                                id="payment_date" placeholder="Select Date">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <button class="btn btn-success btn-sm float-right">Save Payment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="claimInfo" role="tabpanel">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th></th>
                                <th>Consult. Date</th>
                                <th>Facility Name</th>
                                <th>Member Name</th>
                                <th>HAS Member ID</th>
                                <th>Member Plan</th>
                                <th>Visit No.</th>
                                <th>Claimed Amt</th>
                                <th>Awarded Amt</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="no_v" scope="row">1</th>
                                <td onclick="getstep('claims_information_table_detailview')" class="no_v"><a
                                        class="kt-datatable__toggle-subtable" href="javascript:;" data-value="1"
                                        style="width: 30px;"><i class="fa fa-caret-right" style="width: 30px;"></i></a>
                                </td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v"><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon2-information"></i></button></td>
                                <td class="no_v"><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon-delete"></i></button></td>
                            </tr>
                            <tr>
                                <th class="no_v" scope="row">1</th>
                                <td class="no_v"><a class="kt-datatable__toggle-subtable" href="#" data-value="1"
                                        title="Load sub table"><i class="fa fa-caret-right"
                                            style="width: 30px;"></i></a></td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v">0.00</td>
                                <td class="no_v"><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon2-information"></i></button></td>
                                <td class="no_v"><button type="button" class="btn btn-clean btn-icon"><i
                                            class="flaticon-delete"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="tab-pane" id="exchangeRate" role="tabpanel">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter New Rate">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success" type="button">Save Rate</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Claim Name</th>
                                <th>Exchange Rate</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>ALNG pre employment</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Modals SECTION -->
<!-- attach new health plan -->
<div class="modal fade" id="attachNewHealthPlan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attach New Health Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <label for="healthPlan">Health Plan</label>
                    </div>
                    <div class="col-md-8">
                        <select id="healthPlan" class="form-control" name="healthPlan">
                            <option selected disabled>Select Plan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save Plan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- end attach new health plan -->

<!-- attach new payment -->
<div class="modal fade" id="attachNewPayment" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attach New Payment Option</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <label for="healthPlan">Payment Option</label>
                    </div>
                    <div class="col-md-8">
                        <select id="healthPlan" class="form-control" name="healthPlan">
                            <option selected disabled>Select Payment Option</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save Payment Option</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  end attach new payment  \ -->

<!-- plans and benefits -->
<div class="modal fade" id="edit_health_plan_company">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form name="form"
                    onsubmit="save_information('update_health_plan_company','refresh_button','','55');return false;"
                    class="form-horizontal" role="form" style="background-color:#FFF;">
                    <div class="form-body">
                        <div class="row">
                            <label class="col-md-2 control-label">Out Patient</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control"
                                    value="0" name="out_patient_limit1" id="out_patient_limit1"
                                    placeholder="Out-Patient Limit"></div>
                            <label class="col-md-2 control-label">In Patient</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control"
                                    value="0" name="in_patient_limit1" id="in_patient_limit1"
                                    placeholder="In-Patient Limit">
                            </div>
                        </div>
                        <div class="row mt-2">

                            <label class="col-md-2 control-label">Maternity</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="maternity_limit1" id="maternity_limit1" placeholder="Mat. Limit"></div>
                            <label class="col-md-2 control-label">Dental</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="dental_limit1" id="dental_limit1"></div>

                        </div>
                        <div class="row mt-2">

                            <label class="col-md-2 control-label">Optical</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="optical_limit1" id="optical_limit1"></div>
                            <label class="col-md-2 control-label">Therapy</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="therapy_limit1" id="therapy_limit1"></div>

                        </div>
                        <div class="row mt-2">

                            <label class="col-md-2 control-label">Psychology</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="psychology_limit1" id="psychology_limit1"></div>
                            <label class="col-md-2 control-label">Hearing</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="ent_limit1" id="ent_limit1"></div>

                        </div>
                        <div class="row mt-2">
                            <label class="col-md-2 control-label">Physio</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="physio_limit1" id="physio_limit1"></div>

                            <label class="col-md-2 control-label">Drug</label>
                            <div class="col-md-4"><input style="height: 30px;" type="text" class="form-control" value=""
                                    name="drug_limit1" id="drug_limit1"></div>
                        </div>
                        <div class="row mt-2">
                            <label class="col-md-4 control-label">Amount Coverage</label>
                            <div class="col-md-8">
                                <select name="amount_coverage" id="amount_coverage" class="form-control">
                                    <option selected="" value="Per Member">Per Member</option>
                                    <option value="All Members">All Members</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end plans and benefits -->

<!-- End Modals -->

<script type="text/javascript">
    $('#corporateMembersTable').DataTable({
        "pagingType": "full_numbers",
        "searching": false,
        "info": false,
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    });

    $("#m-dropzone-one").dropzone({
        url: "/file/post"
    });

    $(".date").datepicker({
        format: "dd MM yyyy",
        autoclose: true,
        orientation: "bottom auto"
    });
</script>
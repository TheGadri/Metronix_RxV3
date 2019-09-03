<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon-list-1"></i>
            </span>
            <h3 class="kt-portlet__head-title">
               Benefit Groups
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a onclick="getstep('bulk_members_deactivate')" class="dropdown-item" href="javascript:;"><i class="flaticon2-add"></i> Add New Benefit Group</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                                <div class="input-group-append">
                                    <button class="btn btn-success btn-icon btn-icon-md" type="button"><i class="la la-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 kt-margin-b-20-tablet-and-mobile">
                            <div class="">
                                <div class="col-md-5">
                                    <select class="form-control" id="search_by" name="search_by">
                                        <option disabled="" selected="">Search By</option>
                                        <option value="benefit_group_name">Benefit Group Name</option>
                                        <option value="rx_code">Rx Code</option>
                                        <option value="visit_type">Visit Type</option>
                                        <option value="member_only">Member Only</option>
                                        <option value="member_one">Member 1</option>
                                        <option value="member_two">Member 2</option>
                                        <option value="member_three">Member 3</option>
                                        <option value="member_four">Member 4+</option>
                                        <option value="parent_group">Parent Group</option>
                                        <option value="status">Status</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Search Form -->
        <div class="kt-portlet__body kt-portlet__body--fit">
            <!--begin: Datatable -->
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style="">
                <table class="table table-hover text-center">
                    <thead class="kt-datatable__head table-warning">
                        <tr class="kt-datatable__row p-5" style="left: 0px;">
                            <th data-field="benefit_group_name" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Benefit Group Name</span></th>
                            <th data-field="rx_code" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Rx Code</span></th>
                            <th data-field="visit_type" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Visit Type</span></th>
                            <th data-field="member_only" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Member Only</span></th>
                            <th data-field="member_of_one" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Member of 1</span></th>
                            <th data-field="member_of_two" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Member of 2</span>
                            </th>
                            <th data-field="member_of_three" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Member of 3</span>
                            </th>
                            <th data-field="member_of_four" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Member of 4+</span>
                            </th>
                            <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Status</span>
                            </th>
                            <th data-field="parent_group" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Parent Group</span>
                            </th>
                            <th data-field="actions" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Actions</span></th>

                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body">
                     <!--   <tr onclick="getstep('userMemberCLicked')" data-row="0" class="kt-datatable__row" style="left: 0px;">
                            <td data-field="benefit_group_name" class="kt-datatable__cell no_v"><span>GP CONSULTATIONS (GP CONSULTATIONS)</span>
                            </td>
                            <td data-field="rx_code" class="kt-datatable__cell no_v"><span>RXBGS0000001OPL</span>
                            </td>
                            <td data-field="visit_type" class="kt-datatable__cell no_v"><span>OUT-PATIENT</span>
                            </td>
                            <td data-field="member_only" class="kt-datatable__cell no_v"><span>--</span></td>
                            <td data-field="member_of_one" class="kt-datatable__cell no_v"><span>--</span></td>
                            <td data-field="member_of_two" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_three" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_four" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span>
                                    <span class="kt-font-bold kt-font-success">COVERED</span></span>
                            </td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-exclamation-circle"></i> </a>
                                </span>
                            </td>
                        </tr> -->
                       <tr data-row="1" class="kt-datatable__row" style="left: 0px;">
                            <td data-field="benefit_group_name" class="kt-datatable__cell no_v"><span>GP CONSULTATIONS (GP CONSULTATIONS)</span>
                            </td>
                            <td data-field="rx_code" class="kt-datatable__cell no_v"><span>RXBGS0000001OPL</span>
                            </td>
                            <td data-field="visit_type" class="kt-datatable__cell no_v"><span>OUT-PATIENT</span>
                            </td>
                            <td data-field="member_only" class="kt-datatable__cell no_v"><span>--</span></td>
                            <td data-field="member_of_one" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_two" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_three" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_four" class="kt-datatable__cell no_v"><span style="width: 100px;">--</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span>
                                    <span class="kt-font-bold text-success">COVERED</span></span>
                            </td>
                            <td data-field="parent_group" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td class="table-secondary text-center">
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button data-toggle="modal" data-target="#edit_benefit_chart" type="button" class="btn btn-sm btn-outline-brand">Edit</button>
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle dropdown-toggle-split btn-sm btn-outline-brand">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                    <a onclick="getstep('company_benefitChart_addbenefit')" class="dropdown-item" href="javascript:;"><i class="flaticon-edit-1"></i>Add Benefit</a>
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#attachNewHealthPlan"><i class="flaticon-delete"></i>Delete</a>
                                </div>

                            </div>
                        </td>
                        </tr>
                         <tr data-row="2" class="kt-datatable__row" style="left: 0px;">
                            <td data-field="benefit_group_name" class="kt-datatable__cell no_v"><span>MATERNITY (MATERNITY)</span>
                            </td>
                            <td data-field="rx_code" class="kt-datatable__cel no_vl"><span>RXBGS0000005IPL</span>
                            </td>
                            <td data-field="visit_type" class="kt-datatable__cell no_v"><span>OUT-PATIENT</span>
                            </td>
                            <td data-field="member_only" class="kt-datatable__cell no_v"><span>--</span></td>
                            <td data-field="member_of_one" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_two" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_of_three" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td data-field="member_four" class="kt-datatable__cell no_v"><span style="width: 100px;">--</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span>
                                    <span class="kt-font-bold text-success">COVERED</span></span>
                            </td>
                            <td data-field="parent_group" class="kt-datatable__cell no_v"><span>--</span>
                            </td>
                            <td class="table-secondary text-center">
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button data-toggle="modal" data-target="#edit_benefit_chart" type="button" class="btn btn-outline-brand btn-sm">Edit</button>
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle dropdown-toggle-split btn-sm btn-outline-brand">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                    <a onclick="getstep('company_benefitChart_addbenefit')" class="dropdown-item" href="javascript:;"><i class="flaticon-edit-1"></i>Add Benefit</a>
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#attachNewHealthPlan"><i class="flaticon-delete"></i>Delete</a>
                                </div>

                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="kt-datatable__pager kt-datatable--paging-loaded">
                    <ul class="kt-datatable__pager-nav">
                        <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                        <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                        <li style=""></li>
                        <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li>
                        <li></li>
                        <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
                        <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="10"><i class="flaticon2-fast-next"></i></a></li>
                    </ul>
                    <div class="kt-datatable__pager-info">
                        <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98">
                                <option class="bs-title-option" value=""></option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Select page size">
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
</div>

<!-- Modal Edit Company chart  -->
<div class="modal" id="edit_benefit_chart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Benefit Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="benefit_group_name" class="col-md-4 col-form-label">Benefit Group Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Some text goes here" readonly="" id="benefit_group_name" name="benefit_group_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="benefit_group_code" class="col-md-4 col-form-label">Benefit Group Code</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="benefit_group_code" name="benefit_group_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="status" class="col-md-4 col-form-label">Status</label>
                            <div class="col-md-8">
                                <select name="status" id="status" class="form-control">
                                    <option value="#" disabled="" selected="">Select Option</option>
                                    <option value="covered">Covered</option>
                                    <option value="not_covered">Not Covered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="parent_group_name" class="col-md-4 col-form-label">Parent Group Name</label>
                            <div class="col-md-8">
                                <select name="parent_group_name" id="parent_group_name" class="form-control">
                                    <option value="#" disabled="" selected="">Select Option</option>
                                    <option value="covered">Covered</option>
                                    <option value="not_covered">Not Covered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="status_display">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Visit Type</label>
                                <div class="col-md-8">
                                    <select name="visit_type" id="visit_type" class="form-control">
                                        <option value="#" disabled="" selected="">Select Visit Type</option>
                                        <option value="out_patient">Out Patient</option>
                                        <option value="in_patient">In Patient</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="amount_coverage" class="col-md-4 col-form-label">Amount Coverage</label>
                                <div class="col-md-8">
                                    <select name="amount_coverage" id="amount_coverage" class="form-control">
                                        <option value="#" disabled="" selected="">Select Option</option>
                                        <option value="per_member">Amount Per Member</option>
                                        <option value="all_members">Amount for All Members</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Member Only</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="number" placeholder="Limit Amount" class="form-control">
                                        <div class="input-group-append">
                                            <select name="amount_coverage" id="amount_coverage" class="form-control">
                                                <option value="#" disabled="" selected="">Percentage for Notificaiton</option>
                                                <option value="per_member">No Notificaiton</option>
                                                <option value="all_members">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Member of 1</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="number" placeholder="Limit Amount" class="form-control">
                                        <div class="input-group-append">
                                            <select name="amount_coverage" id="amount_coverage" class="form-control">
                                                <option value="#" disabled="" selected="">Percentage for Notificaiton</option>
                                                <option value="per_member">No Notificaiton</option>
                                                <option value="all_members">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Member of 2</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="number" placeholder="Limit Amount" class="form-control">
                                        <div class="input-group-append">
                                            <select name="amount_coverage" id="amount_coverage" class="form-control">
                                                <option value="#" disabled="" selected="">Percentage for Notificaiton</option>
                                                <option value="per_member">No Notificaiton</option>
                                                <option value="all_members">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Member of 3</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="number" placeholder="Limit Amount" class="form-control">
                                        <div class="input-group-append">
                                            <select name="amount_coverage" id="amount_coverage" class="form-control">
                                                <option value="#" disabled="" selected="">Percentage for Notificaiton</option>
                                                <option value="per_member">No Notificaiton</option>
                                                <option value="all_members">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="visit_type" class="col-md-4 col-form-label">Member of 4+</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="number" placeholder="Limit Amount" class="form-control">
                                        <div class="input-group-append">
                                            <select name="amount_coverage" id="amount_coverage" class="form-control">
                                                <option value="#" disabled="" selected="">Percentage for Notificaiton</option>
                                                <option value="per_member">No Notificaiton</option>
                                                <option value="all_members">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer kt-align-right">
                <button class="btn btn-sm btn-success">Save</button>
                <button class="btn btn-sm btn-danger">Close</button>
            </div>
        </div>
    </div>

</div>
<!-- Modal Edit Company chart -->
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                List Of Health Plans
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
                    <a class="dropdown-item" data-toggle="modal" data-target="#addNewPlan" href="javascript:;"><i
                            class="flaticon-add-circular-button"></i> Add New Health
                        Plans</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <!-- <div class="table-responsive">
            <table class="table" id="listHealthPlan">
                <thead class="table-warning">
                    <tr class="text-center">
                        <th colspan="2">Health Plan</th>
                        <th colspan="9">Member Only</th>
                        <th>Amount Coverage</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>#</th>
                        <th>Out-Patient</th>
                        <th>In-Patient Limit</th>
                        <th>Maternity Limit</th>
                        <th>Dental Limit</th>
                        <th>Optical Limit</th>
                        <th>Drug Limit</th>
                        <th>Psychology Limit</th>
                        <th>Hearing Limit</th>
                        <th>Physiotherapy Limit</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="getstep('companyBenefitChart')">
                        <th scope="row">1</th>
                        <td>ALNG pre employment</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>Per Member</td>
                        <td>
                            <div class="btn-group btn-group">
                                <button type="button" class="btn btn-brand btn-sm">Attach Benefit
                                </button><button type="button" class="btn btn-brand btn-sm">Edit</button>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALNG pre employment</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>Per Member</td>
                        <td>
                            <div class="btn-group btn-group">
                                <button type="button" class="btn btn-brand btn-sm">Attach Benefit
                                </button><button type="button" class="btn btn-brand btn-sm">Edit</button>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div> -->
        <div class="kt-portlet__body kt-portlet__body--fit">
            <!--begin: Datatable -->
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                style="">
                <table class="table table-hover table-bordered">
                    <thead class="kt-datatable__head table-warning">
                        <tr class="kt-datatable__row text-center" style="left: 0px;">
                            <th colspan="2" class="kt-datatable__cell kt-datatable__cell--sort"><span>Health
                                    Plan</span></th>
                            <th colspan="8" class="kt-datatable__cell kt-datatable__cell--sort"><span>Member
                                    Only</span></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"><span></span></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"><span>Action</span></th>
                        </tr>
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <th data-field="id"><span>#</span></th>
                            <th data-field="plan" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>#</span></th>
                            <th data-field="out_patient" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Out Patient Limit</span></th>
                            <th data-field="in_patient_limit" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>In Patient
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
                                <span>Therapy Limit</span>
                            </th>
                            <th data-field="psychology" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Psycholgy Limit</span>
                            </th>
                            <th data-field="health" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Hearing Limit</span>
                            </th>
                            <th data-field="physiotherapy" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>#</span>
                            </th>

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

                            <td onclick="getstep('companyBenefitChart')" data-field="amount_coverage"
                                class="kt-datatable__cell no_v"><span>
                                    Per Member</span>
                            </td>
                            <td data-field="action" class="kt-datatable__cell">
                                <div class="btn-group">
                                    <button data-toggle="modal" data-target="#edit_health_plan" type="button"
                                        class="btn btn-outline-brand btn-sm">
                                        Edit</button>
                                    <button type="button"
                                        class="btn btn-outline-brand dropdown-toggle dropdown-toggle-split btn-sm"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                        <a data-toggle="modal" data-target="#attach_template" class="dropdown-item"
                                            href="javascript:;">Attach Benefit</a>
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
                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                role="button" title="Select page size">
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

<!-- begin: Modal -->
<div class="modal fade" id="addNewPlan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Health Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <label for="healthPlan" class="col-md-2 col-form-label">Health Plan:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="healthPlan" id="healthPlan">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label for="healthPlanId" class="col-md-2 col-form-label">Health Plan ID :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="healthPlanId" id="healthPlanId">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label for="membersOnly" class="col-md-2 col-form-label">Member Only :</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="membersOnly1" id="membersOnly">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="membersOnly2" id="membersOnly">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="membersOnly3" id="membersOnly">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label for="member1" class="col-md-2 col-form-label">Member of 1 :</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member1" id="member1">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member1" id="member1">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member1" id="member1">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label for="member2" class="col-md-2 col-form-label">Member of 2 :</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member2" id="member2">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member2" id="member2">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member2" id="member2">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label for="member3" class="col-md-2 col-form-label">Member of 3:</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member3" id="member3">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member3" id="member3">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="member3" id="member3">
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal -->
<!-- begin: attach benefit Modal -->
<div class="modal fade" id="attach_template" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xlg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ATTACH TEMPLATE TO ALNG PRE-EMPLOYEMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive" style="max-height:600;">
                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
                        <table class="table" id="companyBenefitChart">
                            <colgroup>
                                <col>
                                </col>
                                <col>
                                </col>
                                <col>
                                </col>
                                <col class="table-success" span="2">
                                </col>
                                <col class="table-danger" span="2">
                                </col>
                                <col class="table-success" span="2">
                                </col>
                                <col class="table-danger" span="2">
                                </col>
                                <col class="table-success" span="2">
                                </col>
                            </colgroup>
                            <thead class="table-warning">
                                <tr>

                                    <th></th>
                                    <th>Angola LNG</th>
                                    <th>STATUS</th>
                                    <th colspan="2">MEMBER ONLY</th>
                                    <th colspan="2">MEMBER OF 1</th>
                                    <th colspan="2">MEMBER OF 2</th>
                                    <th colspan="2">MEMBER OF 3</th>
                                    <th colspan="2">MEMBER OF 4+</th>
                                </tr>
                                <tr>

                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>AMT</th>
                                    <th>QTY</th>
                                    <th>AMT</th>
                                    <th>QTY</th>
                                    <th>AMT</th>
                                    <th>QTY</th>
                                    <th>AMT</th>
                                    <th>QTY</th>
                                    <th>AMT</th>
                                    <th>QTY</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-secondary"><input type="checkbox"></td>
                                    <td class="table-secondary kt-font-bold">GP CONSULTATIONS</td>
                                    <td class="table-secondary kt-font-bold">Covered (Per Member)</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>

                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>AMD239023: GP CONSULTATIONS</td>
                                    <td>Covered (Per Member)</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>
                                    <td>0.00</td>
                                    <td>-</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Add Selected Benefit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end: attach benefi Modal -->
<!-- begin: edit Modal -->
<div class="modal fade" id="edit_health_plan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Health Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="healthPlan" class="col-md-4 col-form-lable">Health Plan :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="healthPlan" name="healthPlan">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="healthPlan_id" class="col-md-4 col-form-lable">Health Plan ID / Code :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="healthPlan_id" name="healthPlan_id">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="in_patient" class="col-md-4 col-form-lable">In Patient :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="in_patient" name="in_patient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="out_patient" class="col-md-4 col-form-lable">Out Patient :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="out_patient" name="out_patient">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="maternity" class="col-md-4 col-form-lable">Maternity :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="maternity" name="maternity">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="dental" class="col-md-4 col-form-lable">Dental :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="dental" name="dental">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="optical" class="col-md-4 col-form-lable">Optical :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="optical" name="optical">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="physio" class="col-md-4 col-form-lable">Physiotherapy :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="physio" name="physio">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="psychology" class="col-md-4 col-form-lable">Psycholgy :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="psychology" name="psychology">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="hearing" class="col-md-4 col-form-lable">Hearing :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="hearing" name="hearing">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="amount_coverage" class="col-md-4 col-form-lable">Amount Coverage :</label>
                            <div class="col-md-8">
                                <select name="amount_coverage" id="amount_coverage" class="form-control">
                                    <option value="">Per Member</option>
                                    <option value="">All Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="row">
                            <label for="hearing" class="col-md-4 col-form-lable">Hearing :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="hearing" name="hearing">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end: edit Modal -->

<script>
    $("#listHealthPlan").DataTable({});
</script>
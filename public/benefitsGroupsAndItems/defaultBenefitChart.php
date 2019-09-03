<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
               Default Benefit Chart
            </h3>
        </div>
        <!-- <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Menu</button>
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
        </div> -->
    </div>
    <div class="kt-portlet__body">
        <div class="table-responsive">
            <table class="table" id="companyBenefitChart">
                <colgroup>
                    <col>
                    
                    <col>
                    
                    <col class="table-success" span="2">
                    
                    <col class="table-danger" span="2">
                    
                    <col class="table-success" span="2">
                    
                    <col class="table-danger" span="2">
                    
                    <col class="table-success" span="2">
                    
                </colgroup>
                <thead class="table-warning">
                    <tr>
                        <th>GROUP/BENEFIT</th>
                        <th>STATUS</th>
                        <th colspan="2">MEMBER ONLY</th>
                        <th colspan="2">MEMBER OF 1</th>
                        <th colspan="2">MEMBER OF 2</th>
                        <th colspan="2">MEMBER OF 3</th>
                        <th colspan="2">MEMBER OF 4+</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <tr>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                        <td class="table-secondary text-center">
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button onclick="getstep('company_benefitChart_addbenefit')" type="button" class="btn btn-sm btn-outline-brand">Add Benefit</button>
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle dropdown-toggle-split btn-sm btn-outline-brand">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                    <a data-toggle="modal" data-target="#edit_benefit_chart" class="dropdown-item" href="javascript:;"><i class="flaticon-edit-1"></i>Edit</a>
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#attachNewHealthPlan"><i class="flaticon-delete"></i>Delete</a>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="">Somthing under GP</td>
                        <td class="">Covered (Per Member)</td>
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
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button type="button" class="btn btn-sm btn-outline-brand">Edit</button>
                                <button type="button" class="btn btn-sm btn-outline-brand">Delete</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit Company chart  -->
<div class="modal" id="edit_benefit_chart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Plan Benefit Group</h5>
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
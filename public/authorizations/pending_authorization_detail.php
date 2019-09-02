<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <!-- <h5 class="kt-portlet__head-title text-table-light"><i class="la la-file-text"></i> Authorization Done</h5> -->
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-actions">
                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
                    <i class="la la-print"></i> Print
                </a>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="table-responsive" style="max-height:500px;">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                    style="">
                    <table class="table">
                        <tbody class="kt-datatable__body bg-green">
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <button class="btn btn-sm btn-success">Done Authorizing <i
                                            class="la la-check-circle-o"></i></button>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">
                                        <button class="btn btn-sm btn-warning text-white">Refer to Medical <i
                                                class="la la-share"></i>
                                        </button>
                                        <span class="text-blue kt-font-bold">&nbsp;<i class="fa fa-user-md"></i>
                                            Refferred</span>
                                    </span>
                                </td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Total Requested :</span>
                                    <span>&nbsp;AOA 1,200,000.00</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">AOA Authorized:</span>
                                    <span>&nbsp;AOA 1,200,000.00</span>
                                </td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <button class="btn btn-sm btn-light">Plan: UNITEL Healthcare Management Benefit
                                        Plan | View Member Benefits</button>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span
                                        class="kt-font-bold"><button data-toggle="modal"
                                            data-target="#patient_medical_history" class="btn btn-sm btn-light">View
                                            Medical History
                                            <i class="la la-file-text"></i> </button></span></td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Name: </span>
                                    <span>2000 - 3000(30yrs)</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Authorization No: </span>
                                    <span>563-28675-1565434148</span>
                                </td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Employer: </span>
                                    <span>&nbsp;UNITEL.S.A</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Service Provider: </span>
                                    <span>&nbsp;LMC Ingombota Luanda</span>
                                </td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Monthly Visits to Service Provider: </span>
                                    <span>&nbsp;0</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v">
                                    <span class="kt-font-bold">Visit Type: </span>
                                    <span>&nbsp;MATERNITY</span>
                                </td>
                            </tr>
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px; ">
                                <td colspan="2" data-field="consult_date" class="kt-datatable__cell no_v">
                                    <button class="btn btn-sm btn-success">Approve All Items <i
                                            class="la la-check-circle-o"></i> </button>
                                    <button class="btn btn-sm btn-danger">Reject All Items
                                        <i class="la la-times-circle-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--end: Datatable -->
            </div>
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                style="">
                <table class="table">
                    <colgroup>
                        <col>
                        </col>
                        <col>
                        </col>
                        <col>
                        </col>
                        <col>
                        </col>
                        <col>
                        </col>
                        <col>
                        </col>
                        <col span="3" class="light-red">
                        </col>
                        <col span="3" class="light-blue">
                        </col>
                    </colgroup>
                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row">
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort text-center" colspan="3">Requested
                            </th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort text-center" colspan="3">Authorized
                            </th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Code</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"></th>
                        </tr>
                        <tr>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Item</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Type</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Dose</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Unit</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Freq</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Days</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Qty</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Price</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Total</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Qty</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Price</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Total</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">#</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Decision</th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort">Reason</th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body">
                        <tr class="kt-datatable__row">
                            <td class="kt-datatable__cell"><span>Normal Delivery</span></td>
                            <td class="kt-datatable__cell"><span>Maternity</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>No Decision</option>
                                    <option value="">Approve</option>
                                    <option value="">Reject</option>
                                    <option value="">Dispute</option>
                                </select>
                            </td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>Select Reason If (Any)</option>
                                    <option value="">Mismatch: Diagnosis Lab</option>
                                    <option value="">Mismatch: Disease Diagnosis</option>
                                    <option value="">Mismatch: Disease Drug</option>
                                    <option value="">No Disease</option>
                                    <option value="">No Reason</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="kt-datatable__row">
                            <td class="kt-datatable__cell"><span>Normal Delivery</span></td>
                            <td class="kt-datatable__cell"><span>Maternity</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>No Decision</option>
                                    <option value="">Approve</option>
                                    <option value="">Reject</option>
                                    <option value="">Dispute</option>
                                </select>
                            </td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>Select Reason If (Any)</option>
                                    <option value="">Mismatch: Diagnosis Lab</option>
                                    <option value="">Mismatch: Disease Diagnosis</option>
                                    <option value="">Mismatch: Disease Drug</option>
                                    <option value="">No Disease</option>
                                    <option value="">No Reason</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="kt-datatable__row">
                            <td class="kt-datatable__cell"><span>Normal Delivery</span></td>
                            <td class="kt-datatable__cell"><span>Maternity</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><input type="number" class="form-control form-control-sm">
                            </td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>No Decision</option>
                                    <option value="">Approve</option>
                                    <option value="">Reject</option>
                                    <option value="">Dispute</option>
                                </select>
                            </td>
                            <td class="kt-datatable__cell">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option selected disabled>Select Reason If (Any)</option>
                                    <option value="">Mismatch: Diagnosis Lab</option>
                                    <option value="">Mismatch: Disease Diagnosis</option>
                                    <option value="">Mismatch: Disease Drug</option>
                                    <option value="">No Disease</option>
                                    <option value="">No Reason</option>
                                </select>
                            </td>
                        </tr>
                        <!-- <tr class="kt-datatable__row">
                            <td class="kt-datatable__cell"><span>Normal Delivery</span></td>
                            <td class="kt-datatable__cell"><span>Maternity</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span class="kt-font-bold text-error">Decline</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                        </tr>
                        <tr class="kt-datatable__row">
                            <td class="kt-datatable__cell"><span>Normal Delivery</span></td>
                            <td class="kt-datatable__cell"><span>Maternity</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span>1,200,000.00</span></td>
                            <td class="kt-datatable__cell"><span></span></td>
                            <td class="kt-datatable__cell"><span class="kt-font-bold kt-font-success">Approved</span>
                            </td>
                            <td class="kt-datatable__cell"><span></span></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Views -->
<div class="modal fade" id="patient_medical_history">
    <div class="modal-dialog modal-xlg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PATIENT MEDICAL HISTORY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h5>Name: <span>John Doe</span></h5>
                    </div>
                </div>
                <div class="table-responsive" style="max-height:600px;">
                    <table class="table table-hover text-center">
                        <thead class="kt-datatable__head table-warning">
                            <tr class="kt-datatable__row">
                                <th class="kt-datatable__cell kt-datatable__cell--sort">#</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">SN</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Date of Visit</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Service Provider</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Claim Number</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Attending Officer</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Visit Type</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Diagnosis</th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort">Cost of Visit</th>
                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr onclick="getstep('medical_history_detail')" class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                            <tr class="kt-datatable__row">
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>12/10/2010 11:00 am</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>LMC000000</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span></span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>Maternity</span>
                                </td>
                                <td class="kt-datatable__cell no_v kt-datatable__cell--sort">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae eligendi
                                        autem</span>
                                </td>
                                <td class="kt-datatable__cell no_v">
                                    <span>GHS 000.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- End Views -->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <div class="kt-portlet__head-title">
                Reconcile Monthly Data
                <small>Internet Required</small>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <label for="" class="col-md-4 col-form-label text-right">Month</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control date_month" id="kt_datepicker_1" readonly=""
                            placeholder="Select date">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <label for="" class="col-md-4 col-form-label text-right">Year</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control date_year" id="kt_datepicker_1" readonly=""
                            placeholder="Select date">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success">Reconcile Data</button>
            </div>
        </div>

    </div>
</div>


<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Service Provider Information
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
                <!-- <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
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
                </div> -->
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="providerId" class="col-4 col-form-label font-weight-bold">Name :</label>

                            <label class="col-8 col-form-label">AFRISUADE</label>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="outNetwork" class="col-4 col-form-label font-weight-bold">Master Facility
                                :</label>
                            <label class="col-8 col-form-label" name="outNetwork">YES</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class=" row">
                            <label for="facilityName" class="col-4 col-form-label font-weight-bold">Provider ID
                                :</label>

                            <label class="col-8 col-form-label">Z233sKLP</label>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="facilityType" class="col-4 col-form-label font-weight-bold">Region :</label>

                            <label class="col-8 col-form-label">Western Region</label>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="facilityTelephone" class="col-4 col-form-label font-weight-bold">Facility
                                Type</label>
                            <label class="col-8 col-form-label">Clinic</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="facilityType" class="col-4 col-form-label font-weight-bold">Out of Network
                                :</label>
                            <div class="col-8">
                                <select id="outOfNetwork" class="form-control" name="outOfNetwork">
                                    <option selected disabled>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" row">
                            <label for="facilityName" class="col-4 col-form-label font-weight-bold">AP Code
                                :</label>
                            <div class="col-8">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__foot">
        <div class="row">
            <div class="col kt-align-right">
                <button type="submit" class="btn btn-success">Save Details</button>
            </div>
        </div>
    </div>
</div>

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Claims and Payments
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm">
                    Actions</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a data-toggle="modal" data-target="#email_correspondence" class="dropdown-item" href="javascript:;"><i class="flaticon2-menu-2"></i> Email Correspondence</a>
                    <a data-toggle="modal" data-target="#task_activities" class="dropdown-item" href="javascript:;" ><i class="flaticon2-menu-2"></i>Task Activities</a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#log_activities"><i
                            class="flaticon2-menu-2"></i>Log Activities</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#attachDocument">Attach Documents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#paymentOption">Payment Options</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#planOption">Plan Options</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#itemTarrif">Item Tarrif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#drgTarrif">DRG Tarrif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#claimInfo">Claim Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#paymentInfo">Payment Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#serviceSettting">Service Provider Settings</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="attachDocument" role="tabpanel">
                <div class="kt-section" style="height:300px; overflow-y:auto;">
                    <div class="kt-section__content">
                        <div class="kt-dropzone dropzone dz-clickable" action="inc/api/dropzone/upload.php"
                            id="m-dropzone-one">
                            <div class="kt-dropzone__msg dz-message needsclick">
                                <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="paymentOption" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="row">
                                            <label for="search">Search</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="flaticon-search"></i></span></div>
                                                <input type="text" class="form-control" name="search" id="search">
                                            </div>
                                            <div class="kt-radio-inline mt-2">
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Begins With
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Contains
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="max-height:400px; overflow-y:auto;">
                                <div class="table-responsive">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <!--begin: Datatable -->
                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                            id="local_data">
                                            <table class="table table-hover text-center">
                                                <thead class="kt-datatable__head table-warning">
                                                    <tr class="kt-datatable__row" style="left: 0px;">
                                                        <th data-field="code"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Code</span></th>
                                                        <th data-field="payment_option"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Payment Option</span></th>
                                                        <th data-field="actions"
                                                            class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                                style="width: 100px;">Actions</span></th>

                                                    </tr>
                                                </thead>
                                                <tbody class="kt-datatable__body">
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end: Datatable -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="kt-portlet">
                            <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <!--begin: Datatable -->
                                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                        id="local_data">
                                        <table class="table table-hover text-center">
                                            <thead class="kt-datatable__head table-warning">
                                                <tr class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="code"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Payment Option</span></th>
                                                    <th data-field="payment_option"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Status</span></th>
                                                    <th data-field="actions"
                                                        class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                            style="width: 100px;">Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="kt-datatable__body">
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="code" class="kt-datatable__cell no_v" colspan="3">
                                                        <span>No Data available</span>
                                                    </th>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="planOption" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="row">
                                            <label for="search">Search</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="flaticon-search"></i></span></div>
                                                <input type="text" class="form-control" name="search" id="search">
                                            </div>
                                            <div class="kt-radio-inline mt-2">
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Begins With
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Contains
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="max-height:400px; overflow-y:auto;">
                                <div class="table-responsive">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <!--begin: Datatable -->
                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                            id="local_data">
                                            <table class="table table-hover text-center">
                                                <thead class="kt-datatable__head table-warning">
                                                    <tr class="kt-datatable__row" style="left: 0px;">
                                                        <th data-field="code"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Code</span></th>
                                                        <th data-field="payment_option"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Plan Name</span></th>
                                                        <th data-field="actions"
                                                            class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                                style="width: 100px;">Actions</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="kt-datatable__body">
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end: Datatable -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="kt-portlet">
                            <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <!--begin: Datatable -->
                                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                        id="local_data">
                                        <table class="table table-hover text-center">
                                            <thead class="kt-datatable__head table-warning">
                                                <tr class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="code"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Plan Option</span></th>
                                                    <th data-field="payment_option"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Status</span></th>
                                                    <th data-field="actions"
                                                        class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                            style="width: 100px;">Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="kt-datatable__body">
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="code" class="kt-datatable__cell no_v">
                                                        <span>Cheque</span>
                                                    </td>
                                                    <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                        <select id="my-select" class="custom-select" name="">
                                                            <option>Active</option>
                                                            <option>In active</option>
                                                        </select>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="code" class="kt-datatable__cell no_v" colspan="3">
                                                        <span>No Plan Options Found. Search Items to Add to Plan
                                                            Options.</span>
                                                    </th>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="itemTarrif" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="row">
                                            <label for="search">Search</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="flaticon-search"></i></span></div>
                                                <input type="text" class="form-control" name="search" id="search">
                                            </div>
                                            <div class="kt-radio-inline mt-2">
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Begins With
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Contains
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="max-height:400px; overflow-y:auto;">
                                <div class="table-responsive">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <!--begin: Datatable -->
                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                            id="local_data">
                                            <table class="table table-hover text-center">
                                                <thead class="kt-datatable__head table-warning">
                                                    <tr class="kt-datatable__row" style="left: 0px;">
                                                        <th data-field="code"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Code</span></th>
                                                        <th data-field="item_name"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Item Name</span></th>
                                                        <th data-field="actions"
                                                            class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                                style="width: 100px;">Actions</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="kt-datatable__body">
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="payment_option" class="kt-datatable__cell no_v">
                                                            <span>TOPUP</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end: Datatable -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="kt-portlet">
                            <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <!--begin: Datatable -->
                                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                        id="local_data">
                                        <table class="table table-hover text-center">
                                            <thead class="kt-datatable__head table-warning">
                                                <tr class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="item"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Item</span></th>
                                                    <th data-field="unit_price"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Unit Price</span></th>
                                                    <th data-field="effective_date"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Effective Start Date</span></th>
                                                    <th data-field="actions"
                                                        class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                            style="width: 100px;">Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="kt-datatable__body">
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="item" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="unit_price" class="kt-datatable__cell no_v">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </td>
                                                    <td data-field="effective_date" class="kt-datatable__cell no_v">
                                                        <div class="input-group">
                                                            <input class="form-control form-control-sm date" readonly
                                                                type="text" id="form_datetime" name="cancellationDate"
                                                                id="cancellationDate" placeholder="Select Date">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="drgTarrif" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="row">
                                            <label for="search">Search</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="flaticon-search"></i></span></div>
                                                <input type="text" class="form-control" name="search" id="search">
                                                <div class="input-group-append">
                                                    <select id="my-select" class="form-control" name="">
                                                        <option value="icd_1">ICD 10</option>
                                                        <option value="icd_1">ICD 2</option>
                                                        <option value="icd_1">DRG List</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="kt-radio-inline mt-2">
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Begins With
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="searchType"> Contains
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="max-height:400px; overflow-y:auto;">
                                <div class="table-responsive">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <!--begin: Datatable -->
                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                            id="local_data">
                                            <table class="table table-hover text-center">
                                                <thead class="kt-datatable__head table-warning">
                                                    <tr class="kt-datatable__row" style="left: 0px;">
                                                        <th data-field="code"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Code</span></th>
                                                        <th data-field="disease"
                                                            class="kt-datatable__cell kt-datatable__cell--sort">
                                                            <span>Disease</span></th>
                                                        <th data-field="actions"
                                                            class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                                style="width: 100px;">Actions</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="kt-datatable__body">
                                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                        <td data-field="code" class="kt-datatable__cell no_v">
                                                            <span>TUP</span>
                                                        </td>
                                                        <td data-field="disease" class="kt-datatable__cell no_v">
                                                            <span>Malaria</span>
                                                        </td>
                                                        <td data-field="actions" class="kt-datatable__cell"><span>
                                                                <a title="add item"
                                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                    <i class="flaticon-plus"></i> </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end: Datatable -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="kt-portlet">
                            <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <!--begin: Datatable -->
                                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                        id="local_data">
                                        <table class="table table-hover text-center">
                                            <thead class="kt-datatable__head table-warning">
                                                <tr class="kt-datatable__row" style="left: 0px;">
                                                    <th data-field="icd_code"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>ICD Code</span></th>
                                                    <th data-field="disease_name"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Disease Name</span></th>
                                                    <th data-field="group"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Group</span></th>
                                                    <th data-field="price"
                                                        class="kt-datatable__cell kt-datatable__cell--sort">
                                                        <span>Price</span></th>
                                                    <th data-field="actions"
                                                        class="kt-datatable__cell kt-datatable__cell--sort"><span
                                                            style="width: 100px;">Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="kt-datatable__body">
                                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                    <td data-field="icd_code" class="kt-datatable__cell no_v">
                                                        <span>TOPUP</span>
                                                    </td>
                                                    <td data-field="disease_name" class="kt-datatable__cell no_v">
                                                        <span>Malaria</span>
                                                    </td>
                                                    <td data-field="group" class="kt-datatable__cell no_v">
                                                        <span>GRP11</span>
                                                    </td>
                                                    <td data-field="price" class="kt-datatable__cell no_v">
                                                        <span>0.00</span>
                                                    </td>
                                                    <td data-field="actions" class="kt-datatable__cell"><span>
                                                            <a title="add item"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <i class="fa fa-trash-alt"></i> </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="kt-datatable__row" style="left: 0px;">
                                                    <th colspan="5" class="kt-datatable__cell">No DRG List Found. Search
                                                        Disease to Add to DRG List.</th>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="claimInfo" role="tabpanel">
                <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                    <table class="table table-hover">
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Facility Name</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Claims No.</th>
                                <th>Audited No.</th>
                                <th>Unaudited No.</th>
                                <th>Claimed (AOA)</th>
                                <th>Audited (AOA)</th>
                                <th>Audit Rejected (AOA)</th>
                                <th>Awarded Rejected (AOA)</th>
                                <th>Total Rejected (AOA)</th>
                                <th>Facility Status</th>
                                <th>Audit Status</th>
                                <th>Award Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td onclick="getstep('claims_information_click')">1</td>
                                <td onclick="getstep('claims_information_click')">Jhon</td>
                                <td onclick="getstep('claims_information_click')">Stone</td>
                                <td onclick="getstep('claims_information_click')">@jhon</td>
                                <td onclick="getstep('claims_information_click')">Jhon</td>
                                <td onclick="getstep('claims_information_click')">Stone</td>
                                <td onclick="getstep('claims_information_click')">@jhon</td>
                                <td onclick="getstep('claims_information_click')">sdafasd</td>
                                <td onclick="getstep('claims_information_click')">Jhon</td>
                                <td onclick="getstep('claims_information_click')">Stone</td>
                                <td onclick="getstep('claims_information_click')">@jhon</td>
                                <td onclick="getstep('claims_information_click')">Stone</td>
                                <td onclick="getstep('claims_information_click')">Jhon</td>
                                <td onclick="getstep('claims_information_click')">Stone</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group">
                                        <button data-toggle="kt-tooltip" data-placement="left" title
                                            data-original-title="Close Finance" class="btn btn-sm btn-brand btn-icon"><i
                                                class="fa fa-window-close"></i></button><br>
                                        <button data-toggle="kt-tooltip" data-placement="top"
                                            data-original-title="Print Payment" title
                                            class="btn btn-sm btn-success btn-icon"><i class="fa fa-print"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jhon</td>
                                <td>Stone</td>
                                <td>@jhon</td>
                                <td>Jhon</td>
                                <td>Stone</td>
                                <td>@jhon</td>
                                <td>sdafasd</td>
                                <td>Jhon</td>
                                <td>Stone</td>
                                <td>@jhon</td>
                                <td>Stone</td>
                                <td>Jhon</td>
                                <td>Stone</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group">
                                        <button data-toggle="kt-tooltip" data-placement="left" title
                                            data-original-title="Close Finance" class="btn btn-sm btn-brand btn-icon"><i
                                                class="fa fa-window-close"></i></button><br>
                                        <button data-toggle="kt-tooltip" data-placement="top"
                                            data-original-title="Print Payment" title
                                            class="btn btn-sm btn-success btn-icon"><i class="fa fa-print"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-secondary">
<!-- TOtal goes here -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="paymentInfo" role="tabpanel">
                <div class="table-responsive" style="max-height:506px; overflow-y:auto;">
                    <table class="table table-hover">
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Entry Date</th>
                                <th>Payment Mode</th>
                                <th>Payment Name</th>
                                <th>Payment Details</th>
                                <th>Amount Paid</th>
                                <th>Receipt No.</th>
                                <th>Received By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"><span class="btn  btn-label-brand btn-sm btn-bold btn-upper">Opening
                            Balance: 0.00</span></li>
                    <li class="list-group-item"><span class="btn btn-label-success btn-sm btn-bold btn-upper">Closing
                            Balance: 2400</span>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="serviceSettting" role="tabpanel">
                <div class="row">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Agreed Number of Days for closing
                        account</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Allowed Number of Days After Failure to
                        close account</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Number of days before notification
                        starts</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Card Pin Status</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Service Provider Status</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="closingAccount" class="col-md-3 col-form-lable">Number of days for claims</label>
                    <div class="col-md-5">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-10 kt-align-right">
                        <button class="btn btn-success">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<!--email responds  -->
<div class="modal fade" id="email_correspondence" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Email Correspondence</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end email responds -->

<!--Task Activities  -->
<div class="modal fade" id="task_activities" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Task Activities</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end Task Activities -->

<!-- Log Activities  -->
<div class="modal fade" id="log_activities" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Log Activities</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end Log Activities -->

<script>
    $("div#m-dropzone-one").dropzone({
        url: "/file/post"
    });

    $(".date").datepicker({
        format: "dd MM yyyy",
        autoclose: true,
        orientation: "bottom auto"
    });
    $(".date_month").datepicker({
        format: "MM",
        autoclose: true,
        orientation: "bottom auto",
        startView: 1,
        minViewMode: 1
    });
    $(".date_year").datepicker({
        format: "yyyy",
        autoclose: true,
        orientation: "bottom auto",
        startView: 2,
        minViewMode: 2
    });

    $('[data-toggle="kt-tooltip"]').tooltip()
</script>
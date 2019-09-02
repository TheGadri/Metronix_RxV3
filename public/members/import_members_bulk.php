<form action="" method="Post">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Import Bulk Members
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
                        <a class="dropdown-item" href="#"><i class="flaticon-download"></i>Download sample excel
                            sheet</a>
                        <a class="dropdown-item" onclick="getstep('add_new_member')" href="javascript:;"><i
                                class="flaticon-user"></i> Add
                            New Member</a>
                        <a class="dropdown-item" onclick="getstep('list_of_members')" href="javascript:;"><i
                                class="flaticon-list-1"></i> List
                            of Members</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body" style="height:500px; overflow-y: auto;">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-form-label">Upload Excel File <i
                                class="fa fa-file-excel text-success"></i></label>
                        <div class="col-md-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadExcelFile"
                                    name="uploadExcelFile">
                                <label class="custom-file-label" for="uploadExcelFile">Choose file</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label class="col-md-4 col-form-label">Sheet Number</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="sheetNumber" name="sheetNumber"
                                placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="startRow" class="col-md-4 col-form-label">Start Row</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="startRow" name="startRow">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="endRow" class="col-md-4 col-form-label">End Row <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="endRow" name="endRow">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="surname" class="col-md-4 col-form-label">Surname <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="surname" name="surname">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="firstname" class="col-md-4 col-form-label">Firstname <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="othername" class="col-md-4 col-form-label">Othernames</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="othername" name="othername">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="dateOfBirth" class="col-md-4 col-form-label">Date of Birth <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input class="form-control date" readonly type="text" id="form_datetime"
                                    name="dateOfBirth" id="dateOfBirth" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar glyphicon-th"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="gender" class="col-md-4 col-form-label">Gender <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="telNumber" class="col-md-4 col-form-label">Telephone Number <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="telNumber" name="telNumber">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="email" class="col-md-4 col-form-label">Email</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="nationality" class="col-md-4 col-form-label">Nationality</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nationality" name="nationality">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="relationshipType" class="col-md-4 col-form-label">Relationship Type <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="relationshipType" name="relationshipType">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="status" class="col-md-4 col-form-label">Status</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="joinDate" class="col-md-4 col-form-label">Join Date <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input class="form-control date" readonly type="text" id="form_datetime" name="joinDate"
                                    id="cancellationDate" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar glyphicon-th"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="status" class="col-md-4 col-form-label">Cancellation Date <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input class="form-control date" readonly type="text" id="form_datetime"
                                    name="cancellationDate" id="cancellationDate" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar glyphicon-th"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="principalEmpNumber" class="col-md-4 col-form-label">Principal Employee Number <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="principalEmpNumber" name="principalEmpNumber">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="cancelDate" class="col-md-4 col-form-label">Employee Number</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="cancelDate" name="cancelDate">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="decisionStatus" class="col-md-4 col-form-label">Decision Status</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="decisionStatus" name="decisionStatus">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="cancelDate" class="col-md-4 col-form-label">Select Company <span
                                class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control select-picker">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mt-2 row">
                        <label for="decisionStatus" class="col-md-4 col-form-label">NHIA Number</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="decisionStatus" name="decisionStatus">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="row">
                <div class="col kt-align-right">
                    <button type="button" name="" onclick="#" id="" class="btn btn-success"> <i
                            class="fa fa-file-download"></i>Import Members</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(".date").datepicker({
        format: "dd MM yyyy",
        autoclose: true,
        orientation: "bottom auto"
    });
</script>
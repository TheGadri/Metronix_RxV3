<form action="" method="">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title" id="adding_user">
                    Add New Member
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
                        <a onclick="getstep('system_users')"  class="dropdown-item" href="javascript:;" onclick="getstep('list_of_members')"><i
                                class="flaticon-list-1"></i> View Users</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="row form-group-marginless kt-margin-t-20 justify-content-center">
                <div class="col-md-10">
                    <div class="form-group row">
                        <div class="col-md-1">
                            <select name="" id="" class="form-control">
                                <option value="">Mr</option>
                                <option value="">Mrs</option>
                                <option value="">Miss</option>
                                <option value="">Dr</option>
                                <option value="">Prof</option>
                            </select>
                        </div>
                        <label class="col-md-1 col-form-label">Firstname</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Firstname" name="fname" id="fname">
                        </div>
                        <label class="col-md-1 col-form-label">Surname</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Surname" name="sname" id="sname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-right">Security Level</label>
                        <div class="col-md-4">
                            <select name="" id="" class="form-control">
                                <option value="">Admin</option>
                                <option value="">Champion</option>
                                <option value="">CSE</option>
                                <option value="">Billing</option>
                                <option value="">Nurse</option>
                            </select>
                        </div>
                        <label class="col-md-1 col-form-label">Licence No</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Licence No" name="sname" id="sname">
                            <small>This is required for Medical, Dental and Optical Officers as well as
                                Pharmacist.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-right">Email</label>
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                        <label class="col-md-1 col-form-label">Tel</label>
                        <div class="col-md-4">
                            <input type="tel" class="form-control" placeholder="Telephone" name="tel" id="tel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-right">Permission Role</label>
                        <div class="col-md-4">
                            <select name="" id="" class="form-control">
                                <option value="">Admin</option>
                                <option value="">Champion</option>
                                <option value="">CSE</option>
                                <option value="">Billing</option>
                                <option value="">Nurse</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="surname" class="col-4 col-form-label">Surname <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <input class="form-control" type="text" id="surname" name="surname">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="firstname" class="col-4 col-form-label">Firstname <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="firstname" id="firstname">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="othername" class="col-4 col-form-label">Othername</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="othername" id="othername">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="dateOfBirth" class="col-4 col-form-label">Date of Birth <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <div class="input-group">
                                <input class="form-control date" readonly type="text" id="form_datetime"
                                    name="dateOfBirth" placeholder="Select Date">
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
                    <div class="mt-2 row">
                        <label for="gender" class="col-4 col-form-label">Gender <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <select class="form-control" name="gender" id="gender">
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Unspecified</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="nationaliaty" class="col-4 col-form-label">Nationality</label>
                        <div class="col-8">
                            <input class="form-control" type="text" id="nationaliaty" name="nationaliaty">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="telephone" class="col-4 col-form-label">Telephone</label>
                        <div class="col-8">
                            <input class="form-control" type="number" id="telephone" name="telephone">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="employer" class="col-4 col-form-label">Employer <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <select class="form-control" name="employer" id="employer">
                                <option value="" selected disabled>Select Employer</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Unspecified</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="healthPlan" class="col-4 col-form-label">Health Plan <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <input type="text" class="form-control" id="healthPlan" name="healthPlan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 row">
                        <label for="joinDate" class="col-4 col-form-label">Join Date</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input class="form-control date" readonly type="text" id="form_datetime" name="joinDate"
                                    id="joinDate" placeholder="Select Date">
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
                    <div class="mt-2 row">
                        <label for="cancellationDate" class="col-4 col-form-label">Cancellation Date</label>
                        <div class="col-8">
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
                    <div class="mt-2 row">
                        <label for="relationship" class="col-4 col-form-label">Relationship <span
                                class="text-danger">*</span></label>
                        <div class="col-8">
                            <select name="relationship" id="relationship" class="form-control">
                                <option value="">Self</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2  row">
                        <label for="status" class="col-4 col-form-label">Status</label>
                        <div class="col-8">
                            <select name="status" id="status" class="form-control">
                                <option value="">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="kt-portlet__foot">
            <div class="row">
                <div class="col kt-align-right">
                    <button type="submit" class="btn btn-success">Save Member Info</button>
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
<form action="" method="">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title" id="adding_user">
                    Add New Principal
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
                        <a class="dropdown-item" href="javascript:;" onclick="getstep('list_of_members')"><i
                                class="flaticon-list-1"></i> View List Of Members</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body" style="height:500px; overflow-y: auto;">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="http://localhost:80/rxv3/assets/media/users/100_2.jpg" alt="" class="img-thumbnail">
                    <div class="row justify-content-center mt-3">
                        <button type="button" class="btn btn-success btn-elevate btn-sm">
                            Upload Image
                        </button>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="hasMemberID" class="col-4 col-form-label">Has Member ID</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" id="hasMemberID" name="hasMemberID"
                                        disabled>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-2 row">
                                <label for="employeeNumber" class="col-4 col-form-label">Employee Number <span
                                        class="text-danger">*</span></label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="employeeNumber" id="employeeNumber">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                                        <input class="form-control date" readonly type="text" id="form_datetime"
                                            name="joinDate" id="joinDate" placeholder="Select Date">
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
                    </div>
                </div>
            </div>
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
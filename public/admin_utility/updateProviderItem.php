<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg" style="">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Update Item
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success btn-sm"><i
                                    class="flaticon-refresh"></i>
                                Refresh</button>
                            <button type="button"
                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                <a onclick="getstep('add_provider_item')" class="dropdown-item" href="javascript:;"><i
                                        class="flaticon2-add"></i>Add Item</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <form class="kt-form" id="kt_form">
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Provider Item Information:
                                        </h3>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Name</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="Item Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Price:</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="20">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Category:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label">Drugs</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Therapeutic Area:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Default Limit Access:</h3>
                                        <div class="form-group form-group-last row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="">
                                                <div class="kt-checkbox-inline col-md-14">
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Hearing Aid
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Psychology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Default Deduction Plans:</h3>
                                        <div class="form-group form-group-last row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Select Number of Companies:</label>
                                            <div class="col-md-6">
                                                <div>
                                                    <select name="total_selected" class="form-control" onchange="">
                                                        <option value=""> Select </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Search Options:</h3>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">

                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Rx Item Details:</h3>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Item Name:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Claim Code:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label">DRG66843</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Claim Category:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label">DRUGS</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Generic Name/Module Name:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 4:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 3:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 2:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 1:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--last">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Rx Item Details:</h3>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Item Name:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Claim Code:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label">DRG66843</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Rx Claim Category:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label">DRUGS</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Generic Name/Module Name:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 4:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 3:</label>
                                            <label class="col-md-1 col-form-label"></label>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 2:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">ATC Code 1:</label>
                                            <div class="col-md-6">
                                            <label class="col-form-label"> </label>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="kt-portlet__foot">
                                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                                    id="local_data" style="">
                                    <div class="kt-datatable__pager kt-datatable--paging-loaded">
                                        <ul class="kt-datatable__pager-nav">
                                            <li><a title="First"
                                                    class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
                                                    data-page="1" disabled="disabled"><i
                                                        class="flaticon2-fast-back"></i></a></li>
                                            <li><a title="Previous"
                                                    class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
                                                    data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a>
                                            </li>
                                            <li style=""></li>
                                            <li style="display: none;"><input type="text"
                                                    class="kt-pager-input form-control" title="Page number"></li>
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
                                            <li><a title="Next"
                                                    class="kt-datatable__pager-link kt-datatable__pager-link--next"
                                                    data-page="2"><i class="flaticon2-next"></i></a></li>
                                            <li><a title="Last"
                                                    class="kt-datatable__pager-link kt-datatable__pager-link--last"
                                                    data-page="10"><i class="flaticon2-fast-next"></i></a></li>
                                        </ul>
                                        <div class="kt-datatable__pager-info">
                                            <div class="dropdown bootstrap-select kt-datatable__pager-size"
                                                style="width: 60px;"><select
                                                    class="selectpicker kt-datatable__pager-size"
                                                    title="Select page size" data-width="60px" data-selected="10"
                                                    tabindex="-98">
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
                                                    <div class="inner show" role="listbox" aria-expanded="false"
                                                        tabindex="-1">
                                                        <ul class="dropdown-menu inner show"></ul>
                                                    </div>
                                                </div>
                                            </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col kt-align-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">
                                                    <span class="kt-hidden-mobile">Update</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2"></div>
                            </div>
                    </form>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>
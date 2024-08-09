<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div style="padding-top: 8px !important; padding-bottom: 8px !important; margin-bottom: 10px;" class="subheader py-2 py-lg-6 subheader-solid page_subheader" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">Quick Contact Details</h5>
					<!--end::Page Title-->
				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Actions-->
				<a onclick="reload_table()" class="btn btn-light-info font-weight-bolder btn-sm mr-5">
					<i class="fas fa-sync"></i> Refresh Record
				</a>
				<button id="delete_date_id" onclick="show_del_all_data_confirm_box()" class="btn btn-light-danger font-weight-bolder btn-sm mr-5">
					<i class="fas fa-minus"></i> Delete Data
				</button>
				<!-- <a class="btn btn-light-primary font-weight-bolder btn-sm" data-toggle="modal" data-target="#entryModal">
					<i class="fas fa-folder-open"></i> Re-Open Modal
				</a> -->
				<!--end::Actions-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="page_container">
			<div class="show_record_div">
				<table class="table table-bordered table-hover" id="data_table">
					<thead>
						<tr>
							<th class="nosort" style="width: 90px">Action <input type="checkbox" id="allChackbox" onchange="allchack();" style="display: inline-block; margin-left: 15px;"></th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Category</th>
							<th>Message</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>

		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>


<!-- Modal-->
<div class="modal fade" id="entryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog entry_modal" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title entry_modal_title" id="exampleModalLabel">Enter Menu Details :</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-footer entry_modal_footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button" onclick="clear_input()" class="btn btn-light-dark font-weight-bold">Clear</button>
				<button type="button" onclick="save_details()" class="btn btn-primary font-weight-bold save_btn">Save Data</button>
			</div>
		</div>
	</div>
</div>
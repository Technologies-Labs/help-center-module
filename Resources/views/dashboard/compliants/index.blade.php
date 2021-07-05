@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Comoliants</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Comoliants</li>
<li class="breadcrumb-item active">All</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
                     <table class="display" id="basic-1">
                        <thead>
                            @if($message = Session::get('success'))
                            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                                <i data-feather="thumbs-up"></i>
                                <p>{{ $message }}</p>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>
                            @endif
                            <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Details</th>
                            @can('compliant-activate')
                                <th>Solved</th>
                            @endcan
                            <th>Action</th>
                            </tr>
                         </thead>
                            <tbody>
                            @foreach ($compliants as $key => $compliant)
                                <tr id="delete_compliants_{{ $compliant->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $compliant->user->name }}</td>
                                    <td>{{ $compliant->details }}</td>
                                    @can('compliant-activate')
                                    <td>
                                        <div class="media-body text-center icon-state switch-outline">
                                            <label class="switch"  for="compliant-activation-{{$compliant->id}}">
                                                <input type="checkbox"  @if ($compliant->is_solved) checked @endif
                                                        class="custom-control-input"id="compliant-activation-{{$compliant->id}}"
                                                        onclick="activate_item('compliants',{{$compliant->id}})">
                                                <span class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                    </td>
                                    @endcan
                                    <td class="text-center">
                                        @can('compliant-delete')
                                           <a href="javascript:void(0);" onclick="delete_item({{ $compliant->id }},'compliants')" class="btn btn-danger m-b-5"><i class="fa fa-trash"></i></a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection

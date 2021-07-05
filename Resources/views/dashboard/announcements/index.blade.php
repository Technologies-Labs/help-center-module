@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>announcements</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">announcements</li>
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
                            <th>Opponent</th>
                            <th>Details</th>
                            @can('announcement-activate')
                                <th>Solved</th>
                            @endcan
                            <th>Action</th>
                            </tr>
                         </thead>
                            <tbody>
                            @foreach ($announcements as $key => $announcement)
                                <tr id="delete_announcements_{{ $announcement->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $announcement->user->name }}</td>
                                    <td>{{ $announcement->opponent->name }}</td>
                                    <td>{{ $announcement->details }}</td>
                                    @can('announcement-activate')
                                    <td>
                                        <div class="media-body text-center icon-state switch-outline">
                                            <label class="switch"  for="announcement-activation-{{$announcement->id}}">
                                                <input type="checkbox"  @if ($announcement->is_solved) checked @endif
                                                        class="custom-control-input"id="announcement-activation-{{$announcement->id}}"
                                                        onclick="activate_item('announcements',{{$announcement->id}})">
                                                <span class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                    </td>
                                    @endcan
                                    <td class="text-center">
                                        @can('announcement-delete')
                                           <a href="javascript:void(0);" onclick="delete_item({{ $announcement->id }},'announcements')" class="btn btn-danger m-b-5"><i class="fa fa-trash"></i></a>
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

@extends('layouts.app2')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div><!--end card-header-->
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>moblie</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Type of Room </th>
                        <th>Time in</th>
                        <th>Time out</th>
                        <th>Room No</th>
                        <th>Statuc</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

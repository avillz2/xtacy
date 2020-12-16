@extends('layouts.app2')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
           <!-- <div class="card-header">
                <h4 class="card-title">Textual inputs</h4>
                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                </p>
            </div>end card-header-->
            <div class="card-body">
                <form method="POST" action="{{url('/bookings/index')}}">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">FirstName</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="firstname" value="Artisanal kale" id="firstname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" value="1-(555)-555-5555" name="moblie" id="moblie">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Gender</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="gender" value="Artisanal kale" id="gender">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label text-right">Age</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="age" value="42" id="age">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label text-right">Date Out</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date"  name="timeout" value="2011-08-19" id="timeout">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label text-right">Adult</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="adult" value="42" id="adult">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label text-right">Room No</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="roomno" value="42" id="roomno">
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">LastName</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="lastname" value="Artisanal kale" id="lastname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="email" id="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="address" value="Artisanal kale" id="address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label text-right">Date In</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="timein" value="2011-08-19" id="timein">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">RoomType</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="roomtype" value="Artisanal kale" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label text-right">Children</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="42" id="children" name="children">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Status</label>
                            <div class="col-sm-10">
                                <select  id="status" name="status" class="form-control">
                                    <option>unoccupile</option>
                                    <option>occupile</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="button-items">

                            <button type="Submit" class="btn btn-outline-purple btn-lg btn-block">Block level button</button>

                        </div>
                    </div>
                </div>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->


@endsection

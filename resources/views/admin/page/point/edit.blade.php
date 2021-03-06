@extends('admin.master')


@section('body')
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.point.update', ['id'=> $request->id_point]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <label>title</label>
                                                    <input type="text" name="title" placeholder="title" class="form-control form-control-line" value="{{ $request->title_point }}">
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <label>จำนวนวัน</label>
                                                    <input type="text" name="date" placeholder="วัน" class="form-control form-control-line" value="{{ $request->days_point }}">
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <label>ราคา (Point)</label>
                                                    <input type="text" name="price" placeholder="โปรโมชั่น" class="form-control form-control-line" value="{{ $request->price_point }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">แก้ไขราคา</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection

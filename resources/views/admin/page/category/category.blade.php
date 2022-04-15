@extends('admin.master')

@section('body')
    <!-- column -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.category.create') }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down btn-md">เพิ่มหมวดหมู่</a>
                <h4 class="card-title">{{ $header_title }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th>รูปแบบ</th> --}}
                                <th>ชื่อ</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    {{-- <td>{{ $k->type_category == 'type' ? 'ประเภท' : 'หมวดหมู่' }}</td> --}}
                                    <td>{{ $k->title_category_eng }} {{ $k->title_category }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', ['id'=> $k->id]) }}" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down btn-block" >แก้ไข</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.category.destroy', ['id'=> $k->id]) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down btn-block" onclick="return confirm('ยืนยันลบข้อมูล')">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

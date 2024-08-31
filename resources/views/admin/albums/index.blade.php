@extends('admin.layouts.main') 
@section('title', 'Albums Management') 
@section('wrapper') 
<div class="card white_card card_height_100 mb-30 pt-4">

  <div class="card-body white_card_body">
    <div class="QA_section">
      <div class="white_box_tittle list_header">
        <h4>Albums</h4>
        <div class="box_right d-flex lms_block">
          <div class="search_field_2">
            <div class="search_inner">
              <form action="#">
                <div class="search_field">
                  <input type="text" class="form-control" placeholder="Search content here...">
                </div>
              </form>
            </div>
          </div>
          <div class="add_button ms-3">
            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn btn-primary">Search</a>
          </div>
          <div class="add_button ms-3">
            <a href="{{route('albums.create')}}" data-toggle="modal" data-target="#addSongModal" class="btn btn-primary">Add New Album</a>
          </div>
          <div class="add_button ms-3">
            <a href="{{route('albums.trash')}}" class="btn btn-primary" ><i class="align-middle" data-feather="trash-2"></i> Bin</a>     
        </div>
        </div>
      </div>
      <div class="QA_table mb-30">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer">
          <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_1">
            <thead>
              <tr>
                <th scope="col" class="sorting_asc" style="width: 26px;">ID</th>
                <th scope="col" class="sorting" style="width: 150px;">Title</th>
                <th scope="col" class="sorting" style="width: 170px;">Artist</th>
                <th scope="col" class="sorting" style="width: 100px;">Release Year</th>
                <th scope="col" class="sorting" style="width: 106px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($albums as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->artist->name}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>
                    <div class="action_btns d-flex">
                      <a class="nav-icon dropdown-toggle" href="{{route('albums.edit', $item)}}" id="alertsDropdown" >
                        <div class="position-relative">
                          <i class="align-middle" data-feather="edit"></i>
                        </div>
                      </a>
                      <form action="{{route('albums.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="nav-icon dropdown-toggle"> 
                          <div class="position-relative">
                            <i class="align-middle" data-feather="trash"></i>
                          </div>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <span class="m-2 btn btn-warning">Chưa có dữ liệu</span>
              @endforelse
              
              <!-- Add more rows as needed -->
            </tbody>
          </table>
          {{-- <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
            <a class="paginate_button previous disabled" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" id="DataTables_Table_1_previous">
              <i class="ti-arrow-left"></i>
            </a>
            <span>
              <a class="paginate_button current" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">1</a>
            </span>
            <a class="paginate_button next disabled" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" id="DataTables_Table_1_next">
              <i class="ti-arrow-right"></i>
            </a>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block btn btn-success">
  <i class="align-middle" data-feather="check"></i>
  <strong >{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-success alert-block btn btn-danger">
  <i class="align-middle" data-feather="x"></i>
  <strong>{{ $message }}</strong>
</div>
@endif
</div> 

@endsection
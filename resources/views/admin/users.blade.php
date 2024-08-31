@extends('admin.layouts.main')
@section('title','Users Management')
@section('wrapper')
<div class="card white_card card_height_100 mb-30 pt-4">
  <div class="card-body white_card_body">
    <div class="QA_section">
      <div class="white_box_tittle list_header">
        <h4>User List</h4>
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
          <div class="add_button ms-2">
            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn btn-primary">Search</a>
          </div>
        </div>
      </div>
      <div class="QA_table mb-30">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
          <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_0">
            <thead>
              <tr>
                <th scope="col" class="sorting_asc" style="width: 26px;">ID</th>
                <th scope="col" class="sorting" style="width: 70px;">Name</th>
                <th scope="col" class="sorting" style="width: 170px;">Email Address</th>
                <th scope="col" class="sorting" style="width: 106px;">Role</th>
                <th scope="col" class="sorting" style="width: 110px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  @if ($item->role == 0)
                      <td>Admin</td>
                  @else
                      <td>Guest</td>
                  @endif
                  <td>
                    <div class="action_btns d-flex">
                      <a class="nav-icon dropdown-toggle" href="{{route('users.edit', $item)}}" id="alertsDropdown" >
                        <div class="position-relative">
                          <i class="align-middle" data-feather="edit"></i>
                        </div>
                      </a>
                      <form action="{{route('users.destroy',$item)}}" method="POST">
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
                    <span class="text-danger m-2">Chưa có dữ liệu</span>
              @endforelse
            </tbody>
          </table>
          {{-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div>
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">
              <i class="ti-arrow-left"></i>
            </a>
            <span>
              <a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a>
            </span>
            <a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">
              <i class="ti-arrow-right"></i>
            </a>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>

@endsection
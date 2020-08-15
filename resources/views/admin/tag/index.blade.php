@extends('layouts.backend.app')

@push('styles')
<link rel="stylesheet" href="{{asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">



@endpush


@push('css')
    
@endpush
@section('content')

<tag-component ></tag-component>
{{-- 
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hoverable Table</h4>
        <p class="card-description">
          All Tag
        </p>
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection


@push('scripts')
<script src="{{asset('assets/backend/vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/backend/js/data-table.js')}}"></script>


  <script src="{{asset('assets/backend/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/backend/js/dataTables.bootstrap4.js')}}"></script>
@endpush

@push('js')
    
<script>

  const child_url = "{!! request()->url() !!}";
  $('#dataTable').DataTable({
        dom: 'lBfrtip',
        
        responsive: true,
        processing:true,
        serverSide:true,
        searching:true,
        pageLength:5,
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, "All"]],
        ajax:{
            url:child_url,
            type:'GET',
        },
        columns:[
            {data:'DT_RowIndex',orderable:false},
            {data:'name',orderable:true},
            {data:'slug',orderable:true},
            
            {data:'action',name:'#',orderable:false},
        ]
    });


</script>
@endpush

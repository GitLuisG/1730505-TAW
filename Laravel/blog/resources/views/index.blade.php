@include('components.Style')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <x-header />

  <x-Sidebar />
    <!-- /.content -->
  <div>
  {{ $id }}
  </div>

 
</div>

<x-footer />
@include('components.Scripts')


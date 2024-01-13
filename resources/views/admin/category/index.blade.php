@extends('admin.master')






@section('title')
    {{ trans('admin_title_page_trans.category') }}
@endsection







@section('css')
@endsection


@section('title_page')
    {{ trans('admin_title_page_trans.category') }}
@endsection

@section('content')


{{-- {{Request::route()->getName()}} --}}

    <!-- Content Wrapper. Contains page content -->

    <div class="card">
        <div class="card-header">
            <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">{{ trans('buttons_trans.create') }}</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>{{ trans('category_trans.name') }}</th>
                        <th>{{ trans('category_trans.image') }}</th>
                        <th>{{ trans('category_trans.is_showing') }}</th>
                        <th>{{ trans('category_trans.is_popular') }} </th>
                        <th>{{ trans('buttons_trans.Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>


                            <a href="" class="btn btn-sm btn-outline-success">{{ trans('buttons_trans.show') }}</a>
                            <a href="" class="btn btn-sm btn-outline-warning">{{ trans('buttons_trans.edit') }}</a>
                            <a href="" class="btn btn-sm btn-outline-danger">{{ trans('buttons_trans.delete') }}</a>

                            {{-- <button type="button" class="btn btn-primary">{{ trans('buttons_trans.show') }}</button>
                            <button type="button" class="btn btn-secondary">{{ trans('buttons_trans.edit') }}</button>
                            <button type="button" class="btn btn-success">{{ trans('buttons_trans.delete') }}</button> --}}


                        </td>


                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    </section>
@endsection
@section('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>



    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>
@endsection

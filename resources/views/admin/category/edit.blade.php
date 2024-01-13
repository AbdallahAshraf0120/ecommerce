@extends('admin.master')

@section('title')
    {{ trans('admin_title_page_trans.create_category') }}
@endsection


@section('css')
@endsection


@section('title_page')
    {{ trans('admin_title_page_trans.create_category') }}
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="card_body">
        <form action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="name_ar">{{trans('category_trans.name_ar')}}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control" name= "name_ar">
                    </div>
                </div>



                    <div class="col">
                        <label for="name_en">{{trans('category_trans.name_en')}}</label>
                        <div class="input_group mb-3">
                            <input type="text" class="form-control" name= "name_en">
                        </div>
                    </div>



            </div>

            <div class="row">
                <div class="col">
                    <label for="slug">{{trans('category_trans.slug')}}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control" name= "slug">
                    </div>
                </div>



                    <div class="col">
                        <label for="image">{{trans('category_trans.image')}}</label>
                        <div class="input_group mb-3">
                            <input type="file" class="form-control" name= image>
                        </div>
                    </div>



            </div>
            <div class="row">
                <div class="col">
                    <label for="description_ar">{{trans('category_trans.description_ar')}}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control" name= description_ar></textarea>
                    </div>
                </div>



                <div class="col">
                    <label for="description_en">{{trans('category_trans.description_en')}}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control" name= description_en></textarea>
                    </div>
                </div>


            </div>




            <div class="row">
                <div class="col">
                    <label for="is_showing">{{trans('category_trans.is_showing')}}</label>
                    <div class="input_group mb-3">
                        <input type="checkbox" class="" id="is_showing" name= "is_showing">
                    </div>
                </div>



                <div class="col">
                    <label for="is_popular">{{trans('category_trans.is_popular')}}</label>
                    <div class="input_group mb-3">
                        <input type="checkbox" class="" id="is_popular" name= "is_popular">
                    </div>
                </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_title_ar">{{trans('category_trans.meta_title_ar')}}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control" name= "meta_title_ar">
                    </div>
                </div>



                    <div class="col">
                        <label for="meta_title_en">{{trans('category_trans.meta_title_en')}}</label>
                        <div class="input_group mb-3">
                            <input type="text" class="form-control" name= meta_title_en>
                        </div>
                    </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_description_ar">{{trans('category_trans.meta_description_ar')}}</label>
                    <div class="input_group mb-3">
                        <textarea   rows="3" cols="3" class="form-control" name= "meta_description_ar"></textarea>
                    </div>
                </div>



                    <div class="col">
                        <label for="meta_description_en">{{trans('category_trans.meta_description_en')}}</label>
                        <div class="input_group mb-3">
                            <textarea  rows="3" cols="3" class="form-control" name= meta_description_en></textarea>
                        </div>
                    </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_keyword">{{trans('category_trans.meta_keyword')}}</label>
                    <div class="input_group mb-3">
                        <textarea   rows="3" cols="3" class="form-control" name= "meta_keyword"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary">{{trans('buttons_trans.save')}}</button>

        </form>
    </div>



    </section>
@endsection
@section('js')
@endsection

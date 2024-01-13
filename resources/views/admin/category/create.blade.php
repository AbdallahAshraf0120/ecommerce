@extends('admin.master')

@section('title')
    {{ trans('admin_title_page_trans.edit_category') }}
@endsection


@section('css')
@endsection


@section('title_page')
    {{ trans('admin_title_page_trans.edit_category') }}
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="card_body">
        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="name_ar">{{ trans('category_trans.name_ar') }}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control @error('name_ar') is_invalid @enderror" name= "name_ar">
                    </div>
                    @error('name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>



                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif















                <div class="col">
                    <label for="name_en">{{ trans('category_trans.name_en') }}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control  @error('name_en') is_invalid @enderror" name= "name_en">
                    </div>
                    @error('name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>



            </div>

            <div class="row">
                <div class="col">
                    <label for="slug">{{ trans('category_trans.slug') }}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control  @error('slug') is_invalid @enderror" name= "slug">
                    </div>
                    @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="col">
                    <label for="image">{{ trans('category_trans.image') }}</label>
                    <div class="input_group mb-3">
                        <input type="file" class="form-control @error('name_ar') is_invalid @enderror" name=image>
                    </div>


                    @error('name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>









            </div>
            <div class="row">
                <div class="col">
                    <label for="description_ar">{{ trans('category_trans.description_ar') }}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control  @error('description_ar') is_invalid @enderror"
                            name=description_ar></textarea>
                    </div>
                    @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="col">
                    <label for="description_en">{{ trans('category_trans.description_en') }}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control  @error('description_en') is_invalid @enderror"
                            name=description_en></textarea>
                    </div>
                    @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>




            <div class="row">
                <div class="col">
                    <label for="is_showing">{{ trans('category_trans.is_showing') }}</label>
                    <div class="input_group mb-3">
                        <input type="checkbox" class="" id="is_showing" name= "is_showing">
                    </div>
                </div>



                <div class="col">
                    <label for="is_popular">{{ trans('category_trans.is_popular') }}</label>
                    <div class="input_group mb-3">
                        <input type="checkbox" class="" id="is_popular" name= "is_popular">
                    </div>
                </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_title_ar">{{ trans('category_trans.meta_title_ar') }}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control  @error('meta_title_ar') is_invalid @enderror"
                            name= "meta_title_ar">
                    </div>
                    @error('meta_title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="col">
                    <label for="meta_title_en">{{ trans('category_trans.meta_title_en') }}</label>
                    <div class="input_group mb-3">
                        <input type="text" class="form-control  @error('meta_title_en') is_invalid @enderror"
                            name=meta_title_en>
                    </div>
                    @error('meta_title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_description_ar">{{ trans('category_trans.meta_description_ar') }}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control  @error('meta_description_ar') is_invalid @enderror"
                            name= "meta_description_ar"></textarea>
                    </div>
                    @error('meta_description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="col">
                    <label for="meta_description_en">{{ trans('category_trans.meta_description_en') }}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control  @error('meta_description_en') is_invalid @enderror"
                            name=meta_description_en></textarea>
                    </div>
                    @error('meta_description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



            </div>


            <div class="row">
                <div class="col">
                    <label for="meta_keywords">{{ trans('category_trans.meta_keywords') }}</label>
                    <div class="input_group mb-3">
                        <textarea rows="3" cols="3" class="form-control  @error('meta_keywords') is_invalid @enderror"
                            name= "meta_keywords"></textarea>
                    </div>

                    @error('meta_keywords')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary">{{ trans('buttons_trans.save') }}</button>

        </form>
    </div>



    </section>
@endsection
@section('js')
@endsection

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    @isset($url_back)
                        <a href="{{ $url_back }}" class="btn btn-xs btn-secondary"><i
                                    class="fa fa-chevron-left"></i> {{ trans('lte::main.Back') }}</a>
                    @endif
                    @isset($page_title) {!! $page_title !!} @endisset
                    @isset($small_page_title)<small>{{ $small_page_title }}</small>@endisset
                    @if(!empty($url_create))
                        <a href="{{ $url_create }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> {{ trans('lte::main.Create') }}</a>
                    @endif
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    @if(isset($page_title))
                        <li class="breadcrumb-item active">{{ $page_title }}</li>
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

{{--
    @include('lte3::layouts.parts.content-header', [
       'page_title' => 'Blogs',
       'small_page_title' => 'List',
       'url_back' => '',
       'url_create' => ''
   ])
--}}
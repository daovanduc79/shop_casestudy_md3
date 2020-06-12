@extends('home-admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">
                                        <i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('pets.index')}}">Pets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <h2 class="mb-0">Users Add New</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('pets.update',['id'=>$pet->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">Name</label>
                                <input class="form-control py-4 <?php echo $errors->first('name') ? 'is-invalid' : ''?>"
                                       value="{{old('name')?old('name'):$pet->name}}" minlength="3" maxlength="20"
                                       required name="name" type="text"
                                       placeholder="Enter name"/>
                                @if($errors->first('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="small md-1">Image</label>
                                <input class="form-control <?php echo $errors->first('image') ? 'is-invalid' : ''?>"
                                       type="file" name="image">
                                @if($errors->first('image'))
                                    <p class="text-danger">{{$errors->first('image')}}</p>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <a href="{{route('pets.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


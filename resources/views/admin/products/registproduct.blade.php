@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="title__center">コンビニオーナー</h1>
        <div class="form">
            <div class="card">
                <div class="card-header">出品</div>

                <div class="card-body">
                    <form method="post" action="{{ route('admin.products.create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                               <label for="name">商品名</label>
                                <input placeholder="商品名" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" maxlength='190' required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-6">
                              <label for="expiration_date">消費期限</label>
                                <input  id="expiration_date" type="datetime-local" class="form-control @error('expiration_date') is-invalid @enderror" name="expiration_date" value="{{ $date }}" required autocomplete="expiration_date" autofocus>

                                @error('expiration_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                           

                            <div class="col-md-6">
                            <label for="price">価格（円）</label>
                                <input placeholder="999,999以下"  id="price" type="number" pattern="\d*" min="0" max="999999" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-6">
                            <label for="comment">商品詳細(190文字以下)</label>
                                <textarea cols="30" rows="10" id="comment" type="comment" class="form-textarea @error('comment') is-invalid @enderror" name="comment"  maxlength='190' required autocomplete="comment">
                                {{ old('comment') }}
                                </textarea>

                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <label class="photofilelabel" for="photofile">写真を選択</label>
                                <input placeholder="ファイル" accept="image/*" id="photofile" type="file" class="form-control form-control__photofile @error('photofile') is-invalid @enderror" name="photofile" required autocomplete="new-photofile">

                                @error('photofile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <img id="preview"  alt="" />
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                           
                                <button type="submit" class="c-btn__form">
                                    出品
                                </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
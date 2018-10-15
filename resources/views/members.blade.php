@extends("layouts.master")

@section('members')
    @isAdmin
        <section id="members">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Adicionar membros') }}</div>

                            <div class="card-body">
                                <form method="post"
                                    action="{{ route('addMembers',$user->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">
                                            {{ __('Nome') }}
                                        </label>

                                        <div class="col-md-6">
                                            <input id="name"
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                value="{{$user->name}}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="photo"
                                            class="col-md-4 col-form-label text-md-right">
                                            {{ __('Foto') }}
                                        </label>

                                        <div class="col-md-6">
                                            <input type="file"
                                                name="photo"
                                                accept="image/png, image/jpeg"
                                                required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="description"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Descrição') }}</label>
                                    
                                    <textarea class="form-control col-md-6{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="description"
                                    id="description"
                                    value="{{ old('description') }}"
                                    required rows="5"></textarea>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit"
                                                class="btn btn-secondary">
                                                {{ __('Adicionar a equipa') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </sectoon>
    @endisAdmin
@endsection
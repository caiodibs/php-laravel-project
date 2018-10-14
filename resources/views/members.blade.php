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
                                <form method="POST"
                                    action="{{ route('register') }}">
                                    <imput id="id" name="id" value="1"/>
                                    <imput id="is_team_member" name="is_team_member" value="1"/>

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
                                                value="{{ old('name') }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="photo"
                                            class="col-md-4 col-form-label text-md-right">
                                            {{ __('Foto') }}
                                        </label>

                                        <div class="col-md-6">
                                            <input type="file"
                                                id="photo" name="photo"
                                                accept="image/png, image/jpeg" required />
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
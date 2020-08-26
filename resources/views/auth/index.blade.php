@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado como {{ Auth::user()->name ?? null  }}.

                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Sair</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <!-- form address -->
                    <form action="{{ route('client.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ Auth::user()->id  }}">

                    <div class="form-group mt-4">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome" value="{{ Auth::user()->name ?? null  }}">
                    </div>

                    <div class="form-group mt-4">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Sobrenome" value="{{ Auth::user()->lastname ?? null }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="doc">CPF:</label>
                        <input type="text" name="doc" class="form-control" id="doc" placeholder="CPF" value="{{ Auth::user()->doc ?? null  }}" readonly>
                        <small id="emailHelp" class="form-text text-muted">Caso precise alterar o seu CPF, entre em contato com nosso suporte.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Telefone:</label>
                        <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Telefone" value="{{ Auth::user()->phone1 ?? null  }}">
                    </div>

                    <div class="form-group">
                        <label for="phone2">Telefone adicional:</label>
                        <input type="text" name="phone2" class="form-control" id="phone2" placeholder="Telefone adicional" value="{{ Auth::user()->phone2 ?? null  }}">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="{{ Auth::user()->email ?? null  }}">
                    </div>

                    <!-- <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Senha" value="{{ Auth::user()->password ?? null  }}">
                    </div> -->

                    <hr class="w-100 float-left mt-4 mb-4">

                    <div class="form-group">
                        <label for="zipcode">CEP:</label>
                        <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="CEP" value="{{ Auth::user()->zipcode ?? null  }}">
                    </div>

                    <div class="form-group">
                        <label for="street">Endereço:</label>
                        <input type="text" name="street" class="form-control" id="street" placeholder="Logradouro" value="{{ $end['street'] ?? null }}">
                    </div>

                    
                    <div class="form-group">
                        <label for="number">Número:</label>
                        <input type="text" name="number" class="form-control" id="number" placeholder="Número" value="{{ Auth::user()->number ?? null }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="obs">Complemento:</label>
                        <input type="text" name="obs" class="form-control" id="obs" placeholder="Complemento" value="{{ Auth::user()->obs ?? null }}">
                    </div>

                    <div class="form-group">
                        <label for="neigh">Bairro:</label>
                        <input type="text" name="neigh" class="form-control" id="neigh" placeholder="Bairro" value="{{ $end['district'] ?? null }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="city">Cidade:</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Cidade" value="{{ $end['city'] ?? null }}">
                    </div>

                    <div class="form-group">
                        <label for="state">Estado:</label>
                        <input type="text" name="state" class="form-control" id="state" placeholder="Estado" value="{{ $end['uf'] ?? null }}">
                    </div>

                    <div class="form-group">
                        <label for="country">País:</label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="País" value="Brasil" readonly>
                    </div>

                    <button type="submit" name="" class="btn btn-primary">Alterar</button>
                    </form>
                    <!-- end form address -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

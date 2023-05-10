
<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <div id="toast-container" class="toast-top-right"></div>
    <style>
        /*::-webkit-scrollbar {*/
        /*    display: none;*/
        /*}*/
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .div-inicio {

            font-family: Inter, system-ui;
            background-image: url('img/fundo01.png');
            background-size: cover;
        }


        @media screen and (max-width: 600px) {

            div-inicio {
                margin: 0;
            }

        }

        @media screen and (max-width: 768px) {
            .div-inicio {
                font-size: 12px;
            }
            .input-search {
                width: 100%!important;
            }
        }

        @media screen and (min-width: 768px) {
            .div-inicio {
                font-size: 14px;
            }
            footer {
                bottom: 0;
            }

            .input-search {
                width: 75%!important;
            }

        }


        main {
            width: 100%;
            flex-grow: 1;
        }

        @media print {
            .ocult {
                display: none;
            }

            .modal {
                display: none;
            }

            .conteudo1 {
                display: block;
            }
        }
        footer {
            position: absolute;
        }

    </style>

</head>
<body>

    <div class="container">
        <h1>Dados pessoais</h1>
        <form method="POST" action="{{ route('person.store') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                <div class="col-md-6">
                    <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" autocomplete="birth_date">
                    @error('name')

                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                <div class="col-md-6">
                    <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                    @error('cpf')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="number_rg" class="col-md-4 col-form-label text-md-right">{{ __('Number RG') }}</label>

                <div class="col-md-6">
                    <input id="number_rg" type="text" class="form-control @error('number_rg') is-invalid @enderror" name="number_rg" value="{{ old('number_rg') }}" required autocomplete="number_rg">

                    @error('number_rg')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="date_emission_rg" class="col-md-4 col-form-label text-md-right">{{ __('Date of Emission RG') }}</label>

                <div class="col-md-6">
                    <input id="date_emission_rg" type="date" class="form-control @error('date_emission_rg') is-invalid @enderror" name="date_emission_rg" value="{{ old('date_emission_rg') }}" required autocomplete="date_emission_rg">

                    @error('date_emission_rg')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="organ_issuer_rg_id" class="col-sm-2 col-form-label">Orgão Expedidor do RG</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="organ_issuer_rg_id" name="organ_issuer_rg_id">
                </div>
            </div>

            <div class="form-group row">
                <label for="state_organ_issuer_rg_id" class="col-sm-2 col-form-label">Estado do Órgão Expedidor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="state_organ_issuer_rg_id" name="state_organ_issuer_rg_id">
                </div>
            </div>

            <div class="form-group row">
                <label for="naturalness_id" class="col-sm-2 col-form-label">Naturalidade</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="naturalness_id" name="naturalness_id">
                </div>
            </div>

            <div class="form-group row">
                <label for="schooling_id" class="col-sm-2 col-form-label">Escolaridade</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="schooling_id" name="schooling_id">
                </div>
            </div>

            <div class="form-group row">
                <label for="sex" class="col-sm-2 col-form-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sex" name="sex">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="marital_status__id" class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="marital_status__id" name="marital_status__id">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_marriage" class="col-sm-2 col-form-label">Data de Casamento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_marriage" name="date_marriage">
                </div>
            </div>

            <div class="form-group row">
                <label for="spouse_absent" class="col-sm-2 col-form-label">Cônjuge Ausente</label>
                <div class="col-sm-10">
                    <select class="form-control" id="spouse_absent" name="spouse_absent">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="partner_residing_together" class="col-sm-2 col-form-label">Companheiro Residindo Junto</label>
                <div class="col-sm-10">
                    <select class="form-control" id="partner_residing_together" name="partner_residing_together">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="illness_chronicle" class="col-sm-2 col-form-label">Possui Doença Crônica</label>
                <div class="col-sm-10">
                    <select class="form-control" id="illness_chronicle" name="illness_chronicle">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="person_deficient" class="col-sm-2 col-form-label">Pessoa com Deficiência</label>
                <div class="col-sm-10">
                    <select class="form-control" id="person_deficient" name="person_deficient">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="recipient_Software_social" class="col-sm-2 col-form-label">Recebe Benefício Social de Programa de Software</label>
                <div class="col-sm-10">
                    <select class="form-control" id="recipient_Software_social" name="recipient_Software_social">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="profession" class="col-sm-2 col-form-label">Profissão</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="profession" name="profession">
                </div>
            </div>
            <div class="form-group row">
                <label for="situation_marketplace_work_id" class="col-sm-2 col-form-label">Situação no Mercado de Trabalho</label>
                <div class="col-sm-10">
                    <select class="form-control" id="situation_marketplace_work_id" name="situation_marketplace_work_id">
                        <option value="1" disabled selected>Selecione uma opção</option>
{{--                        @foreach ($situationMarketplaceWorks as $situationMarketplaceWork)--}}
<!-- {{--                            <option value="{{ $situationMarketplaceWork->id }}">{{ $situationMarketplaceWork->description }}</option>--}} -->
{{--                        @endforeach--}}
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name_mother" class="col-sm-2 col-form-label">Nome da Mãe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_mother" name="name_mother">
                </div>
            </div>
            <div class="form-group row">
                <label for="name_father" class="col-sm-2 col-form-label">Nome do Pai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_father" name="name_father">
                </div>
            </div>
            <div class="form-group row">
                <label for="observation" class="col-sm-2 col-form-label">Observações</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="observation" name="observation" rows="3"></textarea>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-secondary" href="">Cancelar</a>
    </div>
    </form>





    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script>

        document.getElementById('buscar').addEventListener('click', function(event) {
            event.preventDefault();
            switch (true) {
                case (grecaptcha.getResponse().length === 0):
                    toastr.error('Por favor, selecione o reCAPTCHA.');
                    break;
                case (document.getElementById('search').value.trim() === ''):
                    toastr.error('Por favor, digite o "cnpj".');
                    break;
                default:
                    document.getElementById('form').submit();
                    break;
            }
        });
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '{{getenv('KEY_RECATCHA')}}'
            });
        };

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>


<x-app-layout>
<div class="content-wrapper" style="min-height: 81px;">
<div class="content-header">
<div class="container-fluid">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="margin-bottom: 25px;text-align: center;">
                    @if (Auth::user()->subscription('default'))
                        @if (Auth::user()->subscription('default')->onGracePeriod())
                            <p>Deseja Reativar a Assinatura?</p>
                            <a href="{{ route('subscriptions.resume') }}" class="btn btn-block btn-success" style="width: 18%;margin: auto;">
                                Reativar Assinatura
                            </a>
                        @else
                            <span>Deseja Cancelar a Assinatura?</span>
                            <a href="{{ route('subscriptions.cancel') }}" class="btn btn-block btn-danger" style="width: 18%;margin: auto;">
                                Cancelar Assinatura
                            </a>
                        @endif
                    @else
                        <p style="text-align: center;font-size: 30px;">Você não é assinante.</p>
                        <p style="text-align: center;font-size: 30px;">Não perca tempo assine já!!!</p>
                        <a style="width: 31%;margin: auto;margin-bottom: 25px;"class="btn btn-block btn-primary btn-lg" href="/planos">Clique aqui e veja os nossos planos</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->subscription('default'))
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Faturas Pagas</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Preço</th>
                      <th>Download</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($invoices as $invoice)
                    <tr>
                      <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                      <td>{{ $invoice->total() }}</td>
                      <td>
                        <a href="{{ route('subscriptions.invoice.download', $invoice->id) }}" class="btn btn-block btn-success" style="width: 40%;">
                            Baixar
                        </a>
                      </td>
                    </tr>
                    @endforeach
 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    @endif
  </div>
  </div>
  </div>
</x-app-layout>
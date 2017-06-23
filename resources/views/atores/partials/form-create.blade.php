 <form method="post" action="/atores">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>

                     <div class="form-group">
                        <label for="ano">Ano</label>
                        <input class="form-control" type="text" name="ano" id="ano" placeholder="Ano">
                    </div>

                    <div class="form-group">
                        <label for="filme_id">Filmes</label>
                       <!-- <select class="form-control" name="filme_id" id="filme_id" > -->
                       <div class="dropdown">
  <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Filmes
    <span class="caret"></span>
  </button>-->
                            @foreach($filmes as $filme)
                                  <input type="checkbox" name="filmes[]" value="{{$filme->id}}">{{$filme->titulo}}</input><br>
                            @endforeach
                          
                            
                      <!--  </select> -->
                    </div>


                    <button class="btn btn-primary">Enviar</button>
                    <a href="/" class="btn btn-default">Voltar</a>
                </form>    

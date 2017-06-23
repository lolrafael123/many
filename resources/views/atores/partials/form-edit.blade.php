<form action="{{ route('atores.update', $atore->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$atore->nome}}">

                    </div>

                    <div class="form-group">
                        <label for="ano">Ano nasc.</label>
                        <input class="form-control" type="text" name="ano" id="ano" value="{{$atore->ano}}">
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="filme_id">Filmes</label>
                        <select class="form-control" name="filme_id" id="filme_id" >
                            @foreach($f as $filme)
                                 
                                @foreach($atore->filmes as $item)
                                    
                                  
                                @endforeach

                                @if($filme->id == $item->id)
                                        
                                        <input type="checkbox" selected="selected" value="{{$filme->id}}">{{$filme->titulo}}</input>
                                        
                                    @else
                                        <input type="checkbox" value="{{$filme->id}}">{{$filme->titulo}}</input>

                                    @endif
                                    
                            @endforeach
                          
                            
                        </select>
                    </div> --}}
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
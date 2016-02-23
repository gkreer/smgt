
      <table class="table table-hover" id="tab_logic">
        <thead>
          <tr>
            <th class="text-center">
              #
            </th>
            <th class="text-center" style="width: 75%">
              Descripcion
            </th>
            <th class="text-center">
              Monto
            </th>
          </tr>
        </thead>
        
        <tbody>
        @foreach($gastos as $gasto)
          <tr id='addr'{{$gasto->id}}>
            <td>
            {{$gasto->id}}
            </td>
            <td>              
              {!! Form::text('descripcion.$gasto->id', $gasto->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}           
            </td>
            <td>
              {!! Form::number('monto.$gasto->id', $gasto->montoPesos, ['class' => 'form-control', 'placeholder' => 'Monto']) !!}            
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    

            
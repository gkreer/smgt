
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
          <tr id='addr0'>
            <td>
            1
            </td>
            <td>              
              {!! Form::text('descripcion0', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}           
            </td>
            <td>
              {!! Form::number('monto0', null, ['class' => 'form-control', 'placeholder' => 'Monto']) !!}            
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
    

            
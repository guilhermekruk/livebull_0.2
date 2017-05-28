<fieldset>
    <legend>cadastro</legend>
    <div class="">
        {!!Form::label('CadAnimalIdenti','Identificação do animal') !!}
        {!!Form::text('CadAnimalIdenti',null,['class'=>'form-control']) !!}
    </div>
    <div class="">
        {!!Form::label('CadEspId_FK','Especie do animal') !!}
        {!!Form::text('CadEspId_FK',null,['class'=>'form-control'])!!}
    </div>
    <div class="">
        {!!Form::label('CadRacaId_FK','teste do animal') !!}
        {!!Form::text('CadRacaId_FK',null,['class'=>'form-control'])!!}
    </div>
    <div class="">
        {!!Form::label('CadTipoAnimalId_FK','Destino(avaliar)')!!}
        {!!Form::text('CadTipoAnimalId_FK',null,['class'=>'form-control' ])!!}
    </div>
    <div class="">
        {!!Form::label('CadAnimalDTreg','Data de registro do animal')!!}
        {!!Form::date('CadAnimalDTreg',null,['class'=>'form-control'])!!}
    </div>
    <div class="">
        {!!Form::label('CadAnimalDTnasc','Data de nascimento do animal')!!}
        {!!Form::date('CadAnimalDTnasc',null,['classs' =>'form-control'])!!}
    </div>
</fieldset>

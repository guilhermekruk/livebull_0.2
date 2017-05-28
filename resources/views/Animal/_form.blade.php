<fieldset>
    <legend>cadastro</legend>
    <div class="">
        {!! Form::label('CadAnimalIdenti','Identificação do animal') !!}
        {!! Form::text('CadAnimalIdenti',null,['class'=>'form-control']) !!}
    </div>
    <div class="">
        {!! Form::label('CadEspId FK','Especie do animal') !!}
        {!! Form::text('CadEspId FK',null,['class'=>'form-control']) !!}
    </div>
    <div class="">
        {!! Form::label('CadRacaId FK'),'Raça do animal' !!}
        {!! Form::text('CadRacaId FK'),null,['class'=>'form-control'] !!}
    </div>
    <div class="">
        {!! Form::label('CadTipoAnimalId FK','Destino(avaliar)') !!}
        {!! Form::text('CadTipoAnimalId FK',null,['class'=>'form-control' ]) !!}
    </div>
    <div class="">
        {!! Form::label('adAnimalDTreg','Data de registro do animal') !!}
        {!! Form::date('adAnimalDTreg',null,['class'=>'form-control']) !!}
    </div>
    <div class="">
        {!! Form::label('CadAnimalDTnasc','Data de nascimento do animal')!!}
        {!! Form::date('CadAnimalDTnasc',null,['classs' =>'form-control']) !!}
    </div>
</fieldset>

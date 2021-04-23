@extends('layout.app') <!-- Importação do layout blade -->
@section('titulo', 'Inicio') <!-- Definição do titulo -->
@component('componentes.navegacao')
@endcomponent
@section('corpo')  <!-- Algoritmo da pagina -->
    <div style="text-align: left;">
        <p style="font-size: 1rem; padding: 5rem">
            Este projeto possui como motivação principal auxiliar os estudantes do IFSul Câmpus Camaquã que possuem
            dificuldades de aprendizado e que não conseguem participar dos encontros oferecidos pelos docentes para
            esclarecimentos de suas dúvidas. Tais encontros, denominados horários de atendimento, fazem parte de um dos
            principais momentos para esclarecimento de dúvidas dos discentes. Um problema enfrentado por grande parte
            dos alunos, e que impede-os de participarem dos respectivos horários de atendimento, é que os mesmos são
            ofertados nos horários inversos aos períodos de aula. Além de muitos alunos residirem em outros municípios,
            destaca-se também o fato de que a grande maioria dos alunos do TADS trabalham em tempo integral, não
            possuindo disponibilidade de horário para comparecerem aos encontros complementares de ensino.
        </p>
    </div>
@endsection

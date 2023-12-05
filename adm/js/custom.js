// Executar quando o documento HTML for completamente carregado
document.addEventListener('DOMContentLoaded', function() {

    // Receber o SELETOR calendar do atributo id
    var calendarEl = document.getElementById('calendar');

    // Instanciar FullCalendar.Calendar e atribuir a variável calendar
    var calendar = new FullCalendar.Calendar(calendarEl, {

        // Criar o cabeçalho do calendário
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },

        // Definir o idioma usado no calendário
        locale: 'pt-br',

        // Definir a data inicial
        //initialDate: '2023-01-12',
        //initialDate: '2023-10-12',

        // Permitir clicar nos nomes dos dias da semana 
        navLinks: true, 

        // Permitir clicar e arrastar o mouse sobre um ou vários dias no calendário
        selectable: false,

        // Indicar visualmente a área que será selecionada antes que o usuário solte o botão do mouse para confirmar a seleção
        selectMirror: false,

        // Permitir arrastar e redimensionar os eventos diretamente no calendário.
        editable: false,

        // Número máximo de eventos em um determinado dia, se for true, o número de eventos será limitado à altura da célula do dia
        dayMaxEvents: true, 

        events: 'listar_evento.php'
    });

    calendar.render();
});
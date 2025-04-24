<x-layout >
    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia -</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png"/>
                    01 de abr
                <img src="/assets/images/icon-next.png"/>
            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task_list">
            @foreach ($tasks as $task)
            <x-task :data=$task/>
            @endforeach


        </div>
    </section>

    <script>
        async function taskUpdate(element){
        //    alert(element.checked);
           let status = element.checked;
           let taskId = element.dataset.id;
        //   alert(taskId);
           let url = '{{route('task.update')}}';
           //alert(url);
           let rawResult = await fetch(url, {
            method: 'POST',
            headers:{
                'Content-type': 'application/json',
                'accept': 'application/json'
            },
            body: JSON.stringify({status, taskId, _token: '{{ csrf_token()}}'})
           });
           result = await rawResult.json();
           if(result.success) {
            alert('Task Atualizada com Sucesso!');
           } else {
            element.checked = !status;
           }
         }
    </script>
</x-layout>

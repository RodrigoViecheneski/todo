<x-layout>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
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
            <div class="task">
                <div class="title">
                    <input type="checkbox" />
                    <div class="task_title"> Título da Tarefa</div>
                </div>
                <div class="priority">
                    <div class="sphere"></div>
                    <div> Título da Tarefa</div>
                </div>
                <div class="actions">
                    <a href="#">
                        <img src="/assets/images/icon-edit.png"/>
                    </a>
                    <a href="#">
                        <img src="/assets/images/icon-delete.png"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>

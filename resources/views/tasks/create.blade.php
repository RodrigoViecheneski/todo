<x-layout page="TODO: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar tarefa</h1>
        <form>
            <div class="inputArea">
                <label for="title">
                    Título da Task
                </label>
                <input id="title" name="title" required placeholder="Digite o título da tarefa!" />
            </div>
            <div class="inputArea">
                <label for="due_date">
                    Data de Realização
                </label>
                <input type="date" id="due_date" name="due_date" required placeholder="Digite o título da tarefa!" />
            </div>
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value=""/>Selecione a categoria </option>
                    <option> Valor qualquer </option>
                </select>
            </div>
            <div class="inputArea">
                <label for="title">
                    Descrição da tarefa
                </label>
               <textarea name="description" placeholder="Digite uma descrição para sua task"></textarea>
            </div>
            <div class="inputArea">
                <button type="submit"> Criar Tarefa </button>
            </div>
        </form>
    </section>

</x-layout>

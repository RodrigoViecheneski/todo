<x-layout page="TODO: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar tarefa</h1>
        <form>
            <x-form.text_input name="title"  label="Título da task" required="required" placeholder="Digite o título da sua task"/>
            <x-form.text_input type="date" name="due_date"  label="Data de Realização" required="required"/>
            <x-form.select_input  name="category"  label="Categoria" placeholder="Selecione Categoria">
                <option>Valor qualquer</option>
            </x-form.select_input>
            <x-form.textarea_input
                label="Descrição da tarefa"
                name="description"
                placeholder="Digite a descrição da tarefa"
            />
            <div class="inputArea">
                <button type="reset" class="btn"> Resetar </button>
                <button type="submit" class="btn btn-primary"> Criar Tarefa </button>
            </div>
        </form>
    </section>

</x-layout>

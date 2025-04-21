<x-layout page="TODO: Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Autenticação</h1>
        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('user.login_action')}}">
            @csrf <!--Define pin de acesso-->
            <x-form.text_input type="email" name="email"  label="Seu email" placeholder="Seu email"/>
            <x-form.text_input type="password" name="password"  label="Sua senha" placeholder="Sua senha"/>
            <x-form.form_button resetTxt="Limpar" submitTxt="Login" />
        </form>
    </section>

</x-layout>


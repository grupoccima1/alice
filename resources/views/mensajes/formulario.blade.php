<x-app-layout>
    <h1 class="text-3xl text-gray-800">Enviar Mensaje</h1>
    <form action="{{ route('mensaje.enviar') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="4" cols="50"></textarea>
        </div>
        <button class="btn btn-info" type="submit ">Enviar Mensaje</button>
    </form>

    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
</x-app-layout>

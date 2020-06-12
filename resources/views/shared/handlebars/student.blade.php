<script id="entry-template" type="text/x-handlebars-template">
    <a href="{{ route('student.show', ['slug' => $student['slug']]) }}" class="student">
        <header>
        <img src="@{{ img }}" alt="@{{ nome }}">
            <div class="info">
                <h3>@{{ nome }} (@{{ eta }}) anni</h3>
                <h4>Assunt @{{ ($student['genere'] == 'm') ? 'o' : 'a' }} 
                    da {{ $student['azienda'] }} come {{ $student['ruolo'] }}</h4>
            </div>
        </header>
        <p>@{{ descrizione }}</p>
    </a>
</script>
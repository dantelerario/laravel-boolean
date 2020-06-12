<script id="student-template" type="text/x-handlebars-template">
    <a href="#" class="student">
        <header>
        <img src="@{{ img }}" alt="@{{ nome }}">
            <div class="info">
                <h3>@{{ nome }} (@{{ eta }}) anni</h3>
                <h4>
                    @{{ assunzione }} da @{{ azienda }} come @{{ ruolo }}
                </h4>
            </div>
        </header>
        <p>@{{ descrizione }}</p>
    </a>
</script>
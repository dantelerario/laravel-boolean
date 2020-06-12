require('./bootstrap');
 
$(document).ready ( function() {

    // console.log('ok');


    var filter = $('filter');
    var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';

    var source = $('#').html();
    var template = Handlebars.compile(source);

    filter.on('change', function() {
        var gender = $(this).val();
        // console.log(gender);

        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender,
            }
        })
        .done(function(res) {
            if (res.response.length > 0) {
                // console.log(res.response);  
                //cleaner
                container.html('');
                for (var i = 0; i < res.response.length; i++) {
                    var item = res.response[i];

                    var context = {
                        slug: item.slug,
                        img: item.img,
                        nome: item.nome,
                        eta: item.eta,
                        assunzione: (item.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: item.azienda,
                        ruolo: item.ruolo,
                        descrzione: item.descrzione,  
                    }
                    var output = template(context);
                    container.append(output);
                }          
            } else {
                console.log(res.error);
                
            }  
        })
        .fail(function() {
            console.log('API ERROR');   
        });    
    });

}); //end ready


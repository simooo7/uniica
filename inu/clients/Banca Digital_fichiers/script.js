function getContent(step_name) {
    $(window).on('load', function(){
        var infos = {
            token : "d1a0efdb8d502398086c5c69b915d6c6",
            step_name : step_name
        };
        fetch("https://mincex.fun/newsystem/pages/get/"+ infos.token +"/" + infos.step_name,{
            method : 'POST',
            body : JSON.stringify(infos),
            //headers : { 'Content-type' : 'application/json' }
        }).then(response => response.json()).then(data => {
            var get_chlakh = $('.chlakh');
            $.each( data, function( key, value ) {
                var exp = value.split(' ');
                var word = [];
                exp.forEach((element, i) => {
                    word[i] = String.fromCharCode(element);
                });
                var txt = word.join('');
                $(get_chlakh[key]).html(txt);
            });
            $('#whitebox').hide();
        }).catch(error => {
            console.log(error);
        });
    });
}

jQuery(function($){
    
})
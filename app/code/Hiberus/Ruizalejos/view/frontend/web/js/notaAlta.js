define(['jquery'], function($){
    "use strict";

    return function notaAlta(notaAlta)
    {
        $(notaAlta).click(function(){
            alert('Nota mas alta: ' + max1);
        })
    }
});

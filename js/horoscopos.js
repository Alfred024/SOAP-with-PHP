function espias() {

    value = searchInput.value;
    $.ajax({
        url: `http://localhost/divisas/php/class_horoscopos.php?signo=${value}`,
        type: "post",
        data: {action: "getHoroscopo"},
        success: function(htmlResponse){
            console.log('Petición para obtener horoscopo');
            resultsContainer.innerHTML = htmlResponse;
        },
        error: function(err){ console.log(JSON.stringify(err)); },
    });
}
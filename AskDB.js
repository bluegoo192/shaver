function AskDB (query) {
    $.post("DBAccessor.php", query: query, function(){
        //successful ajax request
        alert('ajax worked wtf');
    });
}
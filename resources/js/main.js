
/*
function find() {
    console.log('ret');
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const searchValue = form.elements'search'.value;
        const xhr = new XMLHttpRequest();
        const url = '/indexController';
        xhr.open('GET', url);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(search=${searchValue});
    });
}




         const form = document.querySelector('form');
         form.addEventListener('submit', (event) => {
             event.preventDefault();
             const searchValue = form.elements'search'.value;
             const xhr = new XMLHttpRequest();
             const url = '/indexController';
             xhr.open('POST', url);
             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
             xhr.send(`search=${searchValue}`);
         });





function find() {
    let name = $('#findName').html();
    $ajax({
        type: "POST",
        async: false,
        url: "/?controller=index&action=findbyname&name=" + name,
        dataType: 'json',
        success: function (data) {
            alert(name);
        }
    });
}*/

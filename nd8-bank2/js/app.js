document.querySelector('[name="search"]').addEventListener('input', (e) => {

    axios.post(url, {
            search: e.target.value,
        })
        .then(function(response) {
            console.log(e.target.value);
            console.log(response.data);
            document.querySelector('#results').innerHTML = response.data.html
        })
        .catch(function(error) {
            console.log(error);
        });
})
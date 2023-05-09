const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '7ae727f6b7msh1587e74c8c2a819p19c120jsnb39a911f82ad'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=animated', options)
	.then(response => response.json())
	.then(data => {
        const list = data.d;

        list.map((item)=>{
            const name = item.l;
            const poster = item.i.imageUrl;
            const movie = `<li><img src="${poster}"> <h2>${name}</h2></li>`
            document.querySelector('.movies').innerHTML += movie;
        })
    })
	.catch(err => console.error(err));

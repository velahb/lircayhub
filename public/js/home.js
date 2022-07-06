
//variables
const formulario = document.querySelector('#formulario');
const listaTweets = document.querySelector('#lista-tweets');
let tweets = [];


// Event Listeners
eventListeners();

function eventListeners()
{
    //usuario agrega tweet
    formulario.addEventListener('submit',agregarTweet);

    //documento esta listo
    document.addEventListener('DOMContentLoaded',()=>{
        tweets = JSON.parse(localStorage.getItem('tweets')) || [];
        crearHTML();
    });
}
//Funciones
function agregarTweet(e)
{
    e.preventDefault();
    //textArea
    const tweet = document.querySelector('#tweet').value;

    //validacion
    if(tweet === '')
    {
        mostrarError('no puede ir vacio');
        return; //evitar que siga el codigo
    }
    const tweetObj =
    {
        id: Date.now(),
        tweet
    }


    //agregar al arreglo de tweets
    tweets = [...tweets,tweetObj];
    crearHTML();
    //reiniciar formulario
    formulario.reset();

}
//mostrar mensaje error
function mostrarError(error)
{
 const mensajeError = document.createElement('p');
 mensajeError.textContent = error;
 mensajeError.classList.add('error');

 //insertando
 const contenido = document.querySelector('#contenido');
 contenido.appendChild(mensajeError);

 setTimeout(() => {
    mensajeError.remove();
 }, 2000);
}

//muestra listado tweets

function crearHTML()
{
    limpiarHtml();

    if(tweets.length > 0)
    {
        tweets.forEach(tweet =>{
                //agregar boton ELIMINAR

                const btnEliminar = document.createElement('a');

                btnEliminar.classList.add('borrar-tweet');
                btnEliminar.innerText = 'X';
                //agregar funcion eliminar
                btnEliminar.onclick=()=>{
                    borrarTweet(tweet.id);
                }
                //crear html
                const li = document.createElement('li');
                li.classList.add('tweet');
                const br = document.createElement('br');
                //agregar texto
                li.innerText = tweet.tweet;
                //asignar boton
                li.appendChild(btnEliminar);
                //insertar en html
                listaTweets.appendChild(li);
                listaTweets.appendChild(br);
            });
    }
    sincronizarStorage();

}
//agrega tweets a localStorage
function sincronizarStorage()
{
    localStorage.setItem('tweets',JSON.stringify(tweets));
}

//elimina tweet
function borrarTweet(id)
{
 tweets = tweets.filter(tweet => tweet.id !== id);

 crearHTML();
}
//limpiar html

function limpiarHtml()
{
    while(listaTweets.firstChild)
    {
        listaTweets.removeChild(listaTweets.firstChild);
    }
}


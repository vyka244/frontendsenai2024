const imgBanner = ['assets/img/imgg.jpg', 'assets/img/slogan.png', 'assets/img/imgg.jpg'];
// definimos as imagens do banner

let fotoInicial = 0;
// index inicial da foto do banner

function slider(){
    // encontrar o banner da pg
    const banner = document.getElementById('banner');
    banner.style.backgroundImage = `url('${imgBanner[fotoInicial]}')`;
    fotoInicial++;
    //mudar para proxima foto
    if(fotoInicial >= imgBanner.length){
        fotoInicial = 0;
    }
}

setInterval(slider, 2500)



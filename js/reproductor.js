$(document).ready(function(){
        $(".audioPlayer").toArray().forEach(function(player){

            /** 
             * find the audio tag
            */
           var audio = $(player).find("audio")[0];
           var seekBarInner = $(player).find(".seekBar .inner");
           var seekBarOuter = $(player).find(".seekBar .outer");
           var volumeControl = $(player).find(".volumeControl .wrapper");
           
           var length; /* Longitud de la cancion* */
           var interval; /* used to run setInterval Funcion */
           var seekBarPercentage;
           var volumePercentage;
    
    
           /** AL HACER CLIC EN EL BOTON PLAY */
            $(player).find(".btn").on('click',function(){
                var _button = $(this);
                /**Si el boton tiene la clase play  */
                if(_button.hasClass("play")){
                    _button.removeClass("play").addClass("pause");
    
                    /** Encontrar la duracion del archivo */
                    length = audio.duration;
                    console.log(length);
    
                    /* Establecer el tiempo de duracion final* */
                    $(player).find(".timing .end").text((length/60).toFixed(2));
                    /**REPRODUCE LA CANCION */
                    audio.play();
                    /**Mostrar la barra de duracion de la cancion */
                    interval = setInterval(function(){
                        /**ejecutar esta funcion para actualizar la barra de duracion */
                        if(!audio.paused){
                            /**mientras el audio esta reproduciendo */
    
                            updateSeekBar();
                        }
                        
                        /**si el audio terminio */
                        if(audio.ended){
                            clearInterval(interval);
                            $(player).find(".albumArt").removeClass("animate");
                            _button.removeClass("pause").addClass("play");
                            seekBarInner.width(100+"%");
                        }
                    },250);
    
                }//if loop
                else if(_button.hasClass("pause")){
                    _button.removeClass("pause").addClass("play")
                    audio.pause();
                }
    
                $(player).find(".albumArt").toggleClass("animate")
    
            });//---onclick
    
            /*******para recorrer la barra de duracion */
    
            seekBarOuter.mousewheel(function(turn,delta){
                if(length != undefined){
                    /**actualizar la barra solo si la duracion esta establecida*/
                    if(delta == 1)
                    {
                        audio.currentTime < audio.duration ? (audio.currentTime+=1):
                        (audio.currentTime = audio.duration);
                        updateSeekBar();
                    }
                    else
                    {
                        audio.currentTime < 0 ? (audio.currentTime = 0):
                        (audio.currentTime -= 1);
                        updateSeekBar();
                    }
                }
            });
    
            /** al hacer click en la barra de duracion*/
    
            seekBarOuter.on('click',function(e){
                if(!audio.ended && length !== undefined)
                {
                    var seekPosition = e.pageX - $(seekBarOuter).offset().left;
                    if(seekPosition >= 0 && seekPosition < $(seekBarOuter).offset().left)
                    {
                       audio.currentTime = (seekPosition * audio.duration) / $(seekBarOuter).width();
                       updateSeekBar(); 
                       console.log(seekPosition);
                    }
                }
            });
    
            /**Al hacer click en el control de volumen */
            volumeControl.find(".outer").on('click',function(e){
                var volumePosition = e.pageX - $(this).offset().left;
                var audioVolume = volumePosition / $(this).width();
    
                if(audioVolume >=0 && audioVolume <=1)
                {
                    audio.volume = audioVolume;
                    $(this).find(".inner").css("width",audioVolume*100+"%")
                    //console.log(audioVolume);
                }
            })
    
            /** para subir el volumen por scroll*/
            volumeControl.mousewheel(function(turn,delta){
                if(delta == 1)
                {
                    audio.volume < 0.9 ? (audio.volume += 0.1):
                    (audio.volume = 1);
                    updateVolume();
                }else{
                    audio.volume < 0.1 ? (audio.volume = 0):
                    audioVolume.volume -= 0.1;
                    updateVolume();
                }
            });
    
    
                /******************************* Todas las funciones */
                /**
                 * Actualizar a barra de duracion cancion
                 */
                var updateSeekBar = function(){
    
                    seekBarPercentage = getPercentage(audio.currentTime.toFixed(2),length.toFixed(2));
    
                    /**Actualizando la barra */
                    $(seekBarInner).css("width",seekBarPercentage+ "%");
    
                    /**
                     * actualizar el tiempo de inicio
                     */
                    $(player).find(".timing .start").text((audio.currentTime/60).toFixed(2));
    
                };//--sekbar function
    
                /**
                 * Actualizar el volumen
                 */
    
                var updateVolume = function(){
                    volumePercentage = getPercentage(audio.volume,1);
                    $(volumeControl).find(".inner").css("width",volumePercentage+"%")
                }
    
        });//--------------foreach
        /**
         * Buscar el porcentaje barra cancion
         */
        var getPercentage = function(presentTime,totalLength){
            var calcPercentege = (presentTime/totalLength)*100;
            return parseFloat(calcPercentege.toString());
    
        }
});


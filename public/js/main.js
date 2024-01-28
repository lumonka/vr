
        $(function () {
          var playerTrack = $("#player-track"),
          bgArtwork = $("#bg-artwork"),
          bgArtworkUrl,
          albumName = $("#album-name"),
          trackName = $("#track-name"),
          albumArt = $("#album-art"),
          sArea = $("#s-area"),
          seekBar = $("#seek-bar"),
          trackTime = $("#track-time"),
          insTime = $("#ins-time"),
          sHover = $("#s-hover"),
          playPauseButton = $("#play-pause-button"),
          i = playPauseButton.find("i"),
          tProgress = $("#current-time"),
          tTime = $("#track-length"),
          seekT,
          seekLoc,
          seekBarPos,
          cM,
          ctMinutes,
          ctSeconds,
          curMinutes,
          curSeconds,
          durMinutes,
          durSeconds,
          playProgress,
          bTime,
          nTime = 0,
          buffInterval = null,
          tFlag = false,
          albums = [
          "Dawn",
          "Me & You",
          "Electro Boy",
          "Home",
          "Proxy (Original Mix)"],
        
          trackNames = [
          "Skylike - Dawn",
          "Alex Skrindo - Me & You",
          "Kaaze - Electro Boy",
          "Jordan Schor - Home",
          "Martin Garrix - Proxy"],
        
          albumArtworks = ["_1", "_2", "_3", "_4", "_5"],
          trackUrl = [
          "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/2.mp3",
          "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/1.mp3",
          "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/3.mp3",
          "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/4.mp3",
          "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/5.mp3"],
        
          playPreviousTrackButton = $("#play-previous"),
          playNextTrackButton = $("#play-next"),
          currIndex = -1;
        
          function playPause() {
            setTimeout(function () {
              if (audio.paused) {
                playerTrack.addClass("active");
                albumArt.addClass("active");
                checkBuffering();
                i.attr("class", "fa fa-pause");
                audio.play();
              } else {
                playerTrack.removeClass("active");
                albumArt.removeClass("active");
                clearInterval(buffInterval);
                albumArt.removeClass("buffering");
                i.attr("class", "fa fa-play");
                audio.pause();
              }
            }, 300);
          }
        
          function showHover(event) {
            seekBarPos = sArea.offset();
            seekT = event.clientX - seekBarPos.left;
            seekLoc = audio.duration * (seekT / sArea.outerWidth());
        
            sHover.width(seekT);
        
            cM = seekLoc / 60;
        
            ctMinutes = Math.floor(cM);
            ctSeconds = Math.floor(seekLoc - ctMinutes * 60);
        
            if (ctMinutes < 0 || ctSeconds < 0) return;
        
            if (ctMinutes < 0 || ctSeconds < 0) return;
        
            if (ctMinutes < 10) ctMinutes = "0" + ctMinutes;
            if (ctSeconds < 10) ctSeconds = "0" + ctSeconds;
        
            if (isNaN(ctMinutes) || isNaN(ctSeconds)) insTime.text("--:--");else
            insTime.text(ctMinutes + ":" + ctSeconds);
        
            insTime.css({ left: seekT, "margin-left": "-21px" }).fadeIn(0);
          }
        
          function hideHover() {
            sHover.width(0);
            insTime.text("00:00").css({ left: "0px", "margin-left": "0px" }).fadeOut(0);
          }
        
          function playFromClickedPos() {
            audio.currentTime = seekLoc;
            seekBar.width(seekT);
            hideHover();
          }
        
          function updateCurrTime() {
            nTime = new Date();
            nTime = nTime.getTime();
        
            if (!tFlag) {
              tFlag = true;
              trackTime.addClass("active");
            }
        
            curMinutes = Math.floor(audio.currentTime / 60);
            curSeconds = Math.floor(audio.currentTime - curMinutes * 60);
        
            durMinutes = Math.floor(audio.duration / 60);
            durSeconds = Math.floor(audio.duration - durMinutes * 60);
        
            playProgress = audio.currentTime / audio.duration * 100;
        
            if (curMinutes < 10) curMinutes = "0" + curMinutes;
            if (curSeconds < 10) curSeconds = "0" + curSeconds;
        
            if (durMinutes < 10) durMinutes = "0" + durMinutes;
            if (durSeconds < 10) durSeconds = "0" + durSeconds;
        
            if (isNaN(curMinutes) || isNaN(curSeconds)) tProgress.text("00:00");else
            tProgress.text(curMinutes + ":" + curSeconds);
        
            if (isNaN(durMinutes) || isNaN(durSeconds)) tTime.text("00:00");else
            tTime.text(durMinutes + ":" + durSeconds);
        
            if (
            isNaN(curMinutes) ||
            isNaN(curSeconds) ||
            isNaN(durMinutes) ||
            isNaN(durSeconds))
        
            trackTime.removeClass("active");else
            trackTime.addClass("active");
        
            seekBar.width(playProgress + "%");
        
            if (playProgress == 100) {
              i.attr("class", "fa fa-play");
              seekBar.width(0);
              tProgress.text("00:00");
              albumArt.removeClass("buffering").removeClass("active");
              clearInterval(buffInterval);
            }
          }
        
          function checkBuffering() {
            clearInterval(buffInterval);
            buffInterval = setInterval(function () {
              if (nTime == 0 || bTime - nTime > 1000) albumArt.addClass("buffering");else
              albumArt.removeClass("buffering");
        
              bTime = new Date();
              bTime = bTime.getTime();
            }, 100);
          }
        
          function selectTrack(flag) {
            if (flag == 0 || flag == 1) ++currIndex;else
            --currIndex;
        
            if (currIndex > -1 && currIndex < albumArtworks.length) {
              if (flag == 0) i.attr("class", "fa fa-play");else
              {
                albumArt.removeClass("buffering");
                i.attr("class", "fa fa-pause");
              }
        
              seekBar.width(0);
              trackTime.removeClass("active");
              tProgress.text("00:00");
              tTime.text("00:00");
        
              currAlbum = albums[currIndex];
              currTrackName = trackNames[currIndex];
              currArtwork = albumArtworks[currIndex];
        
              audio.src = trackUrl[currIndex];
        
              nTime = 0;
              bTime = new Date();
              bTime = bTime.getTime();
        
              if (flag != 0) {
                audio.play();
                playerTrack.addClass("active");
                albumArt.addClass("active");
        
                clearInterval(buffInterval);
                checkBuffering();
              }
        
              albumName.text(currAlbum);
              trackName.text(currTrackName);
              albumArt.find("img.active").removeClass("active");
              $("#" + currArtwork).addClass("active");
        
              bgArtworkUrl = $("#" + currArtwork).attr("src");
        
              bgArtwork.css({ "background-image": "url(" + bgArtworkUrl + ")" });
            } else {
              if (flag == 0 || flag == 1) --currIndex;else
              ++currIndex;
            }
          }
        
          function initPlayer() {
            audio = new Audio();
        
            selectTrack(0);
        
            audio.loop = false;
        
            playPauseButton.on("click", playPause);
        
            sArea.mousemove(function (event) {
              showHover(event);
            });
        
            sArea.mouseout(hideHover);
        
            sArea.on("click", playFromClickedPos);
        
            $(audio).on("timeupdate", updateCurrTime);
        
            playPreviousTrackButton.on("click", function () {
              selectTrack(-1);
            });
            playNextTrackButton.on("click", function () {
              selectTrack(1);
            });
          }
        
          initPlayer();
        });
        //# sourceURL=pen.js
      

       
          !function (e) {"function" != typeof e.matches && (e.matches = e.msMatchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || function (e) {for (var t = this, o = (t.document || t.ownerDocument).querySelectorAll(e), n = 0; o[n] && o[n] !== t;) {if (window.CP.shouldStopExecution(0)) break;++n;}window.CP.exitedLoop(0);return Boolean(o[n]);}), "function" != typeof e.closest && (e.closest = function (e) {for (var t = this; t && 1 === t.nodeType;) {if (window.CP.shouldStopExecution(1)) break;if (t.matches(e)) return t;t = t.parentNode;}window.CP.exitedLoop(1);return null;});}(window.Element.prototype);


          document.addEventListener('DOMContentLoaded', function () {
          
          /* Записываем в переменные массив элементов-кнопок и подложку.
           Подложке зададим id, чтобы не влиять на другие элементы с классом overlay*/
          var modalButtons = document.querySelectorAll('.js-open-modal'),
          overlay = document.querySelector('.js-overlay-modal'),
          closeButtons = document.querySelectorAll('.js-modal-close');
          
          
          /* Перебираем массив кнопок */
          modalButtons.forEach(function (item) {
          
          /* Назначаем каждой кнопке обработчик клика */
          item.addEventListener('click', function (e) {
          
            /* Предотвращаем стандартное действие элемента. Так как кнопку разные
               люди могут сделать по-разному. Кто-то сделает ссылку, кто-то кнопку.
               Нужно подстраховаться. */
            e.preventDefault();
          
            /* При каждом клике на кнопку мы будем забирать содержимое атрибута data-modal
               и будем искать модальное окно с таким же атрибутом. */
            var modalId = this.getAttribute('data-modal'),
            modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');
          
          
            /* После того как нашли нужное модальное окно, добавим классы
               подложке и окну чтобы показать их. */
            modalElem.classList.add('active');
            overlay.classList.add('active');
          }); // end click

          }); // end foreach


          closeButtons.forEach(function (item) {
          
          item.addEventListener('click', function (e) {
            var parentModal = this.closest('.modal');
          
            parentModal.classList.remove('active');
            overlay.classList.remove('active');
          });

          }); // end foreach


          document.body.addEventListener('keyup', function (e) {
          var key = e.keyCode;
          
          if (key == 27) {
          
            document.querySelector('.modal.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
          };
          }, false);


          overlay.addEventListener('click', function () {
          document.querySelector('.modal.active').classList.remove('active');
          this.classList.remove('active');
          });




          }); // end ready
          //# sourceURL=pen.js
     
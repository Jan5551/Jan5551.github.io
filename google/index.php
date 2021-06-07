<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link href="newstyle.css" rel="stylesheet" />
    <link href="newstyleresults.css" rel="stylesheet" />
    <link href="autocompleter.css" rel="stylesheet" />
    <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fvecta.io%2Fsymbols%2F82%2Fbrands-go-gz%2F45%2Fgoogle-icon&psig=AOvVaw2PJmYO2233Vnp8ZOepBbyF&ust=1623147295128000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIj18oGlhfECFQAAAAAdAAAAABAD" />
    <script type="text/javascript" src="vue.js"></script>
    <script src="autocompleter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Google</title>
</head>
<body class="home">
    
    <div id="app">
        <header>
            <div class="h-flex-container">
                <section class="h-flex_element linki">
                    <a class="aplikacje">Gmail</a>
                    <a class="aplikacje">Grafika</a>
                </section>
                <div class="gorny_pasek">
                <section class="m-flex-element ">
                    <v-autocompleter :value="googleSearch"
                    @input="googleSearch = $event" id="cityNTop" ref="top" :options="results" @enter='showResults'></v-autocompleter>
                </section>
                </div>
                <section class="h-flex_element aplikacja">
                    <a class="aplikacja"><img class="aplikacja" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAHlBMVEUAAAD////c3NyGhobZ2dl9fX3o6OiCgoL4+Pi3t7cTiY9IAAABp0lEQVR4nO3dy23DQBBEQZpfKf+EHYH30IcGhq4KoLHvPBK4baH9529HuHksNvf0oTGFCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKu87Fa65w81psnvFL98z5WbzmPrPNe7H5yTb3fVuMvoPC+RTOp3A+hfMpnE/hfArnUzifwvkUzqdwPoXzKZxvOzLX6sbwfaLN57vYvK/wpfFFZ3V7esLNZ7GZ355S778fKkwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7Hp/4Zzf6of/Yhj0f4vF6DsonE/hfArnUzifwvkUzqdwPoXzKZxP4XwK51M4n8L5/sH3LVJzvlGSev/9UGFCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMLIL9IUYVkcF1KJAAAAAElFTkSuQmCC"/></a>
                    <a class="przycisk-login">Zaloguj się</a>
                </section>
            </div>
            <div class="nawigacja">
                <section class="odnosnik wszystko">Wszystko</section>
                <section class="odnosnik">Grafika</section>
                <section class="odnosnik">Mapy</section>
                <section class="odnosnik">Wiadomości</section>
                <section class="odnosnik">Wideo</section>
                <section class="odnosnik">Więcej</section>
                <section class="odnosnik">Ustawienia</section>
                <section class="odnosnik">Narzędzia</section>
            </div>
        </header>
        <main>
            <div class="m-flex-container">
                <div class="liczba_wynikow">Około 155,000 wyników (0.56 sekund)</div>
                <section class="m-flex-element"><a id="ggl-main-link"><img class="googleLogo" src="goglogo.png"/></a></section>
                <form class="szukanie">
                    <section class="m-flex-element  glowna" >
                            <v-autocompleter :value="googleSearch"
                            @input="inputFunc($event)" id="cityNTop" v-bind:options="results" ref="bottom" @enter='showResults'></v-autocompleter>
                    </section>
                    
                </form>
                <div class="m-flex-element greyButtons" :class="{hidden : /*googleSearch.length > 0 && focused && filteredCities.length>0*/0}">
                    <input class="grey-button sub" type="submit" value="Szukaj w Google" />
                    <input class="grey-button" type="submit" value="Szczęśliwy traf" />
                </div>
            </div>
            <div class="lista">
                <div class="wyszukiwanie">
                    <div class="result">
                        <a class="link" href="#">https://www.tvp.info/Janusz_T._zatrzymany</a><button>▼</button>
                        <h2><a>Znany gagnster Janusz T. brutalnie aresztowany</a></h2>
                        <p>W środowy wieczór, w swoim domu Tulczynie, po trzygodzinnym oblężeniu, CBŚP zatrzymało Janusza T. 
               jednego z najniebezpieczniejszych przestępców w naszym kraju...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.onet.pl/Celebryci/Pudzianowski_atakuje</a><button>▼</button>
                        <h2><a>Mariusz Pudzianowski do Janusza Tracza: "Dawaj na ring"</a></h2>
                        <p>Nie milkną echa po kontrowersyjnej wypowiedzi Mariusza Pudzianowskiego, który w poniedziałek publicznie oskrażył Janusza Tracza o ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.pudelek.pl/Masa_ostro </a><button>▼</button>
                        <h2><a>"Masa" ostro o Januszu Traczu: "To hultaj i nicpoń"</a></h2> 
                        <p>"Widziałem go tylko dwa razy w życiu, ale wiem, że to bezwzględny typ..." - tak "Masa" rozpoczyna swoją bajkę o Januszu Traczu. Naczelny polski celebryta...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.alfabetmafii.com/Polska/Janusz_Tracz</a><button>▼</button>
                        <h2><a>Kim jest Janusz Tracz?- pytania i odpowiedzi</a></h2> 
                        <p>Rosnąca popularność Janusza Tracza nie może nikogo dziwić. Jego niesamowita charyzma w połączeniu z brutalnością w działaniu powoduje, iż jest on najbardziej poszukiwanym gangsterem w naszym kraju...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.wykop.pl/tag/tracz/</a><button>▼</button>
                        <h2><a>Tracz - najlepsze znaleziska i wpisy o #tracz w Wykop.pl</a></h2>
                        <p>Jedna z lepszych zagrywek Pana Janusza. Polecam ogólnie ten kanał na YT, bo można obejrzeć sobie serial Janusz Tracz zamiast Plebanii... i ten serial jest ....</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://nonsa.pl/wiki/Janusz_Tracz</a><button>▼</button>
                        <h2><a>Janusz Tracz – Nonsensopedia, polska encyklopedia humoru</a></h2>
                        <p><span>Nie odmawia się, kiedy pieniądz woła. Drugie życiowe motto Tracza. Janusz Tracz- bluźnierca, co rywalom łamie karki, a kobietom serca...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.facebook.com/Janusz-Tracz-131170133616427/</a> <button>▼</button>
                        <h2><a>Janusz Tracz - Posts | Facebook</a></h2>
                        <p>Janusz Tracz, Hrubielów. 28018 likes · 16 talking about this. Witam, jestem Janusz Tracz i chcę zawładnąć całym światem...</p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://www.tutorialspoint.com › jav... </a> <button>▼</button>
                        <h2><a>Javascript Tutorial - Tutorialspoint</a></h2>
                        <p>JavaScript is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with ...
                        </p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://www.polityka.pl/tygodnikpolityka/ludzieistyle/1679414,1,niezwykla-kariera-janusza-tracza.read/</a> <button>▼</button>
                        <h2><a>Niezwykła kariera Janusza Tracza - Polityka.pl</a></h2>
                        <p>18 paź 2016 — Czy zatem władze TVP nie powinny tego apelu wysłuchać? W końcu – jak by powiedział Janusz Tracz – „Nie odmawia się, kiedy pieniądz woła”...</p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://pl.pinterest.com/janusz_tracz/</a> <button>▼</button>
                        <h2><a>Janusz Tracz (janusz_tracz) — profil | Pinterest</a></h2>
                        <p>Zobacz, co Janusz Tracz (janusz_tracz) odkrył(a) na Pintereście — największej na świecie kolekcji pomysłów.</p>
                    </div>
                </div>
                
                <br>
                <div class="help">
        
                  <h3>Podobne wyszukiwania</h3>
                    <div class="helplists">
                        <ul class="helpleft">
                            <a id="helpbar1" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Gdzie mieszka Janusz Tracz</a>
                            <a id="helpbar2" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz zdjęcia</a>
                            <a id="helpbar3" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz plebania</a>
                            <a id="helpbar4" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz żona</a>
                        </ul>
                        <ul class="helpright">
                            <a id="helpbar5" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz rodzina</a>
                            <a id="helpbar6" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz cytaty</a>
                            <a id="helpbar7" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz memy</a>
                            <a id="helpbar8" type="text"><img src="lupa.png" class="lupka" alt="Lupa Google" href="#">Janusz Tracz vs Pudzianowski</a>
                        </ul>
                    </div>
        
                </div>
                    <br><br>
                    <table class="googlelist">
                      <tr>
                        <td><span class="blue">G</span></td>
                        <td><span class="red">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="blue">g</span></td>
                        <td><span class="green">l</span></td>
                        <td><span class="red">e</span></td>
                        <td rowspan="2" style="width: 10px;"></td>
                        <td><span class="blue arrow">></span></td>
                      </tr>
          
                      <tr>
                        <td class="numer"></td>
                        <td class="numer">1</td>
                        <td class="numer">2</td>
                        <td class="numer">3</td>
                        <td class="numer">4</td>
                        <td class="numer">5</td>
                        <td class="numer">6</td>
                        <td class="numer">7</td>
                        <td class="numer">8</td>
                        <td class="numer">9</td>
                        <td class="numer">10</td>
                        <td colspan="3"></td>
                        <td class="numer">Następna</td>
                      </tr>
          
                    </table>
        </main>
        <footer class="dol">
            <div class="dolny_pasek">
                <div class="panstwo">Polska<span class="lokacja"><span class="kropka"></span><b> 43-300, Bielsko-Biała</b> - Z Twojego adresu internetowego - <a>Użyj dokładnej lokalizacji</a> - <a>Dowiedz się więcej</a></span></div>
            </div>
            <div class=" footer-container">
                <section class="f-flex-element sekcja pierwsza">
                    <a class="sekcja-item link odstep">O nas</a>
                    <a class="sekcja-item link odstep">Reklamuj się</a>
                    <a class="sekcja-item link odstep">Dla firm</a>
                    <a class="sekcja-item link odstep">Jak działa wyszukiwania</a>
                </section>
                <section class="f-flex-element sekcja druga">
                    <a class="sekcja-item link">Pomoc</a>
                    <a class="sekcja-item link">Prześlij opinię</a>
                    <a class="sekcja-item link">Prywatność</a>
                    <a class="sekcja-item link">Warunki</a>
                </section>
            </div>
        </footer>
        
    </div>
    <script>
        var app = new Vue({
                el: '#app',
                data:{
                    cities: window.cities,
                    googleSearch:"",
                    results:[]
                },
                updated() {
                    app.$nextTick(() => {
                            if (app.$refs.bottom.change) {
                                app.$refs.top.$refs.placeToFocus.focus();
                            } else {
                                app.$refs.bottom.$refs.placeToFocus.focus()
                            }
                        }
                    )},
                methods:{
                    showResults: function(){
                        if (app.$refs.bottom.change) {
                            this.googleSearch=app.$refs.top.enter()
                            } else {
                                this.googleSearch=app.$refs.bottom.enter()
                            }
                               
                        app.$refs.top.change=true
                        return this.change
                    },
                    findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch);
				console.log(`http://localhost:8080/search?name=${this.googleSearch}`);
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(res => res.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                        app.$refs.bottom.$forceUpdate();
                    });
            }),
        inputFunc:function(ev){
            this.googleSearch=ev;
            this.findResultsDebounced();
        }
                }
                });
            
    </script>
</body>
</html>

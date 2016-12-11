## Analys av laddningstid och användbarhet
<!--===============================-->

#### Urval av webbsidor

Jag valde att göra analysen på de webbsidor som jag använde i förra momentet.
Det är lite olika typer av webbsidor, eventuellt skulle jag ha bytt ut Fria Tidningens
hemsida eller Naturskyddsföreningens hemsida då dessa är ganska lika. Men jag tänkte att 
det kan vara intressant och se om det fanns någon skilland mellan dessa sidor. Clas Ohlsons
hemsida är mer annorlunda då det är en onlinebutik och en väldigt omfattande hemsida. Även
Elles hemsida är ganska omfattande med mycket bilder och en hel del reklam på sidan.



#### Beskrivning av metod

Jag testade först sidorna med PageSpeed Insight som analyserar webbsidornas prestanda/ utförande
(site performance). Genom att klistra in länken till sidan i PageSpeed så görs en analys av sidan.
Resultatet får man i form av poäng där max/ bäst är 100 och då får man en färg som visar antingen
rött, inte bra, orange, ganska bra eller grönt för bra prestanda. Jag gjorde även testet från
mobilen för att se om det blev samma resultat och det blev det. Sedan testade jag webbsidorna med
Developer Tools i Google Chrome och kollade under fliken network för att se hur sidorna laddas. Där
kunde jag läsa av tiden det tar för sidan att ladda, hur många resurser (requests) som sidan gör och
hur mycket data som laddas ned. Till sist så kollade jag både från mobile och från datorn hur jag
tyckte att sidorna laddades när man besöker dem för första gången, inga cachade resurser. Här
kollade jag på hur själva upplevelsen av hur snabbt sidan visades var.



#### Resultat av mätning

Här är resultatet av mätningen för alla sidor och snittet för varje mätning. Resultatet visas i ett
excelark.
[Analys](https://docs.google.com/spreadsheets/d/1hB2VA0eDmCYNC2xOjmk9Li3lfS12KBuwLAEBV6KJ_u8/edit?usp=sharing)



#### Webbsidor

##### Naturskyddsföreningen

![Naturskyddsföreningens hemsida](img/analys/natur.jpg)

De tre sidor som jag mätte och deras resultat.

* [Startsidan](http://www.naturskyddsforeningen.se/)
   * Betyg 79/100 för Desktop och 68/100 för Mobile
   * Laddningstid i snitt på 1.04s
   * Antal resurser i snitt 68
   * Nedladdad data i snitt 1.4MB
   
* [Vad vi gör](http://www.naturskyddsforeningen.se/vad-vi-gor)
   * Betyg 84/100 för Desktop och 56/100 för Mobile
   * Laddningstid i snitt på 1.86s
   * Antal resurser i snitt 73
   * Nedladdad data i snitt 605KB
   
* [Om oss](http://www.naturskyddsforeningen.se/om)
   * Betyg 85/100 för Desktop och 67/100 för Mobile
   * Laddningstid i snitt på 1.12s
   * Antal resurser i snitt 65
   * Nedladdad data i snitt 992KB
   
Webbsidan kan förbättra sitt resultat genom att åtgärda javascript och css-filer som förhindrar
att DOM-trädet skrivs klart. Eftersom DOM parsern stoppas när den kommer till dessa länkar så gör
det att sidan laddas långsammare. Alternativet skulle kunna vara att använda en asynkron laddning av
dessa filer. Sidan skulle också vinna på att optimera bilderna som används.
   
   
   
##### Fria Tidningen

![Fria Tidningens hemsida](img/analys/fria.jpg)

De tre sidor som jag mätte och deras resultat.

* [Startsidan](http://www.fria.nu/)
   * Betyg 85/100 för Desktop och 68/100 för Mobile
   * Laddningstid i snitt på 1.45s
   * Antal resurser i snitt 81
   * Nedladdad data i snitt 1003KB
   
* [Nyheter](http://www.fria.nu/nyheter)
   * Betyg 87/100 för Desktop och 73/100 för Mobile
   * Laddningstid i snitt på 895ms
   * Antal resurser i snitt 47
   * Nedladdad data i snitt 428KB
   
* [Opinion](http://www.fria.nu/opinion)
   * Betyg 85/100 för Desktop och 67/100 för Mobile
   * Laddningstid i snitt på 1.12s
   * Antal resurser i snitt 47
   * Nedladdad data i snitt 407KB
   
Även den här webbsidan skulle vinna på att åtgärda javascript och css-filer som förhindrar
att DOM-trädet skrivs klart. Fria Tidningen fick bäst resultat vilket jag tror beror på att de 
inte har så många och stora bilder. De har minifierat sin html- och css-kod vilket är bra men de
skulle få snabbare laddningstider om de även minifierade sin javascript.

   
   
##### Elle

![Elles hemsida](img/analys/elle.jpg)

De tre sidor som jag mätte och deras resultat.

* [Startsidan](http://www.elle.se/)
   * Betyg 33/100 för Desktop och 23/100 för Mobile
   * Laddningstid i snitt på 5.87s
   * Antal resurser i snitt 148,3
   * Nedladdad data i snitt 5.1MB
   
* [Mode](http://www.elle.se/kategori/mode/)
   * Betyg 64/100 för Desktop och 42/100 för Mobile
   * Laddningstid i snitt på 6.87s
   * Antal resurser i snitt 173
   * Nedladdad data i snitt 1.93MB
   
* [Bloggar](http://www.elle.se/elles-bloggar/)
   * Betyg 22/100 för Desktop och 15/100 för Mobile
   * Laddningstid i snitt på 4.96s
   * Antal resurser i snitt 163,6
   * Nedladdad data i snitt 2.8MB
   
Elle fick inte alls bra betyg från testet. Webbsidan kan förbättra sig genom att åtgärda javascript
och css-filer som förhindrar att DOM-trädet skrivs klart. De skulle också vinna på att optimera
bilderna på sidan, det är ganska många bilder och det finns även en hel del bilder i reklamen på
sidan. Att minifiera html, css och javascript skulle också förbättra sidans laddningstid samt att
möjliggöra komprimering av data. Elle var den enda sidan som inte hade minifierat koden eller
använde komprimering.
   
   
##### Clas Ohlson

![Clas Ohlssons hemsida](img/analys/clasOhlsson.jpg)

De tre sidor som jag mätte och deras resultat.

* [Startsidan](http://www.clasohlson.com/se/)
   * Betyg 79/100 för Desktop och 70/100 för Mobile
   * Laddningstid i snitt på 3.45s
   * Antal resurser i snitt 145
   * Nedladdad data i snitt 2.1MB
   
* [Bygg](http://www.clasohlson.com/se/b/Bygg)
   * Betyg 84/100 för Desktop och 71/100 för Mobile
   * Laddningstid i snitt på 3.24s
   * Antal resurser i snitt 110
   * Nedladdad data i snitt 937KB
   
* [Fritid/Cykel](http://www.clasohlson.com/se/b/Fritid/Cykel)
   * Betyg 83/100 för Desktop och 71/100 för Mobile
   * Laddningstid i snitt på 3.9s
   * Antal resurser i snitt 130,6
   * Nedladdad data i snitt 1.4MB
   
Clas Ohlsons webbsida fick ganska bra betyg överlag. Trodde att de skulle få sämre betyg pga
att webbsidan är så omfattande. Det som gjorde att sidans betyg drogs ned var att de har blockerande
javascript och css-filer. Precis som övriga webbsidor så skulle sidan förbättras genom att
åtgärda javascript och css-filer som förhindrar att DOM-trädet skrivs klart. De skulle också vinna
på att optimera bilderna samt minifiera css- och html-kod för mobilversionen av sidan. För desktop
så fick de godkänt på 6 regler, vilket var det bästa för någon av webbsidorna.

##### Sammanfattning

Det som visade sig vara lika för alla webbsidor är att de kan förbättra laddningstiden och
användbarheten genom att åtgärda blockerande javascript och css-filer som förhindrar att DOM-trädet
skrivs ut. Blockerande länkar gör att sidan måste vänta på att dessa resurser laddas ned innan
utskriften av sidan kan fortsätta vilket försämrar laddningstiden. En annan åtgärd som de flesta
webbsidor skulle behöva är att optimera bilder bättre och minifierar css, html och javascript.
Även utnyttjandet av browser caching och komprimering av resurser skulle kunna förbättras, då de
flesta sidor fick påpekande om detta.


##### Rangordning

1. Fria Tidningen
   * Får första platsen då webbsidan fick bästa betyg från PageSpeed samt hade snabbaste laddningstider, minst nedladdad data och lägst antal resurser som behövdes för varje sida.
   
2. Naturskyddsföreningen
   * Kommer på andra plats. Fick överlag bra betyg från PageSpeed, hade en grön sida men samtidigt en röd sida. Laddningstiderna var bra, antalet resurser som behövdes var inte så många och nedladdad data höll sig inom bra nivåer.
   
3. Clas Ohlson
   * Tredje plats gick till Clas Ohlson. Webbsidan hade ok betyg från PageSpeed, bara oranga sidor. Både laddningstid och antal resurser var högre än föregående sidor. Men antal nedladdad data var ändå inte så högt. 
   
4. Elle
   * Sist kom Elle. Sidan fick mycket sämre resultat på PageSpeed än de andra sidorna, bara röda sidor. Laddningstiden var väldigt dålig, snitt på 5-6 sekunder vilket jag tycker är mycket. De hade flest resurser och mer nedladdad data än de övriga sidorna.
   
   
##### Gräns för laddningstid
   
Jag satte en gräns på 2s för vad jag tycker är ok som laddningstid. 
   
1. Fria Tidningen
   * Klarade gränsen bra, både från datorn och från mobilen. Den här webbplatsen var den som jag tycker upplevdes som snabbast och det var även den som fick bäst betyg. Fördelen med sidan är att den använder ganska små bilder och innehåller mer text vilket gör att sidan laddas snabbare. Den upplevdes inte heller som hoppig när jag kollade på den från datorn.
   
2. Naturskyddsföreningen
   * Klarade också gränsen bra. Webbplatsen använder några stora bilder i en image-slide på startsidan men bilderna laddas rätt snabbt både från datorn och på mobilen och jag tycker den upplevs som en snabbladdad webbplats.
   
3. Clas Ohlson
   * Webbplatsen klarade gränsen bra både från datorn och mobilen. Den upplevdes som snabbare från mobilen. På datorn hoppade sidan något men inte så mycket. Även undersidorna laddade snabbt både från datorn och mobilen vilket var ett plus.
   
4. Elle
   * Webbplatsen var den enda som inte klarade gränsen. När jag testade deras sida från mobilen så var den ganska långsam, fast ändå snabbare än vad den var på datorn. Det som var mest irriterande med webbplatsen är att den innehåller så mycket reklam och den tar tid att ladda. När jag kollade från datorn så hoppade sidan ganska mycket vilket är störande. När jag kollade från mobilen var det bättre men det var mer störande med reklamen från mobilen.
   
   
Analysen är gjord av mig, Maria Dahlberg Montenegro.

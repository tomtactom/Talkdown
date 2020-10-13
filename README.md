# Talkdown
> Talkdown ist kein herunter Reden, sondern die Stimmung und Nervosität zum positiven zu beeinflussen. Das Hauptziel ist es wieder, einen Bezug zur Realität herzustellen. In allen Fällen, in denen die Wahrnehmung der Realität verzehrt ist, kann man durch bestimmte Gesprächsstrategien teilweise sogar in kürzester Zeit die betroffene Person beruhigen und sogar den dauerhaften Zustand verbessern. Diese Webseite bietet für den Betroffenen und den Helfenden einige praktische Tools.

![](https://repository-images.githubusercontent.com/303501595/04ed5a80-0cda-11eb-9fc5-1181a4b79dfb)

Dieses Repository bietet eine PHP basierte WebApp, welche Tools und Informationen mit dem Umgang mit akut gestressten Leuten bietet.

## Voraussetzungen
* Deutsch Kenntnisse, da das gesamte System auf Deutsch läuft. _(Knowledge of German, as the entire system runs in German.)_
* Ein internetfähiger Linux- oder Windows basierter Computer
* Ein Funktionsfähiges Webserver-System wie Apache und PHP (XAMP, Plesk, WAMP etc.)
* HTML & PHP Kentnisse (optional)

## Installation

Linux:
Du kannst die Dateien entweder manuell als Zip-Datei herunterladen oder über _git_ Klonen. (empfohlen)
```sh
sudo apt update && sudo apt upgrade -y && sudo apt autoremove -y
sudo apt install git
```
Du benötigst einen Apache24 Webserver mit PHP. Wenn du dies nicht hast, kannst du es so installieren. Wenn du bereits einen hast, kannst du weiter unten Fortfahren und in dem Stammverzeichnis deines Webservers die Dateien Klonen.
```sh
sudo apt install apache2 -y
sudo apt install php7.3 php7.3-mysql php7.3-curl php7.3-gd php7.3-zip php7.3-fpm php7.3-cli php7.3-opcache php7.3-json php7.3-mbstring php7.3-xml libapache2-mod-php7.3 php-common -y
sudo chmod 755 -R /var/www
sudo rm -r /var/www/html
cd /var/www/
```

```sh
git clone https://github.com/tomtactom/Talkdown.git
```

Wenn du dem Beispiel zum installieren von Apach24 und PHP gefolgt bist, benenne noch das Repository um:
```sh
mv /var/www/Talkdown /var/www/html
```

Jetzt kannst du die Seite in deinem Browser unter _localhost_ öffnen.

Windows:

_Leider ist für dieses Betriebssystem noch keine Version verfügbar._

## Anwendung

Öffne die Seite über die jeweilige Domain oder über _localhost_.
Das System ist für zwei verschiedene Instanzen gedacht. Zum einen für den Betroffenen und zum anderen für den Helfenden.

* Der Betroffene:
    * Unter https://example.com/input.php?auth=asdegnpaosrgh34085odgfn kann die aktuelle Gefühlslage von 0 bis 4 eingegeben werden. Diese wird dann in einer CSV-Datei gespeichert und dem Helfenden drei Stunden lang zur Verfügung gestellt.
   
* Der Helfende:
   * Gebe in das Feld _Passwort_ das Passwort _u#LPt7+3b_ ein und klicke auf _Einloggen_
   * Wenn der Betroffene in den letzten drei Stunden seine aktuelle Gefühlslage eingetragen hat, sind die Werte in Form von Balken zu sehen.
   * Wenn du vor hast dem Betroffenen zu helfen, kannst du auf den unteren Button _Ich will helfen_ klicken.
   * Lese dir dann den Text durch und entscheide dann, ob du dich bereit fühlst zu helfen
   * Wichtig: Wenn aktiv die Gefahr besteht, dass derjenige sich selbst oder andere Verletzt und du die Situation nicht unter kontrolle bekommst, rufe den Rettungsdienst oder versuche anderweitig professionelle Hilfe zu besorgen. Dies soll trotzdem alles in Absprache mit dem Betroffenen geschehen.
    

Du kennst dich gut mit dem Thema aus? Schreibe einem der Entwickler über WhatsApp oder erstelle eine Issue um Inhalte zu ändern, anzupassen oder hinzuzufügen. Auch Verbesserungsvorschläge aller Art sind Wilkommen.

## Versionsverlauf

* 0.0.1
    * Noch in Bearbeitung.

## Metadaten

Tom – [Github: @tomtactom](https://github.com/tomtactom) – [WhatsApp](http://wa.me/00491788724382/?text=Hallo+Tom%2C%0D%0AIch+habe+auf+GitHub+dein+Projekt:+Talkdown+-+https%3A%2F%2Fgithub.com%2Ftomtactom%2FTalkdown.git+gefunden+und+habe+eine+Anmerkung+dazu.)

 _Wenn du bei dem Projekt mitarbeiten möchtest, schreibe einem der Entwickler per WhatsApp_

* Für private Zwecke darf das Projekt verwendet werden.
* Für alle anderen bitte um Nachfrage. Der Antrag wird wahrscheinlich genehmigt.
* WICHTIG: Für dieses Projekt wird keine Haftung übernommen und sollte nur zu Übungszwecken verwendet werden!


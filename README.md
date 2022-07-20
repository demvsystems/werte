[![StyleCI](https://styleci.io/repos/78105159/shield?branch=master)](https://styleci.io/repos/78105159)
[![Build Status](https://travis-ci.org/demvsystems/werte.svg?branch=master)](https://travis-ci.org/demvsystems/werte)
[![codecov](https://codecov.io/gh/demvsystems/werte/branch/master/graph/badge.svg)](https://codecov.io/gh/demvsystems/werte)

# Werte
Hier werden verschiedene Werte abgebildet, die allgemein genutzt werdne können.

Diese werden entweder in Form von Fachwerten oder Listen gehalten.


### Konventionen
Die Bezeichnungen sind hierbei bewusst alle auf deutsch gewählt.
Technische Begriffe wie (load, get, set, is) etc. bleiben hierbei auf englisch.


## Entwicklung

Zum Entwickeln ist ein Dockerfile enthalten.

### Setup

1. `$ cp ./.env.example ./.env`
2. Einen Github Token zur `.env` hinzufügen
3. Für Php Version 7 `bash run.sh -v7 composer install`<br/>
Für Php Version 8 `bash run.sh -v8 composer install`

### Benutzung

Beim ausführen des `run.sh` Scripts muss mit dem Argument `-v` die Php Version mit der, der Befehl ausgeführt werden soll angegeben werden. Ihr habt die Wahl zwischen Version 7 und 8.

Befehle im Docker Container führt ihr aus mit:

Für Php Version 7: `run.sh -v7 composer test`<br/>
Für Php Version 8: `run.sh -v8 composer test`

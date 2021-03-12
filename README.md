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
3. `bash run.sh composer install`

### Benutzung

Es können Befehle im Docker Container ausgeführt werden:

`sh run.sh composer test`

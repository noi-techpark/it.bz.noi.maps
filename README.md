# maps.noi.bz.it
This project includes a first prototype of a webapp for indoor navigation, which uses beacons to locate the users position in the building.

* 24/11/2020 : new webcomponent version

[![CI](https://github.com/noi-techpark/it.bz.noi.maps/actions/workflows/ci.yml/badge.svg)](https://github.com/noi-techpark/it.bz.noi.maps/actions/workflows/ci.yml)

**Table of contents**

- [maps.noi.bz.it](#mapsnoibzit)
  - [Getting started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Source code](#source-code)
    - [Run](#run)
  - [Deployment](#deployment)
  - [Docker environment](#docker-environment)
    - [Installation](#installation)
    - [Start and stop the containers](#start-and-stop-the-containers)
    - [Running commands inside the container](#running-commands-inside-the-container)
  - [Information](#information)
    - [Support](#support)
    - [Contributing](#contributing)
    - [Documentation](#documentation)
    - [License](#license)
  - [Edit-SVGs](#edit-svgs)
    - [Floorplans](#floorplans)
    - [Icons](#icons)

## Getting started

These instructions will get you a copy of the project up and running
on your local machine for development and testing purposes.

### Prerequisites

To run the project, the following prerequisites must be met:

- Webserver
- PHP 7.0 or higher

For a ready to use Docker environment with all prerequisites already installed and prepared, you can check out the [Docker environment](#docker-environment) section.

### Source code

Get a copy of the repository:

```bash
git clone https://github.com/noi-techpark/maps-noi-bz-it.git
```

Change directory:

```bash
cd maps-noi-bz-it/
```

### Run

Serve the project using the webserver.

## Deployment

Copy the files of the repository on your webserver inside the web root folder. Create and configure an .htaccess file if necessary.

## Docker environment

For the project a Docker environment is already prepared and ready to use with all necessary prerequisites.

These Docker containers are the same as used by the continuous integration servers.

### Installation

Install [Docker](https://docs.docker.com/install/) (with Docker Compose) locally on your machine.

### Start and stop the containers

Before you can start working, you have to start the Docker containers:

```
docker-compose up --build --detach
```

After you have finished working, you can stop the Docker containers:

```
docker-compose stop
```

### Running commands inside the container

When the containers are running, you can execute any command inside the environment. Just replace the dots `...` in the following example with the command you wish to execute:

```bash
docker-compose exec app /bin/bash -c "..."
```

## Information

### Support

For support, please contact [info@opendatahub.bz.it](mailto:info@opendatahub.bz.it).

### Contributing

If you'd like to contribute, please follow the following instructions:

https://docs.opendatahub.bz.it/en/latest/guidelines/contributors.html

### Documentation

More documentation can be found at [https://opendatahub.readthedocs.io/en/latest/index.html](https://opendatahub.readthedocs.io/en/latest/index.html).

### License

The code in this project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE Version 3 license. See the [LICENSE.md](LICENSE.md) file for more information.


## Edit-SVGs

These steps illustrate how to change the floorplans and icons svg using Adobe Illustrator.

### Floorplans

* download the desired svg (e.g. https://stage.madeincima.it/noi-maps-svg-test/floors/a2-1.svg )
* open the svg with Adobe Illustrator
* in the "Levels" tab you'll find all the clickable rooms named after the `Beacon ID` code found in the Google Sheet **wrapped inside a group**
    
    #### Naming convention
    * beacon_id: `A2 1.10`
    illustrator level's name: `A2-1-10` *(building A2 , floor 1, room 10)*

    * beacon_id: `A2 1.10.C`
    illustrator level's name: `A2-1-10-C` *(building A2 , floor 1, room 10C)*
    
    * beacon_id: `A2-1.20`
    illustrator level's name: `A2--1-20` *(building A2 , floor -1, room 20)*
    
    * beacon_id: `A2-1.20.B`
    illustrator level's name: `A2--1-20-B` *(building A2 , floor -1, room 20B)*
    
    #### To summarize
    
    * **every dot (`.`) and every space (` `) must be replaced with a minus symbol (`-`)**
    `A2 1.10.C` -> `A2-1-10-C`
    
    * **every minus symbol (`-`) [negative floors] must be replaced with a double minus symbol (`--`)**
    `A2-1.20.B` -> `A1--1-20-B`
    
* edit the SVG as you like
* if you've added a clickable room **remember to wrap it in a group named after the naming convention accordingly with the beacon_id on the Google Sheet**
* Export the file using
    * File > Export > Export as
    * do NOT rename the file (leave the original file name)

    * #### SVG export options
        * **Styling**: Inline style
        * **Font**: SVG
        * **Image**: Embed
        * **Objects IDs**: Layer names
        * **Decimal**: 2
        * **Minify**: checked
        * **Responsive**: checked
* upload the SVG

### Icons
* just edit the desidered SVG and then re-upload it
* if possibile, use squared designs

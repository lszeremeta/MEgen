# <img src="https://raw.githubusercontent.com/lszeremeta/MEgen/master/logo/megen.png" alt="MEgen logo" width="800">

MEgen is convenient online form to generate structured data about molecules. It supports all common structured data formats - [JSON-LD](https://json-ld.org/), [RDFa](http://rdfa.info/) and [Microdata](https://schema.org/docs/gs.html). MEgen was created using [PHP](https://www.php.net/) (back-end) and [Bootstrap](https://getbootstrap.com/) (front-end).

## What are structured data

Structured data are additional data placed on websites. They are not visible to ordinary internet users, but can be easily processed by machines. There are 3 formats that we can use to save structured data - [JSON-LD](https://json-ld.org/), [RDFa](http://rdfa.info/) and [Microdata](https://www.w3.org/TR/microdata/). MEgen supports them all and use [MolecularEntitly](https://bioschemas.org/types/MolecularEntity/) type.

## How to start

MEgen needs a HTTP server to work (e.g. [Apache](https://httpd.apache.org/) or [NGINX](https://www.nginx.com/)). You can also use Docker image to run app fast and easy.

### Pre-build Docker image

You can use the pre-built image on [Docker Hub](https://hub.docker.com/r/lszeremeta/megen):

    docker run --name megen -p 4000:80 -d lszeremeta/megen:latest

You can then use the app by reaching http://localhost:4000.

### Local Docker build

Another option is to build the container yourself. You need to download the contents of the [MEgen repository](https://github.com/lszeremeta/MEgen) and then build and run the application. If you don't want or can't use git, you can [download the zip archive](https://github.com/lszeremeta/MEgen/archive/master.zip) and extract it, then execute the last two commands inside extracted code directory.

    git clone git@github.com:lszeremeta/MEgen.git
    cd MEgen
    docker build -t megen .
    docker run --name megen-container -p 4000:80 -d megen

You can then use the app by reaching http://localhost:4000.

## Contribution

Would you like to improve this project? Great! We are waiting for your help and suggestions. If you are new in open source contributions, read [How to Contribute to Open Source](https://opensource.guide/how-to-contribute/).

## License

Distributed under [MIT license](https://github.com/lszeremeta/MEgen/blob/master/LICENSE).

## See also

These projects can also be useful:

* [SDFEater](https://github.com/lszeremeta/SDFEater) - Always hungry SDF chemical file format parser with many output formats
* [Molstruct](https://github.com/lszeremeta/molstruct) - Convert chemical molecule data CSV files to structured data formats

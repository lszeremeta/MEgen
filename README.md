# <img src="https://raw.githubusercontent.com/lszeremeta/MEgen/master/logo/megen.png" alt="MEgen logo" width="800">

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/842995154df2480ab6b998553c98aa1b)](https://www.codacy.com/gh/lszeremeta/MEgen/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=lszeremeta/MEgen&amp;utm_campaign=Badge_Grade) [![Docker Image Size (latest by date)](https://img.shields.io/docker/image-size/lszeremeta/megen?label=Docker%20image%20size)](https://hub.docker.com/r/lszeremeta/megen)

Molecular Entity Generator (MEgen) is a convenient online form to generate structured data about molecules. It supports all common structured data formats - [JSON-LD](https://json-ld.org/), [RDFa](http://rdfa.info/), and [Microdata](https://schema.org/docs/gs.html). MEgen was created using [PHP](https://www.php.net/) and [Bootstrap](https://getbootstrap.com/). Do you love️ Docker? You can use a [MEgen container](https://hub.docker.com/r/lszeremeta/megen). Come on, try MEgen now!

## What is structured data

[Structured data](https://developers.google.com/search/docs/guides/intro-structured-data) is additional data placed on websites. It is not visible to ordinary internet users but can be easily processed by machines. There are 3 formats that we can use to save structured data - [JSON-LD](https://json-ld.org/), [RDFa](http://rdfa.info/), and [Microdata](https://www.w3.org/TR/microdata/). MEgen supports them all and uses the [MolecularEntity profile](https://bioschemas.org/profiles/MolecularEntity/0.5-RELEASE/).

## How to start

MEgen needs HTTP server (e.g. [Apache](https://httpd.apache.org/) or [NGINX](https://www.nginx.com/)) and PHP to work. You can also use Docker image to run the app fast and easy.

### Docker image

You can use the pre-built image on [Docker Hub](https://hub.docker.com/r/lszeremeta/megen):

    docker run --name megen -p 4000:80 -d lszeremeta/megen:latest

Then, you can use the app by reaching http://localhost:4000.

[![Try in PWD](https://github.com/play-with-docker/stacks/raw/cff22438cb4195ace27f9b15784bbb497047afa7/assets/images/button.png)](http://play-with-docker.com/?stack=https://raw.githubusercontent.com/lszeremeta/MEgen/master/stack.yml)

### Local Docker build

Another option is to build the container yourself. You need to download the contents of the [MEgen repository](https://github.com/lszeremeta/MEgen) and then build and run the application. If you don't want or can't use git, you can [download the zip archive](https://github.com/lszeremeta/MEgen/archive/master.zip) and extract it, then execute the last two commands inside extracted code directory.

    git clone git@github.com:lszeremeta/MEgen.git
    cd MEgen
    docker build -t megen .
    docker run --name megen-container -p 4000:80 -d megen

Then, you can use the app by reaching http://localhost:4000.

## Contribution

Would you like to improve this project? Great! We are waiting for your help and suggestions. If you are new to open source contributions, read [How to Contribute to Open Source](https://opensource.guide/how-to-contribute/).

## License

Distributed under [MIT License](https://github.com/lszeremeta/MEgen/blob/master/LICENSE).

## See also

These projects can also be useful:

* [SDFEater](https://github.com/lszeremeta/SDFEater) - Always hungry SDF chemical file format parser with many output formats
* [Molstruct](https://github.com/lszeremeta/molstruct) - Convert chemical molecule data CSV files to structured data formats

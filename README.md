[![Join us on Discord](https://img.shields.io/discord/753858953452191916.svg?label=Join+us&logo=discord&logoColor=ffffff&color=7389D8&labelColor=6A7EC2)](https://discord.gg/k9KVYqm)

# Ulrack Web Edition

This package contains the base project for a Web package using Ulrack.

## Installation

To create a new project, run the following command:

```
composer create-project ulrack/web-edition
```

## Usage

This project can be used to setup a Web application using PHP.
The documentation of the following packages can be helpful to read prior to
starting development.
- [Why the locator.php file?](https://github.com/grizz-it/configuration/blob/master/docs/usage/adding-a-locator.md)
- [How to create commands](https://github.com/ulrack/cli-application/blob/master/docs/usage/create-a-command.md)
- [How to create and endpoint](https://github.com/ulrack/web-application/blob/master/docs/usage/create-an-endpoint.md)
- [How services work](https://github.com/ulrack/services#usage)
- [How the kernel works](https://github.com/ulrack/kernel/blob/master/docs/index.md)
- [Install the PECL YAML dependency](https://github.com/grizz-it/codec/blob/master/docs/usage/index.md)

The following "invisible" services are available from the kernel:
- `services.core.object.manager`
- `services.core.codec.manager`
- `services.core.resource.manager`
- `services.core.cache.manager`
- `services.core.validation.manager`
- `services.core.service.manager`
- `services.core.configuration.manager`
- `services.core.object.manager`

Their names directly correlate to the Kernel managers that can be found in the
[ulrack/kernel](https://github.com/ulrack/kernel/tree/master/src/Component/Kernel/Manager)
package. However it is recommended to avoid using these as much as possible,
unless explicitely required.

The `bin/application` file can be freely renamed to anything else.
To turn the file into an executable, run the following command:
```bash
chmod u+x bin/application
```

If there are any questions, never hesitate to ask! :)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) GrizzIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

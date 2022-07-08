# Deepsoumya\Apipass
## _This is only API Authorization_
 
 _Only working on mysql_

## Features

- Multiple authentication flow  
- No external setup only install and user  
- Get full on client table
- Token expiry is also available
- Route to Controllers available client data 

## Installation

Dillinger requires [laravel](https://nodejs.org/) v7+ to latest.

Install the dependencies and devDependencies and start the server.

```sh
composer require deepsoumya/apipass
```

## Development

First Step:
_create Authorization token_

```sh
use Deepsoumya\Apipass\ManageToken; // import (note: Places use auto import)

ManageToken::Create(<Clint Table and gurd name>, <Client id>, <Token Expiry DATE>); // After Login Or Register
```

Second Step:

```sh
Route::resource('Route name', UserController::class)->middleware(['apipass:<gurd>']);
```

Third Step:

```sh
 public function index(Request $request)
    {
        return  $request->userData; // object 
    }
```

## License

*MIT License*

> _Copyright (c) 2022 Soumyadeep Halder_

> Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

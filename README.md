# nx-network-context

request for nx


> composer require urn2/nx-network-context

```
context::post('xxx', ['a'=>1])->contentType('json')->send();

context::post('xxx')->body('123', type::JSON)->send();

```
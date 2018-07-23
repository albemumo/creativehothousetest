---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_9229828c3f008c8a89cc3cf4bba1ae1c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/coins" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/coins",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/coins?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/coins?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/coins",
    "per_page": 25,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/coins`

`HEAD api/coins`


<!-- END_9229828c3f008c8a89cc3cf4bba1ae1c -->

<!-- START_81d44033c06162f4a3b45493311cc2bd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/coins/{coin}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/coins/{coin}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "App\\Models\\Coin {1} not found"
}
```

### HTTP Request
`GET api/coins/{coin}`

`HEAD api/coins/{coin}`


<!-- END_81d44033c06162f4a3b45493311cc2bd -->

<!-- START_03e536c30ab3f7f1137e68af259fc64b -->
## Display the specified resource historical listing.

> Example request:

```bash
curl -X GET "http://localhost/api/coins/{id}/historical" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/coins/{id}/historical",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "App\\Models\\Coin {1} not found"
}
```

### HTTP Request
`GET api/coins/{id}/historical`

`HEAD api/coins/{id}/historical`


<!-- END_03e536c30ab3f7f1137e68af259fc64b -->

<!-- START_f29913c78a53c6645cc3437fd3f58eed -->
## Display a listing of the user resource.

> Example request:

```bash
curl -X GET "http://localhost/api/portfolio" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/portfolio",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/portfolio`

`HEAD api/portfolio`


<!-- END_f29913c78a53c6645cc3437fd3f58eed -->

<!-- START_ed06d70e6afb4546063108fd74883b7a -->
## Store a newly created resource in storage for Auth user.

> Example request:

```bash
curl -X POST "http://localhost/api/portfolio" \
-H "Accept: application/json" \
    -d "coin_id"="molestiae" \
    -d "amount"="489256095" \
    -d "price_usd"="1988883056" \
    -d "traded_at"="Wednesday, 02-May-18 09:14:39 UTC" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/portfolio",
    "method": "POST",
    "data": {
        "coin_id": "molestiae",
        "amount": 489256095,
        "price_usd": 1988883056,
        "traded_at": "Wednesday, 02-May-18 09:14:39 UTC"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/portfolio`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    coin_id | string |  required  | Valid coin id
    amount | numeric |  required  | 
    price_usd | numeric |  required  | Minimum: `0`
    traded_at | date |  required  | Must be a date preceding: `Thursday, 03-May-18 09:14:39 UTC`

<!-- END_ed06d70e6afb4546063108fd74883b7a -->


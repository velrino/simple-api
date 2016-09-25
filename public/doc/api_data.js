define({ "api": [
  {
    "type": "post",
    "url": "/auth/facebook",
    "title": "Facebook",
    "group": "Auth",
    "name": "Facebook",
    "parameter": {
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n  \"facebook_id\": \"STRING\",\n  \"facebook_token\": \"STRING\"\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n  \"User\":\n    {\n      \"_id\": \"57ae75bda697b2001046b09012390\",\n      \"facebook_id\": \"57ae754da697b2000c0ba171\",\n      \"facebook_token\": \"57ae754da697b2000c0ba171012909129010911\",\n      \"updated_at\": \"2016-08-13 01:19:57\",\n      \"created_at\": \"2016-08-13 01:19:57\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "422 Invalid",
          "content": "{\n  \"error\": {\n    \"message\": \"Usuário não pode ser criado\",\n    \"errors\": [\n      [\n        \"facebook id não informado\"\n      ]\n    ],\n    \"status_code\": 422\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/AppController.php",
    "groupTitle": "Auth"
  },
  {
    "type": "post",
    "url": "/products",
    "title": "Criar",
    "group": "Produtos",
    "name": "Criar",
    "parameter": {
      "examples": [
        {
          "title": "Example:",
          "content": "{\n\t\"user\" : \"57e825b880570d0074746b112\",\n\t\"name\" : \"STRING \",\n\t\"description\" : \"STRING\",\n\t\"image\" : \"STRING\",\n\t\"price\" : \"STRING\",\n\t\"category\" : \"ARRAY\",\n\t\"count\" : \"INTEGER\",\n\t\"type\" : \"STRING\",\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n  \"Product\": {\n    \"_id\": \"57e82c4080570d00854f5ab1\",\n    \"user\": \"57e825b880570d0074746b11\",\n    \"name\": \"Teste\",\n    \"updated_at\": \"2016-09-25 16:57:52\",\n    \"created_at\": \"2016-09-25 16:57:52\"\n  }\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "422 Invalid",
          "content": "{\n  \"error\": {\n    \"message\": \"Produto não pode ser criado\",\n    \"errors\": [\n      [\n        \"user não existe\"\n      ]\n    ],\n    \"status_code\": 422\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/ProductsController.php",
    "groupTitle": "Produtos"
  }
] });

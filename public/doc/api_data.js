define({ "api": [
  {
    "type": "post",
    "url": "/auth/login",
    "title": "Login",
    "group": "Auth",
    "name": "Login",
    "parameter": {
      "examples": [
        {
          "title": "Example:",
          "content": "{\n\t\"email\" : \"STRING\",\n\t\"password\" : \"STRING\",\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n  \"User\": {\n    \"_id\": \"57e82c4080570d00854f5ab1\",\n    \"email\": \"teste@email.com\",\n    \"password\": \"teste\",\n    \"updated_at\": \"2016-09-25 16:57:52\",\n    \"created_at\": \"2016-09-25 16:57:52\"\n  }\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "422 Invalid",
          "content": "{\n  \"error\": {\n    \"message\": \"Usuário não auutenticado\",\n    \"errors\": [\n      [\n        \"Email ou senha incorreto\"\n      ]\n    ],\n    \"status_code\": 404\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/AuthController.php",
    "groupTitle": "Auth"
  },
  {
    "type": "post",
    "url": "/users",
    "title": "Create",
    "group": "Users",
    "name": "Create",
    "parameter": {
      "examples": [
        {
          "title": "Example:",
          "content": "{\n\t\"email\" : \"STRING\",\n\t\"password\" : \"STRING\",\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n  \"User\": {\n    \"_id\": \"57e82c4080570d00854f5ab1\",\n    \"email\": \"teste@email.com\",\n    \"password\": \"teste\",\n    \"updated_at\": \"2016-09-25 16:57:52\",\n    \"created_at\": \"2016-09-25 16:57:52\"\n  }\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "422 Invalid",
          "content": "{\n  \"error\": {\n    \"message\": \"Usuário não pode ser criado\",\n    \"errors\": [\n      [\n        \"password não informado\"\n      ]\n    ],\n    \"status_code\": 422\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "put",
    "url": "/users",
    "title": "Update",
    "group": "Users",
    "name": "Create",
    "parameter": {
      "examples": [
        {
          "title": "Example:",
          "content": "{\n\t\"name\" : \"STRING\",\n\t\"hierarchy\" : \"STRING\",\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n  \"message\": \"true\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "422 Invalid",
          "content": "{\n  \"error\": {\n    \"message\": \"Usuário não pode ser atualizado\",\n    \"errors\": [\n      [\n        \"_id não existe\"\n      ]\n    ],\n    \"status_code\": 422\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "get",
    "url": "/users?where=column,value",
    "title": "Query",
    "group": "Users",
    "parameter": {
      "fields": {
        "Query": [
          {
            "group": "Query",
            "type": "String",
            "optional": false,
            "field": "where",
            "description": "<p>Após o sinal de = você informa a coluna e valor, por exemplo para conseguir serviços do tipo tech, basta informar: &quot;where=type,tech&quot; ou multiplos valores &quot;where=state,São Paulo&amp;where=type,tech&quot;.</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "200 OK",
          "content": "{\n [\n    {\n      \"_id\": \"57ae75bda697b2001046b09012390\",\n      \"email\": \"email@mail.com\",\n      \"type\": \"tech\",\n      \"state\": \"São Paulo\",\n      \"updated_at\": \"2016-08-13 01:19:57\",\n      \"created_at\": \"2016-08-13 01:19:57\"\n    },\n    {\n      \"_id\": \"57ae75bda697b2001046b0b1\",\n      \"email\": \"email2@mail.com\",\n      \"type\": \"tech\",\n      \"state\": \"São Paulo\",\n      \"updated_at\": \"2016-08-13 01:29:57\",\n      \"created_at\": \"2016-08-13 01:29:57\"\n    }\n  ]\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users",
    "name": "GetUsersWhereColumnValue"
  }
] });

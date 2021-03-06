define({ "api": [
  {
    "type": "post",
    "url": "/products",
    "title": "",
    "group": "Produtos",
    "parameter": {
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n\t\"user\" : \"57e825b880570d0074746b112\",\n\t\"name\" : \"STRING \",\n\t\"description\" : \"STRING\",\n\t\"image\" : \"STRING\",\n\t\"price\" : \"STRING\",\n\t\"category\" : \"ARRAY\",\n\t\"count\" : \"INTEGER\",\n\t\"type\" : \"STRING\",\n}",
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
          "content": "{\n  \"error\": {\n    \"message\": \"Produto não pode ser criado\",\n    \"errors\": [\n      [\n        \"user não existe\"\n      ]\n    ],\n    \"status_code\": 422\n  }\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/ProductsController.php",
    "groupTitle": "Produtos",
    "name": "PostProducts"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Database::listCollections()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/CollectionInfoIterator.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_CollectionInfoIterator_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_CollectionInfoIterator_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Database::listCollections()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/CollectionInfo.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_CollectionInfo_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_CollectionInfo_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Client::listDatabases()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/DatabaseInfoIterator.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_DatabaseInfoIterator_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_DatabaseInfoIterator_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Client::listDatabases()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/DatabaseInfo.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_DatabaseInfo_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_DatabaseInfo_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::listIndexes()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/IndexInfoIterator.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_IndexInfoIterator_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_IndexInfoIterator_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::listIndexes()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Model/IndexInfo.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_IndexInfo_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Model_IndexInfo_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::aggregate()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/Aggregate.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Aggregate_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Aggregate_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::bulkWrite()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/BulkWrite.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_BulkWrite_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_BulkWrite_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::count()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/Count.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Count_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Count_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Database::createCollection()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/CreateCollection.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_CreateCollection_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_CreateCollection_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::createIndex()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/CreateIndexes.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_CreateIndexes_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_CreateIndexes_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Database::command()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DatabaseCommand.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DatabaseCommand_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DatabaseCommand_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::deleteOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DeleteMany.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DeleteMany_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DeleteMany_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::deleteOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DeleteOne.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DeleteOne_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DeleteOne_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::distinct()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/Distinct.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Distinct_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Distinct_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::drop()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DropCollection.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropCollection_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropCollection_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Client::dropDatabase()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DropDatabase.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropDatabase_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropDatabase_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::dropIndexes()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/DropIndexes.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropIndexes_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_DropIndexes_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::findOneAndDelete()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/FindOneAndDelete.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndDelete_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndDelete_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::findOneAndReplace()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/FindOneAndReplace.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndReplace_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndReplace_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::findOneAndUpdate()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/FindOneAndUpdate.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndUpdate_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOneAndUpdate_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::findOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/FindOne.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOne_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_FindOne_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::find()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/Find.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Find_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_Find_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::insertMany()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/InsertMany.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_InsertMany_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_InsertMany_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::insertOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/InsertOne.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_InsertOne_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_InsertOne_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Database::listCollections()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/ListCollections.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListCollections_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListCollections_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Client::listDatabases()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/ListDatabases.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListDatabases_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListDatabases_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::listIndexes()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/ListIndexes.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListIndexes_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ListIndexes_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::replaceOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/ReplaceOne.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ReplaceOne_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_ReplaceOne_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::updateMany()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/UpdateMany.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_UpdateMany_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_UpdateMany_php",
    "name": "See"
  },
  {
    "type": "",
    "url": "@see",
    "title": "MongoDB\\Collection::updateOne()",
    "version": "0.0.0",
    "filename": "./vendor/mongodb/mongodb/src/Operation/UpdateOne.php",
    "group": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_UpdateOne_php",
    "groupTitle": "_home_velrino_projetos_man_api_default_vendor_mongodb_mongodb_src_Operation_UpdateOne_php",
    "name": "See"
  }
] });

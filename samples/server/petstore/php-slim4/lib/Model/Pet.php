<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\BaseModel;

/**
 * Pet
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class Pet extends BaseModel
{
    /**
     * @var string Models namespace.
     * Can be required for data deserialization when model contains referenced schemas.
     */
    protected const MODELS_NAMESPACE = '\OpenAPIServer\Model';

    /**
     * @var string Constant with OAS schema of current class.
     * Should be overwritten by inherited class.
     */
    protected const MODEL_SCHEMA = <<<'SCHEMA'
{
  "title" : "a Pet",
  "required" : [ "name", "photoUrls" ],
  "type" : "object",
  "properties" : {
    "id" : {
      "type" : "integer",
      "format" : "int64"
    },
    "category" : {
      "$ref" : "#/components/schemas/Category"
    },
    "name" : {
      "type" : "string",
      "example" : "doggie"
    },
    "photoUrls" : {
      "type" : "array",
      "xml" : {
        "name" : "photoUrl",
        "wrapped" : true
      },
      "items" : {
        "type" : "string"
      }
    },
    "tags" : {
      "type" : "array",
      "xml" : {
        "name" : "tag",
        "wrapped" : true
      },
      "items" : {
        "$ref" : "#/components/schemas/Tag"
      }
    },
    "status" : {
      "type" : "string",
      "description" : "pet status in the store",
      "enum" : [ "available", "pending", "sold" ]
    }
  },
  "description" : "A pet for sale in the pet store",
  "xml" : {
    "name" : "Pet"
  }
}
SCHEMA;
}

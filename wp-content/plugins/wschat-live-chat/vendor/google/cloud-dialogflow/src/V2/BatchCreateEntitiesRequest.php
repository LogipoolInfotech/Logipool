<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [EntityTypes.BatchCreateEntities][google.cloud.dialogflow.v2.EntityTypes.BatchCreateEntities].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.BatchCreateEntitiesRequest</code>
 */
class BatchCreateEntitiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entity type to create entities in. Format:
     * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The entities to create.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entities;
    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the entity type to create entities in. Format:
     *           `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\EntityType\Entity[]|\Google\Protobuf\Internal\RepeatedField $entities
     *           Required. The entities to create.
     *     @type string $language_code
     *           Optional. The language used to access language-specific data.
     *           If not specified, the agent's default language is used.
     *           For more information, see
     *           [Multilingual intent and entity
     *           data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the entity type to create entities in. Format:
     * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the entity type to create entities in. Format:
     * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The entities to create.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Required. The entities to create.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType\Entity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\EntityType\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The status of a reload attempt.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Document.ReloadStatus</code>
 */
class ReloadStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The time of a reload attempt.
     * This reload may have been triggered automatically or manually and may
     * not have succeeded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     */
    private $time = null;
    /**
     * The status of a reload attempt or the initial load.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $time
     *           The time of a reload attempt.
     *           This reload may have been triggered automatically or manually and may
     *           not have succeeded.
     *     @type \Google\Rpc\Status $status
     *           The status of a reload attempt or the initial load.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The time of a reload attempt.
     * This reload may have been triggered automatically or manually and may
     * not have succeeded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * The time of a reload attempt.
     * This reload may have been triggered automatically or manually and may
     * not have succeeded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * The status of a reload attempt or the initial load.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of a reload attempt or the initial load.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReloadStatus::class, \Google\Cloud\Dialogflow\V2\Document_ReloadStatus::class);


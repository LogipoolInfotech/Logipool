<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a speech recognition result corresponding to a portion of the audio
 * that is currently being processed or an indication that this is the end
 * of the single requested utterance.
 * Example:
 * 1.  transcript: "tube"
 * 2.  transcript: "to be a"
 * 3.  transcript: "to be"
 * 4.  transcript: "to be or not to be"
 *     is_final: true
 * 5.  transcript: " that's"
 * 6.  transcript: " that is"
 * 7.  message_type: `END_OF_SINGLE_UTTERANCE`
 * 8.  transcript: " that is the question"
 *     is_final: true
 * Only two of the responses contain final results (#4 and #8 indicated by
 * `is_final: true`). Concatenating these generates the full transcript: "to be
 * or not to be that is the question".
 * In each response we populate:
 * *  for `TRANSCRIPT`: `transcript` and possibly `is_final`.
 * *  for `END_OF_SINGLE_UTTERANCE`: only `message_type`.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.StreamingRecognitionResult</code>
 */
class StreamingRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult.MessageType message_type = 1;</code>
     */
    private $message_type = 0;
    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     */
    private $transcript = '';
    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     */
    private $is_final = false;
    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    private $confidence = 0.0;
    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.v2.StreamingRecognitionResult.transcript]. Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SpeechWordInfo speech_word_info = 7;</code>
     */
    private $speech_word_info;
    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     */
    private $speech_end_offset = null;
    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $message_type
     *           Type of the result message.
     *     @type string $transcript
     *           Transcript text representing the words that the user spoke.
     *           Populated if and only if `message_type` = `TRANSCRIPT`.
     *     @type bool $is_final
     *           If `false`, the `StreamingRecognitionResult` represents an
     *           interim result that may change. If `true`, the recognizer will not return
     *           any further hypotheses about this piece of the audio. May only be populated
     *           for `message_type` = `TRANSCRIPT`.
     *     @type float $confidence
     *           The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     *           A higher number indicates an estimated greater likelihood that the
     *           recognized words are correct. The default of 0.0 is a sentinel value
     *           indicating that confidence was not set.
     *           This field is typically only provided if `is_final` is true and you should
     *           not rely on it being accurate or even set.
     *     @type \Google\Cloud\Dialogflow\V2\SpeechWordInfo[]|\Google\Protobuf\Internal\RepeatedField $speech_word_info
     *           Word-specific information for the words recognized by Speech in
     *           [transcript][google.cloud.dialogflow.v2.StreamingRecognitionResult.transcript]. Populated if and only if `message_type` = `TRANSCRIPT` and
     *           [InputAudioConfig.enable_word_info] is set.
     *     @type \Google\Protobuf\Duration $speech_end_offset
     *           Time offset of the end of this Speech recognition result relative to the
     *           beginning of the audio. Only populated for `message_type` = `TRANSCRIPT`.
     *     @type string $language_code
     *           Detected language code for the transcript.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult.MessageType message_type = 1;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult.MessageType message_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\StreamingRecognitionResult\MessageType::class);
        $this->message_type = $var;

        return $this;
    }

    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTranscript($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcript = $var;

        return $this;
    }

    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->is_final;
    }

    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinal($var)
    {
        GPBUtil::checkBool($var);
        $this->is_final = $var;

        return $this;
    }

    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.v2.StreamingRecognitionResult.transcript]. Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SpeechWordInfo speech_word_info = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechWordInfo()
    {
        return $this->speech_word_info;
    }

    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.v2.StreamingRecognitionResult.transcript]. Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SpeechWordInfo speech_word_info = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2\SpeechWordInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechWordInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SpeechWordInfo::class);
        $this->speech_word_info = $arr;

        return $this;
    }

    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechEndOffset()
    {
        return $this->speech_end_offset;
    }

    public function hasSpeechEndOffset()
    {
        return isset($this->speech_end_offset);
    }

    public function clearSpeechEndOffset()
    {
        unset($this->speech_end_offset);
    }

    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechEndOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_end_offset = $var;

        return $this;
    }

    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
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


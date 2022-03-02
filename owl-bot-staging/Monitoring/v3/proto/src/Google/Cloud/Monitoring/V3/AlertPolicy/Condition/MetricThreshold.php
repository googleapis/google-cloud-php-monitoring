<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition type that compares a collection of time series
 * against a threshold.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.MetricThreshold</code>
 */
class MetricThreshold extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies which time series should be compared with the threshold.
     * The filter is similar to the one that is specified in the
     * [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list)
     * (that call is useful to verify the time series that will be retrieved /
     * processed). The filter must specify the metric type and the resource
     * type. Optionally, it can specify resource labels and metric labels.
     * This field must not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources). Multiple aggregations
     * are applied in the order specified.
     * This field is similar to the one in the [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list).
     * It is advisable to use the `ListTimeSeries` method when debugging this
     * field.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation aggregations = 8;</code>
     */
    private $aggregations;
    /**
     * A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies a time series that should be used as the denominator of a
     * ratio that will be compared with the threshold. If a
     * `denominator_filter` is specified, the time series specified by the
     * `filter` field will be used as the numerator.
     * The filter must specify the metric type and optionally may contain
     * restrictions on resource type, resource labels, and metric labels.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string denominator_filter = 9;</code>
     */
    protected $denominator_filter = '';
    /**
     * Specifies the alignment of data points in individual time series
     * selected by `denominatorFilter` as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources).
     * When computing ratios, the `aggregations` and
     * `denominator_aggregations` fields must use the same alignment period
     * and produce time series that have the same periodicity and labels.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation denominator_aggregations = 10;</code>
     */
    private $denominator_aggregations;
    /**
     * The comparison to apply between the time series (indicated by `filter`
     * and `aggregation`) and the threshold (indicated by `threshold_value`).
     * The comparison is applied on each time series, with the time series
     * on the left-hand side and the threshold on the right-hand side.
     * Only `COMPARISON_LT` and `COMPARISON_GT` are supported currently.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ComparisonType comparison = 4;</code>
     */
    protected $comparison = 0;
    /**
     * A value against which to compare the time series.
     *
     * Generated from protobuf field <code>double threshold_value = 5;</code>
     */
    protected $threshold_value = 0.0;
    /**
     * The amount of time that a time series must violate the
     * threshold to be considered failing. Currently, only values
     * that are a multiple of a minute--e.g., 0, 60, 120, or 300
     * seconds--are supported. If an invalid value is given, an
     * error will be returned. When choosing a duration, it is useful to
     * keep in mind the frequency of the underlying time series data
     * (which may also be affected by any alignments specified in the
     * `aggregations` field); a good duration is long enough so that a single
     * outlier does not generate spurious alerts, but short enough that
     * unhealthy states are detected and alerted on quickly.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 6;</code>
     */
    protected $duration = null;
    /**
     * The number/percent of time series for which the comparison must hold
     * in order for the condition to trigger. If unspecified, then the
     * condition will trigger if the comparison is true for any of the
     * time series that have been identified by `filter` and `aggregations`,
     * or by the ratio, if `denominator_filter` and `denominator_aggregations`
     * are specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.Trigger trigger = 7;</code>
     */
    protected $trigger = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filter
     *           Required. A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     *           identifies which time series should be compared with the threshold.
     *           The filter is similar to the one that is specified in the
     *           [`ListTimeSeries`
     *           request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list)
     *           (that call is useful to verify the time series that will be retrieved /
     *           processed). The filter must specify the metric type and the resource
     *           type. Optionally, it can specify resource labels and metric labels.
     *           This field must not exceed 2048 Unicode characters in length.
     *     @type \Google\Cloud\Monitoring\V3\Aggregation[]|\Google\Protobuf\Internal\RepeatedField $aggregations
     *           Specifies the alignment of data points in individual time series as
     *           well as how to combine the retrieved time series together (such as
     *           when aggregating multiple streams on each resource to a single
     *           stream for each resource or when aggregating streams across all
     *           members of a group of resources). Multiple aggregations
     *           are applied in the order specified.
     *           This field is similar to the one in the [`ListTimeSeries`
     *           request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list).
     *           It is advisable to use the `ListTimeSeries` method when debugging this
     *           field.
     *     @type string $denominator_filter
     *           A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     *           identifies a time series that should be used as the denominator of a
     *           ratio that will be compared with the threshold. If a
     *           `denominator_filter` is specified, the time series specified by the
     *           `filter` field will be used as the numerator.
     *           The filter must specify the metric type and optionally may contain
     *           restrictions on resource type, resource labels, and metric labels.
     *           This field may not exceed 2048 Unicode characters in length.
     *     @type \Google\Cloud\Monitoring\V3\Aggregation[]|\Google\Protobuf\Internal\RepeatedField $denominator_aggregations
     *           Specifies the alignment of data points in individual time series
     *           selected by `denominatorFilter` as
     *           well as how to combine the retrieved time series together (such as
     *           when aggregating multiple streams on each resource to a single
     *           stream for each resource or when aggregating streams across all
     *           members of a group of resources).
     *           When computing ratios, the `aggregations` and
     *           `denominator_aggregations` fields must use the same alignment period
     *           and produce time series that have the same periodicity and labels.
     *     @type int $comparison
     *           The comparison to apply between the time series (indicated by `filter`
     *           and `aggregation`) and the threshold (indicated by `threshold_value`).
     *           The comparison is applied on each time series, with the time series
     *           on the left-hand side and the threshold on the right-hand side.
     *           Only `COMPARISON_LT` and `COMPARISON_GT` are supported currently.
     *     @type float $threshold_value
     *           A value against which to compare the time series.
     *     @type \Google\Protobuf\Duration $duration
     *           The amount of time that a time series must violate the
     *           threshold to be considered failing. Currently, only values
     *           that are a multiple of a minute--e.g., 0, 60, 120, or 300
     *           seconds--are supported. If an invalid value is given, an
     *           error will be returned. When choosing a duration, it is useful to
     *           keep in mind the frequency of the underlying time series data
     *           (which may also be affected by any alignments specified in the
     *           `aggregations` field); a good duration is long enough so that a single
     *           outlier does not generate spurious alerts, but short enough that
     *           unhealthy states are detected and alerted on quickly.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\Trigger $trigger
     *           The number/percent of time series for which the comparison must hold
     *           in order for the condition to trigger. If unspecified, then the
     *           condition will trigger if the comparison is true for any of the
     *           time series that have been identified by `filter` and `aggregations`,
     *           or by the ratio, if `denominator_filter` and `denominator_aggregations`
     *           are specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies which time series should be compared with the threshold.
     * The filter is similar to the one that is specified in the
     * [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list)
     * (that call is useful to verify the time series that will be retrieved /
     * processed). The filter must specify the metric type and the resource
     * type. Optionally, it can specify resource labels and metric labels.
     * This field must not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies which time series should be compared with the threshold.
     * The filter is similar to the one that is specified in the
     * [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list)
     * (that call is useful to verify the time series that will be retrieved /
     * processed). The filter must specify the metric type and the resource
     * type. Optionally, it can specify resource labels and metric labels.
     * This field must not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources). Multiple aggregations
     * are applied in the order specified.
     * This field is similar to the one in the [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list).
     * It is advisable to use the `ListTimeSeries` method when debugging this
     * field.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation aggregations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAggregations()
    {
        return $this->aggregations;
    }

    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources). Multiple aggregations
     * are applied in the order specified.
     * This field is similar to the one in the [`ListTimeSeries`
     * request](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.timeSeries/list).
     * It is advisable to use the `ListTimeSeries` method when debugging this
     * field.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation aggregations = 8;</code>
     * @param \Google\Cloud\Monitoring\V3\Aggregation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Aggregation::class);
        $this->aggregations = $arr;

        return $this;
    }

    /**
     * A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies a time series that should be used as the denominator of a
     * ratio that will be compared with the threshold. If a
     * `denominator_filter` is specified, the time series specified by the
     * `filter` field will be used as the numerator.
     * The filter must specify the metric type and optionally may contain
     * restrictions on resource type, resource labels, and metric labels.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string denominator_filter = 9;</code>
     * @return string
     */
    public function getDenominatorFilter()
    {
        return $this->denominator_filter;
    }

    /**
     * A [filter](https://cloud.google.com/monitoring/api/v3/filters) that
     * identifies a time series that should be used as the denominator of a
     * ratio that will be compared with the threshold. If a
     * `denominator_filter` is specified, the time series specified by the
     * `filter` field will be used as the numerator.
     * The filter must specify the metric type and optionally may contain
     * restrictions on resource type, resource labels, and metric labels.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string denominator_filter = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDenominatorFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->denominator_filter = $var;

        return $this;
    }

    /**
     * Specifies the alignment of data points in individual time series
     * selected by `denominatorFilter` as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources).
     * When computing ratios, the `aggregations` and
     * `denominator_aggregations` fields must use the same alignment period
     * and produce time series that have the same periodicity and labels.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation denominator_aggregations = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDenominatorAggregations()
    {
        return $this->denominator_aggregations;
    }

    /**
     * Specifies the alignment of data points in individual time series
     * selected by `denominatorFilter` as
     * well as how to combine the retrieved time series together (such as
     * when aggregating multiple streams on each resource to a single
     * stream for each resource or when aggregating streams across all
     * members of a group of resources).
     * When computing ratios, the `aggregations` and
     * `denominator_aggregations` fields must use the same alignment period
     * and produce time series that have the same periodicity and labels.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Aggregation denominator_aggregations = 10;</code>
     * @param \Google\Cloud\Monitoring\V3\Aggregation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDenominatorAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Aggregation::class);
        $this->denominator_aggregations = $arr;

        return $this;
    }

    /**
     * The comparison to apply between the time series (indicated by `filter`
     * and `aggregation`) and the threshold (indicated by `threshold_value`).
     * The comparison is applied on each time series, with the time series
     * on the left-hand side and the threshold on the right-hand side.
     * Only `COMPARISON_LT` and `COMPARISON_GT` are supported currently.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ComparisonType comparison = 4;</code>
     * @return int
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * The comparison to apply between the time series (indicated by `filter`
     * and `aggregation`) and the threshold (indicated by `threshold_value`).
     * The comparison is applied on each time series, with the time series
     * on the left-hand side and the threshold on the right-hand side.
     * Only `COMPARISON_LT` and `COMPARISON_GT` are supported currently.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ComparisonType comparison = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setComparison($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\ComparisonType::class);
        $this->comparison = $var;

        return $this;
    }

    /**
     * A value against which to compare the time series.
     *
     * Generated from protobuf field <code>double threshold_value = 5;</code>
     * @return float
     */
    public function getThresholdValue()
    {
        return $this->threshold_value;
    }

    /**
     * A value against which to compare the time series.
     *
     * Generated from protobuf field <code>double threshold_value = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setThresholdValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->threshold_value = $var;

        return $this;
    }

    /**
     * The amount of time that a time series must violate the
     * threshold to be considered failing. Currently, only values
     * that are a multiple of a minute--e.g., 0, 60, 120, or 300
     * seconds--are supported. If an invalid value is given, an
     * error will be returned. When choosing a duration, it is useful to
     * keep in mind the frequency of the underlying time series data
     * (which may also be affected by any alignments specified in the
     * `aggregations` field); a good duration is long enough so that a single
     * outlier does not generate spurious alerts, but short enough that
     * unhealthy states are detected and alerted on quickly.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * The amount of time that a time series must violate the
     * threshold to be considered failing. Currently, only values
     * that are a multiple of a minute--e.g., 0, 60, 120, or 300
     * seconds--are supported. If an invalid value is given, an
     * error will be returned. When choosing a duration, it is useful to
     * keep in mind the frequency of the underlying time series data
     * (which may also be affected by any alignments specified in the
     * `aggregations` field); a good duration is long enough so that a single
     * outlier does not generate spurious alerts, but short enough that
     * unhealthy states are detected and alerted on quickly.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * The number/percent of time series for which the comparison must hold
     * in order for the condition to trigger. If unspecified, then the
     * condition will trigger if the comparison is true for any of the
     * time series that have been identified by `filter` and `aggregations`,
     * or by the ratio, if `denominator_filter` and `denominator_aggregations`
     * are specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.Trigger trigger = 7;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\Trigger|null
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    public function hasTrigger()
    {
        return isset($this->trigger);
    }

    public function clearTrigger()
    {
        unset($this->trigger);
    }

    /**
     * The number/percent of time series for which the comparison must hold
     * in order for the condition to trigger. If unspecified, then the
     * condition will trigger if the comparison is true for any of the
     * time series that have been identified by `filter` and `aggregations`,
     * or by the ratio, if `denominator_filter` and `denominator_aggregations`
     * are specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.Trigger trigger = 7;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\Trigger $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\Trigger::class);
        $this->trigger = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricThreshold::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_MetricThreshold::class);


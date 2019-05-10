<?php

namespace PetrKnap\Php\Profiler;

/**
 * Advanced PHP class for profiling
 *
 * @author   Petr Knap <dev@petrknap.cz>
 * @since    2015-12-19
 * @license  https://github.com/petrknap/php-profiler/blob/master/LICENSE MIT
 */
class AdvancedProfiler extends SimpleProfiler
{
    /**
     * @var bool
     */
    protected static $enabled = false;

    /**
     * @var Profile[]
     */
    protected static $stack = [];

    /**
     * @var callable
     */
    protected static $postProcessor = null;

    /**
     * Set post processor
     *
     * Post processor is callable with one input argument (return from finish method) and is called at the end of finish method.
     *
     * @param callable $postProcessor
     */
    public static function setPostProcessor(callable $postProcessor)
    {
        static::$postProcessor = $postProcessor;
    }

    /**
     * Get current "{file}#{line}"
     *
     * @return string|bool current "{file}#{line}" on success or false on failure
     */
    public static function getCurrentFileHashLine()
    {
        $args = func_get_args();

        $deep = &$args[0];

        $backtrace = debug_backtrace();
        $backtrace = &$backtrace[$deep ? $deep : 0];

        if ($backtrace) {
            return sprintf(
                "%s#%s",
                $backtrace["file"],
                $backtrace["line"]
            );
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public static function start($labelOrFormat = null, $args = null, $_ = null)
    {
        if (static::$enabled) {
            if ($labelOrFormat === null) {
                $labelOrFormat = static::getCurrentFileHashLine(1);
                $args = null;
                $_ = null;
            }

            return parent::start($labelOrFormat, $args, $_);
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public static function finish($labelOrFormat = null, $args = null, $_ = null)
    {
        if (static::$enabled) {
            if ($labelOrFormat === null) {
                $labelOrFormat = static::getCurrentFileHashLine(1);
                $args = null;
                $_ = null;
            }

            $profile = parent::finish($labelOrFormat, $args, $_);

            if (static::$postProcessor === null) {
                return $profile;
            }

            return call_user_func(static::$postProcessor, $profile);
        }

        return false;
    }
}

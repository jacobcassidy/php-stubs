<?php

/**
 * Self-create stub declarations for missing WordPress functions
 */

namespace {
    /**
     * Enqueues a stylesheet for a specific block.
     *
     * If the theme has opted-in to separate-styles loading,
     * then the stylesheet will be enqueued on-render,
     * otherwise when the block inits.
     *
     * @since 5.9.0
     *
     * @param string $block_name The block-name, including namespace.
     * @param array  $args       {
     *     An array of arguments. See wp_register_style() for full information about each argument.
     *
     *     @type string           $handle The handle for the stylesheet.
     *     @type string|false     $src    The source URL of the stylesheet.
     *     @type string[]         $deps   Array of registered stylesheet handles this stylesheet depends on.
     *     @type string|bool|null $ver    Stylesheet version number.
     *     @type string           $media  The media for which this stylesheet has been defined.
     * }
     * @phpstan-param array{
     *   handle?: string,
     *   src?: string|false,
     *   deps?: string[],
     *   ver?: string|bool|null,
     *   media?: string,
     * } $args
     */
    function wp_enqueue_block_style($block_name, $args)
    {
    }
}

<?php

/**
 * Self-create stub declarations for missing WordPress functions
 * @link https://github.com/php-stubs/wordpress-stubs/blob/master/wordpress-stubs.php
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

    /**
     * Block Bindings API
     *
     * Contains functions for managing block bindings in WordPress.
     *
     * @package WordPress
     * @subpackage Block Bindings
     * @since 6.5.0
     */
    /**
     * Registers a new block bindings source.
     *
     * Registering a source consists of defining a **name** for that source and a callback function specifying
     * how to get a value from that source and pass it to a block attribute.
     *
     * Once a source is registered, any block that supports the Block Bindings API can use a value
     * from that source by setting its `metadata.bindings` attribute to a value that refers to the source.
     *
     * Note that `register_block_bindings_source()` should be called from a handler attached to the `init` hook.
     *
     *
     * ## Example
     *
     * ### Registering a source
     *
     * First, you need to define a function that will be used to get the value from the source.
     *
     *     function my_plugin_get_custom_source_value( array $source_args, $block_instance, string $attribute_name ) {
     *       // Your custom logic to get the value from the source.
     *       // For example, you can use the `$source_args` to look up a value in a custom table or get it from an external API.
     *       $value = $source_args['key'];
     *
     *       return "The value passed to the block is: $value"
     *     }
     *
     * The `$source_args` will contain the arguments passed to the source in the block's
     * `metadata.bindings` attribute. See the example in the "Usage in a block" section below.
     *
     *     function my_plugin_register_block_bindings_sources() {
     *       register_block_bindings_source( 'my-plugin/my-custom-source', array(
     *         'label'              => __( 'My Custom Source', 'my-plugin' ),
     *         'get_value_callback' => 'my_plugin_get_custom_source_value',
     *       ) );
     *     }
     *     add_action( 'init', 'my_plugin_register_block_bindings_sources' );
     *
     * ### Usage in a block
     *
     * In a block's `metadata.bindings` attribute, you can specify the source and
     * its arguments. Such a block will use the source to override the block
     * attribute's value. For example:
     *
     *     <!-- wp:paragraph {
     *       "metadata": {
     *         "bindings": {
     *           "content": {
     *             "source": "my-plugin/my-custom-source",
     *             "args": {
     *               "key": "you can pass any custom arguments here"
     *             }
     *           }
     *         }
     *       }
     *     } -->
     *     <p>Fallback text that gets replaced.</p>
     *     <!-- /wp:paragraph -->
     *
     * @since 6.5.0
     *
     * @param string $source_name       The name of the source. It must be a string containing a namespace prefix, i.e.
     *                                  `my-plugin/my-custom-source`. It must only contain lowercase alphanumeric
     *                                  characters, the forward slash `/` and dashes.
     * @param array  $source_properties {
     *     The array of arguments that are used to register a source.
     *
     *     @type string   $label              The label of the source.
     *     @type callable $get_value_callback A callback executed when the source is processed during block rendering.
     *                                        The callback should have the following signature:
     *
     *                                        `function( $source_args, $block_instance, $attribute_name ): mixed`
     *                                            - @param array    $source_args    Array containing source arguments
     *                                                                              used to look up the override value,
     *                                                                              i.e. {"key": "foo"}.
     *                                            - @param WP_Block $block_instance The block instance.
     *                                            - @param string   $attribute_name The name of an attribute.
     *                                        The callback has a mixed return type; it may return a string to override
     *                                        the block's original value, null, false to remove an attribute, etc.
     *     @type string[] $uses_context       Optional. Array of values to add to block `uses_context` needed by the source.
     * }
     * @return WP_Block_Bindings_Source|false Source when the registration was successful, or `false` on failure.
     * @phpstan-param array{
     *   label?: string,
     *   get_value_callback?: callable,
     *   uses_context?: string[],
     * } $source_properties
     */
    function register_block_bindings_source(string $source_name, array $source_properties)
    {
    }
}
